<?php

namespace App\Http\Controllers;

use App\models\User;
use App\models\Manager;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
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
        $user = Manager::where('name','=',$loginName)->where('password','=',$loginPw)->get()->first();
        if (empty($validationMsgs)) {
            if ($user == null) {
                $validationMsgs[] = "ユーザ名またはパスワードが間違っています。";
            } else {
                $session = $request->session();
                $session->put('user',$user['name']);

                $isRedirect =true;
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
        return redirect('/login');
    }

}
