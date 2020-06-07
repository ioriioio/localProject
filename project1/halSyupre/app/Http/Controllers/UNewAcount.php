<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UNewAcount extends Controller
{
    public function index(Request $request){

        // $db = DB::table('user')->select()
        // // ->where("","=","")
        // ->get();


            // //新規会員とうろく
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

            //     echo "登録".$db;

            

        

        return view('travel1.public.user.newAcount')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));

    }


    public function insert(Request $request){

        //新規会員とうろく
        // DB::table('user')->insert(
        //     ['name' => $request->input('name'),
        //     'email' => $request->input('email'),
        //     'tell'=> $request->input('tel'),
        //     'password' => $request->input('pass'),
        //     'birthday' => $request->input('birth')]
        // );

        DB::table('user')->insert(
            [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'tel' => $request->input('tel'),
                'birthday' => $request->input('birth'),
                'pass' => $request->input('pass')
            ]
        );


        // $db = DB::table('user')->select()
        //     ->where("name","=","".$request->input('name')."")
        //     ->get();

        //     echo "登録".$db;
        
        // $response = view('acount', $assign);

        return view('travel1.public.user.index')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }
}
