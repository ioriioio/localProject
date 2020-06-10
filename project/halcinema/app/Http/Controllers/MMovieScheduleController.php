<?php


namespace App\Http\Controllers;

use App\models\MHistory;
use App\models\Movie;
use Illuminate\Http\Request;
use App\models\Schedule;
class MMovieScheduleController
{
    public function index(){
        return view('admin.schedule');
    }

    public function confirm(Request $request){
        $input = $request->all();
        $mId = Movie::select('id')->where('title','=',$input['映画名'])->first();
        foreach ($input as $key=>$value){
            if ($value == null){
                switch ($key){
                    case '始':
                        $returnFlg[] = '上映開始時間';
                        break;
                    case '終':
                        $returnFlg[] = '上映終了時間';
                        break;
                    default:
                        $returnFlg[] = $key;
                        break;
                }
            }
        }
        if (isset($returnFlg)){
            return redirect('schedule')
                ->with('errorMsg',$returnFlg)
                ->with('validationMsg','以上の項目が未入力です、入力し直してください');
        }
        if (!$mId){
            $send['映画名'] = $input['映画名'];
            return redirect('schedule')
                ->with('flashMsg','映画が存在しません、先に映画登録を行ってください')
                ->with('msg',$send);
        }

        Schedule::insert([
            'screen_no'=>$input['スクリーン番号'],
            'start_at'=>$input['日付'],
            'start_time'=>$input['始'],
            'end_time'=>$input['終'],
            'movie_id'=>$mId->id,
        ]);

        $user = $request->session()->get('user');
        MHistory::insert([
            'content'=>'映画追加',
            'update_user'=>$user
        ]);

        return redirect('schedule')
            ->with('msg',$input)
            ->with('flashMsg','スケジュールを追加しました');
    }
}