<?php


namespace App\Exceptions;


use Exception;
use illuminate\Http\Request;

class NoLoginException extends Exception
{

    public function render(Request $request){
        $validationMsgs[] = "ログインしてないか、前回ログインしてから一定時間が経過しています。もう一度ログインし直してください";
        $assign["validationMsgs"] = $validationMsgs;
        return view("login",$assign);
    }

}