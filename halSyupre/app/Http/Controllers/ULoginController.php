<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ULoginController extends Controller
{
    public function index(Request $request){
        return view('travel1.public.user.login')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));

    }
    public function logout(Request $request){

        session_destroy();
        return view('travel1.public.user.index')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));

    }

    public function getAcount(Request $request){

        $assign = [];

        $db = DB::table('user')->select()
            ->where("email","=","".$request->input('email')."")
            ->where("pass","=","".$request->input('pass')."")
            ->get();

        foreach ($db as $user) {
            $assign["id"] = $user->id;
            $assign["name"] = $user->name;
        }

        if(empty($assign)){

            echo "パスワードまたはメールアドレスが間違えています";

            return view('travel1.public.user.login')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
            // ->with($errMsg);
        }
        else{

            $_SESSION["id"] = $assign["id"];
            $_SESSION["username"] = $assign["name"];

            return redirect('./')
            ->with($assign)
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));

            var_dump($assign);
        }
    }
}
