<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UFoodContent extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["username"])){

            $assign['name'] = $_SESSION["username"];

            return view('travel1.public.user.foodContent')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

                
        }
        else{
            return view('travel1.public.user.foodContent')
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

        }
    }
}
