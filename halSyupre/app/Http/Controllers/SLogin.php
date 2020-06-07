<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SLogin extends Controller
{
    public function index(Request $request){
        return view('travel1.public.manager.login')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }

    //登録が押されたとき登録の処理
    public function login(Request $request){

        try{
            $db = DB::table('stores')->select()
                ->where("name","=","".$request->input('name')."")
                ->get();
        
        
            foreach ($db as $item) {
            
                if(password_verify($request->input('pass'), $item->pass)){
                    echo "ログイン認証に成功しました";

                    $_SESSION["id"] = $item->id;
                    $_SESSION["name"] = $item->name;

                    return redirect("STop")
                        ->with('imgPath',config('const.path.imgPath'))
                        ->with('jsPath',config('const.path.jsPath'))
                        ->with('cssPath',config('const.path.cssPath'));
                }
            }
            
        }catch(Exception $e){
            echo "データベースの接続に失敗しました：";
            echo $e->getMessage();
            die();

            return view('travel1.public.manager.login')
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
        }

        echo "ログイン認証に失敗しました";
        return view('travel1.public.manager.login')
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));


        // password_verify ( $password , $hash );
    }

    public function logout(Request $request){

        session_destroy();

        return view('travel1.public.manager.login')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }
}

