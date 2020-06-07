<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UStore extends Controller
{
    public function index(Request $request, $store){

        if(isset($_SESSION["username"])){
            //ユーザーがログイン状態の時

            $assign['name'] = $_SESSION["username"];
        }
        
        $db = DB::table('stores')->select()
            ->where("name","=","".$store."")
            ->get();

        foreach ($db as $store) {
            $id = $store->id;
            $assign["id"] = $id;
            $assign["storeName"] = $store->name;
            $assign["adressSum"] = $store->adressSum;
            $assign["adress"] = $store->adress;
            $assign["lunchTime"] = $store->lunchTime;
            $assign["lunchprice"] = $store->lunchprice;
            $assign["dinnerTime"] = $store->dinnerTime;
            $assign["dinnerprice"] = $store->dinnerprice;
            $assign["seat"] = $store->seat;
            $assign["img"] = $store->imgUrl;
            $assign["img2"] = $store->imgUrl2;

            if($store->carStay == 0){
                $assign["carStay"] = "無";
            }
            else{
                $assign["carStay"] = "有";
            }

            if($store->smoke == 0){
                $assign["smoke"] = "不可";
            }
            else{
                $assign["smoke"] = "可";
            }

            if($store->cash == 0){
                $assign["cash"] = "不可";
            }
            else{
                $assign["cash"] = "可";
            }
        }

        $db = DB::table('storeEat')->select()
            ->where("storeId","=","".$id."")
            ->get();

        $item = [];
        $stores = [];

        foreach ($db as $store) {
            $item["id"] = $store->id;
            $item["eatName"] = $store->eatName;
            $item["price"] = $store->price;

            if($store->offer == 0){
                $item["offer"] = "ランチ";
            }
            else if($store->offer == 1){
                $item["offer"] = "ディナー";
            }
            else if($store->offer == 2){
                $item["offer"] = "どちらも";
            }

            $item["imgUrl"] = $store->imgUrl;

            array_push($stores,$item);
        }

        $assign['store'] = $stores;


        if(isset($_SESSION["username"])){

            $assign['name'] = $_SESSION["username"];

            return view('travel1.public.user.store')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

                
        }
        else{
            return view('travel1.public.user.store')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

        }
    }




    public function ajax(Request $request){

        $data = $request->all();

        $db = DB::table('storeEat')->select()
            ->where("id","=","".$data['idEat']."")
            ->get();


        foreach ($db as $store) {
            $assign["id"] = $store->id;
            $assign["eatName"] = $store->eatName;
            $assign["price"] = $store->price;

            if($store->offer == 0){
                $assign["offer"] = "ランチ";
            }
            else if($store->offer == 1){
                $assign["offer"] = "ディナー";
            }
            else if($store->offer == 2){
                $assign["offer"] = "どちらも";
            }

        }

        return $assign;

    }

    public function insert(Request $request){

        $data = $request->all();

        DB::table('userReserve')->insert(
            [
                'userId' => $data['userName'],
                'storeId' => $data['storeId'],
                'reserveId' => $data['reserveId'],
                'sum' => $data['sum'],
                'date' =>$data['date'],
                'complet' =>"0",
                'time' =>$data['time1'].":".$data['time2']
            ]
        );

        $ok = "ok";

        return $ok;

    }
}

