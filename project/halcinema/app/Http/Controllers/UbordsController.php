<?php


namespace App\Http\Controllers;
use App\models\Board;
use Illuminate\Support\Facades\DB;
use App\models\Comment;
use Illuminate\Http\Request;
class UbordsController
{
  public function index(){
    $list = Board::get();
    return view('iw32.public.view.community.communityTop')
            ->with('lists',$list);

  }

  public function detail(int $id){
    $list = Board::where('id',$id)->first();
    $comment=Comment::where('board_id',$id)->get();

    return view('iw32.public.view.community.community')
    ->with('lists',$list)
    ->with('comments',$comment);
  }

  public function insert (Request $request,int $id){
    $insert = $request->all();
    $comment= Comment::insert([
      'user_name'=> $insert['name'],
      'board_id'=> $id,
      'comment'=>$insert['comment']
    ]);
    
    return redirect('communityBoard/'.$id);

  }



}
