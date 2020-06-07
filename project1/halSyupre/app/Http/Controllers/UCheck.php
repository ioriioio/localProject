<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UCheck extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["username"])){
            //ユーザーがログイン状態の時

            $assign['name'] = $_SESSION["username"];
    
            $db = DB::table('userReserve')->select()
                    ->where("storeId","=","".$_SESSION["id"]."")
                ->where("complet","=",1)
                ->get();

    
            $item = [];
            $items = [];

            foreach ($db as $store) {
                $item["id"] = $store->id;
                $item["userId"] = $store->userId;
                $item["reserveId"] = $store->reserveId;
                
                $dbs = DB::table('storeEat')
                ->where("id","=","".$item["reserveId"]."")
                ->first();


                $item["reserveId"] = $dbs->eatName;
            
                $item["sum"] = $store->sum;
                $item["date"] = $store->date ;
                $item["time"] = $store->time;

                array_push($items,$item);

                $assign["eats"] = $items;
            }
    
                
            return view('travel1.public.user.check')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));

        }
    }

}
