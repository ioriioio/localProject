<?php


namespace App\Http\Controllers;


use App\models\Comment;
use App\models\User;

class MUserControllers
{
    public function index(){
        $user_list = User::paginate(20);

        return view('admin.userlist')
            ->with('lists',$user_list);
    }

    public function user(int $id){
        $user = User::where('id',$id)->first();

        $user_comment = Comment::select('comments.*','boards.title as title')
            ->leftJoin('boards', 'comments.board_id', '=', 'boards.id')
            ->where('comments.user_id',$id)
            ->get();
        
        return view('admin.user')
            ->with('user',$user)
            ->with('comments',$user_comment);
    }

    public function delete(int $id){
        $userId = Comment::where('id',$id)->first();

        Comment::where('id','=', $id)->delete();

        $return = [
            'コメント'=>$userId['comment'],
        ];

        return redirect('user/'.$userId['user_id'])
            ->with('msg',$return)
            ->with('flashMsg','以上のコメントを削除しました');
    }
}