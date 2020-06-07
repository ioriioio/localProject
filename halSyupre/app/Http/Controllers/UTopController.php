<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UTopController extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["username"])){

            $assign['name'] = $_SESSION["username"];

            return view('travel1.public.user.index')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

                
        }
        else{
            return view('travel1.public.user.index')
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

        }
    }
}

