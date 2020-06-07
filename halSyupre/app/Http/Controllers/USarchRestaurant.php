<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class USarchRestaurant extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["username"])){
            //ユーザーがログイン状態の時

            $assign['name'] = $_SESSION["username"];

            try{
                $db = DB::table('stores')->select()
                    ->get();

                $count = DB::table('stores')->count('id');

                $stores = [];
                $storeResult = [];
            
                foreach ($db as $store) {
                    $stores["id"] = $store->id;
                    $stores["name"] = $store->name;
                    $stores["adressSum"] = $store->adressSum;
                    $stores["adress"] = $store->adress;
                    $stores["lunchTime"] = $store->lunchTime;
                    $stores["lunchprice"] = $store->lunchprice;
                    $stores["dinnerTime"] = $store->dinnerTime;
                    $stores["dinnerprice"] = $store->dinnerprice;
                    $stores["seat"] = $store->seat;
                    $stores["img"] = $store->imgUrl;

                    if($store->carStay == 0){
                        $stores["carStay"] = "無";
                    }
                    else{
                        $stores["carStay"] = "有";
                    }

                    if($store->smoke == 0){
                        $stores["smoke"] = "不可";
                    }
                    else{
                        $stores["smoke"] = "可";
                    }

                    if($store->cash == 0){
                        $stores["cash"] = "不可";
                    }
                    else{
                        $stores["cash"] = "可";
                    }

                    array_push($storeResult,$stores);

                }
                $assign['count'] = $count;
                $assign["store"] = $storeResult;
    
                return view('travel1.public.user.sarchRestaurant')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
            }catch(Exception $e){
                echo "データベースの接続に失敗しました：";
                echo $e->getMessage();
                die();
            }

            return view('travel1.public.user.sarchRestaurant')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
        }
        else{
            //ユーザーがログイン状態じゃないとき
            try{
                $db = DB::table('stores')->select()
                    ->get();

                $count = DB::table('stores')->count('id');

                $stores = [];
                $storeResult = [];
            
                foreach ($db as $store) {
                    $stores["id"] = $store->id;
                    $stores["name"] = $store->name;
                    $stores["adressSum"] = $store->adressSum;
                    $stores["adress"] = $store->adress;
                    $stores["lunchTime"] = $store->lunchTime;
                    $stores["lunchprice"] = $store->lunchprice;
                    $stores["dinnerTime"] = $store->dinnerTime;
                    $stores["dinnerprice"] = $store->dinnerprice;
                    $stores["seat"] = $store->seat;
                    $stores["img"] = $store->imgUrl;

                    if($store->carStay == 0){
                        $stores["carStay"] = "無";
                    }
                    else{
                        $stores["carStay"] = "有";
                    }

                    if($store->smoke == 0){
                        $stores["smoke"] = "不可";
                    }
                    else{
                        $stores["smoke"] = "可";
                    }

                    if($store->cash == 0){
                        $stores["cash"] = "不可";
                    }
                    else{
                        $stores["cash"] = "可";
                    }

                    array_push($storeResult,$stores);

                }
                $assign['count'] = $count;
                $assign["store"] = $storeResult;
    
                return view('travel1.public.user.sarchRestaurant')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
            }catch(Exception $e){
                echo "データベースの接続に失敗しました：";
                echo $e->getMessage();
                die();

                return view('travel1.public.manager.sarchRestaurant')
                    ->with($assign)
                    ->with('imgPath',config('const.path.imgPath'))
                    ->with('jsPath',config('const.path.jsPath'))
                    ->with('cssPath',config('const.path.cssPath'));
            }
        }
    }

    public function freeWord(Request $request){
        $data = $request->all();
        
        try{
            $db = DB::table('stores')->select()
                ->where('name', 'LIKE', '%'.$data['free'].'%')
                ->get();

            $count = DB::table('stores')->where('name', 'LIKE', '%'.$data['free'].'%')->count('id');

            $stores = [];
            $storeResult = [];
        
            foreach ($db as $store) {
                $stores["id"] = $store->id;
                $stores["name"] = $store->name;
                $stores["adressSum"] = $store->adressSum;
                $stores["adress"] = $store->adress;
                $stores["lunchTime"] = $store->lunchTime;
                $stores["lunchprice"] = $store->lunchprice;
                $stores["dinnerTime"] = $store->dinnerTime;
                $stores["dinnerprice"] = $store->dinnerprice;
                $stores["seat"] = $store->seat;
                $stores["img"] = $store->imgUrl;

                if($store->carStay == 0){
                    $stores["carStay"] = "無";
                }
                else{
                    $stores["carStay"] = "有";
                }

                if($store->smoke == 0){
                    $stores["smoke"] = "不可";
                }
                else{
                    $stores["smoke"] = "可";
                }

                if($store->cash == 0){
                    $stores["cash"] = "不可";
                }
                else{
                    $stores["cash"] = "可";
                }

                array_push($storeResult,$stores);

            }
            $assign['count'] = $count;
            $assign["store"] = $storeResult;

            return $assign;
        }catch(Exception $e){
            echo "データベースの接続に失敗しました：";
            echo $e->getMessage();
            die();

            return $assign;
        }
    }
}
