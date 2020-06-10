<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\User;

class MTopController extends controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request)
    {
        $isRedirect = false;
        $templatePath = "login";
        $assign = [];

        $loginName = $request->input("name");
        $loginPw = $request->input("loginPw");

        $validationMsgs = [];
        $user = User::where('name','=',$loginName)->where('password','=',$loginPw)->get();
        if (empty($validationMsgs)) {

            if ($user == null) {
                $validationMsgs[] = "存在しないIDです。正しいIDを入力してください。";
            } else {

            }

        }
        if ($isRedirect) {
            $response = redirect("admin");
        }
        else {
            if (!empty($validationMsgs)) {
                $assign["validationMsgs"] = $validationMsgs;
                $assign["loginName"] = $loginName;
            }
            $response = view('login', $assign);

        }
        return $response;
    }

    public function logout(Request $request){
        $session = $request->session();
        $session->flush();
        $session->regenerate();
        return redirect('/');
    }

}