<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class insertUser extends Controller
{
    public function insert(Request $request){     
        
        // if(isset($_POST['name'])){

            var_dump($_POST);

            //新規会員とうろく
            // DB::table('user')->insert(
            //     ['name' => $request->input('name'),
            //     'adress' => $request->input('email'),
            //     'tell'=> $request->input('tell'),
            //     'password' => $request->input('password'),
            //     'birthday' => $request->input('birth')]
            // );

            // $db = DB::table('user')->select()
            //     ->where("name","=","".$request->input('name')."")
            //     ->get();


            // $assign = [];
            // $assign["name"] = $request->input('name');
            // $assign["mail"] = $request->input('email');
            // $assign["tel"] = $request->input('tel');
            // $assign["pass"] = $request->input('pass');
            // $assign["birth"] = $request->input('birth');

            
        // }

        return view('travel1.public.index')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));

    }
}
