<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class SInsert extends Controller
{
    public function index(Request $request){

        session_destroy();

        return view('travel1.public.manager.storeInsert')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }


    //登録が押されたとき登録の処理
    public function insert(Request $request){

        $pass = password_hash($request->input('pass'),PASSWORD_DEFAULT);
        $img = $request->file('image1');
        if(isset($img)){
            $count = DB::table('stores')->max('id');
            $count = $count + 1;
            //画像アップロード
            $imgname = "/IW32_syupure/halSyupre/storage/app/images/stores/image".$count.'-1.jpg';

            $request->file('image1')->storeAs('images/stores', "image".$count.'-1.jpg');
        }
        else{
            $imgname = "";
        }

        $img2 = $request->file('image2');
        if(isset($img2)){
            $count = DB::table('stores')->max('id');
            $count = $count + 1;
            //画像アップロード
            $imgname2 = "/IW32_syupure/halSyupre/storage/app/images/stores/image".$count.'-2.jpg';

            $request->file('image2')->storeAs('images/stores', "image".$count.'-2.jpg');
        }
        else{
            $imgname2 = "";
        }

        $lunch = $request->input('lunchTime1').":".$request->input('lunchTime2')."〜".$request->input('lunchTime3').":".$request->input('lunchTime4')."(LO".$request->input('lunchTime5').":".$request->input('lunchTime6').")";
        $dinner = $request->input('dinnerTime1').":".$request->input('dinnerTime2')."〜".$request->input('dinnerTime3').":".$request->input('dinnerTime4')."(LO".$request->input('dinnerTime5').":".$request->input('dinnerTime6').")";

        DB::table('stores')->insert(
            [
                'name' => $request->input('name'),
                'adressSum' => $request->input('adressSum'),
                'adress' => $request->input('adress'),
                'lunchTime' => $lunch,
                'lunchprice' => $request->input('lunchprice'),
                'dinnerTime' => $dinner,
                'dinnerprice' => $request->input('dinnerprice'),
                'seat' => $request->input('seat'),
                'carStay' => $request->input('carStay'),
                'smoke' => $request->input('smoke'),
                'cash' => $request->input('cash'),
                'pass' => $pass,
                'imgUrl' => $imgname,
                'imgUrl2' => $imgname2
            ]
        );

        $db = DB::table('stores')->select()
            ->where("name","=","".$request->input('name')."")
            ->where("pass","=","".$pass."")
            ->get();
    
        foreach ($db as $store) {
            $assign["id"] = $store->id;
            $assign["name"] = $store->name;
        }

        $_SESSION["id"] = $assign["id"];
        $_SESSION["name"] = $assign["name"];

        return redirect("STop")
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }
}

