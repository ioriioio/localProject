<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Movie;
use App\models\MHistory;
use Illuminate\Http\UploadedFile;

class MMovieContloller extends Controller
{
    public function index(Request $request)
    {
        $input = $request->all();
        if ($input != null){
            return view('admin.upmovie')
                ->with('msg','画像を選択し直してください')
                ->with('back',$input);
        }
        return view('admin.upmovie');
    }

    public function confirm(Request $request){
        $input = $request->all();
        $request->file('image')->storeAs('halcinema/resources/views/image', $input['title'].'.jpg');
        $fileName = $_FILES['image']['name'];
        return view('admin.upmovieConfirm')
            ->with('imageName',$fileName)
            ->with('contents',$input);
    }

    public function insert(Request $request){
        $insert = $request->all();
        $screenTime = $insert['screen_time'];
        Movie::insert([
            'title'=>$insert['title'],
            'screening_time'=>$insert['time'].':'.$insert['minute'],
            'make_time'=>$screenTime,
            'director_name'=>$insert['director'],
            'main_actor'=>$insert['actor'],
            'movie_image'=>$insert['image'],
            'movie_information'=>$insert['info']
        ]);

        $user = $request->session()->get('user');
        MHistory::insert([
            'content'=>'映画追加',
            'update_user'=>$user
        ]);

        $send_contents = [];
        $send_contents['タイトル'] = $insert['title'];
        $send_contents['監督名'] = $insert['director'];
        $send_contents['主演俳優'] = $insert['actor'];
        $send_contents['画像'] = $insert['image'];
        $send_contents['上映時間'] = $insert['time'].':'.$insert['minute'];
        $send_contents['制作年月日'] = $screenTime;
        $send_contents['あらすじ'] = $insert['info'];


        return redirect("upmovie")
            ->with("flashMsg",$send_contents);

    }
}