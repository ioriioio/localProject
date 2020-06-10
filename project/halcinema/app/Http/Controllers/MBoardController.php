<?php


namespace App\Http\Controllers;

use App\models\Board;
use App\models\Comment;
use App\models\MHistory;
use App\models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MBoardController
{
    public function index(){
        $get = Board::select('*')->paginate(5);
        return view('admin.community')
            ->with('contents',$get);
    }

    public function detail(int $id ,Request $request){
        $details = Comment::where('board_id','=',$id)->paginate(20);

        return view('admin.communityDetail')
            ->with('contents',$details);
    }

    public function insertTo(Request $request){
        $input = $request->all();
        if ($input){
            return view('admin.communityUpload')
                ->with('msg','画像を選択し直してください')
                ->with('back',$input);
        }
        return view('admin.communityUpload');
    }

    public function insertConfirm(Request $request){
        $insert = $request->all();

        return view('admin.communityUploadConfirm')
            ->with('contents',$insert);
    }

    public function insert(Request $request){
        $insert = $request->all();

        Board::insert([
            'title'=>$insert['title'],
            'category'=>$insert['category'],
        ]);

        $user = $request->session()->get('user');
        MHistory::insert([
            'content'=>'掲示板を追加しました',
            'update_user'=>$user
        ]);

        $return =[
            'タイトル' => $insert['title'],
            'カテゴリー'=> $insert['category']
        ];

        return redirect('board')
            ->with('msg',$return)
            ->with('flashMsg','以上の内容で掲示板を追加しました');
    }

    public function delete(int $id){

        $get = Board::where('id','=',$id)->first();

        $return = [
          'id'=>$get['id'],
          'タイトル'=>$get['title']
        ];

        Board::where('id','=', $id)->delete();

        return redirect('board')
            ->with('msg',$return)
            ->with('flashMsg','以上の掲示板を削除しました');
    }

    public function commentDelete(int $id){
        $comment = Comment::where('id',$id)->first();
        Comment::where('id',$id)->delete();

        $return = [
            'ID'=> $comment['id'],
            'ユーザーID'=>$comment['user_id'],
            'コメント'=>$comment['comment'],
        ];
        return redirect('communityDetail/'.$comment['board_id'])
            ->with('msg',$return)
            ->with('flashMsg','コメントを削除しました');
    }



}