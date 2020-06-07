<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class STop extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["name"])){
            try{
                $db = DB::table('stores')->select()
                    ->where("id","=","".$_SESSION["id"]."")
                    ->where("name","=","".$_SESSION["name"]."")
                    ->get();
            
                foreach ($db as $store) {
                    $assign["name"] = $store->name;
                    $assign["adressSum"] = $store->adressSum;
                    $assign["lunchTime"] = $store->lunchTime;
                    $assign["lunchprice"] = $store->lunchprice;
                    $assign["dinnerTime"] = $store->dinnerTime;
                    $assign["dinnerprice"] = $store->dinnerprice;
                    $assign["seat"] = $store->seat;

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
                
    
                return view('travel1.public.manager.top',$assign)
                    ->with('imgPath',config('const.path.imgPath'))
                    ->with('jsPath',config('const.path.jsPath'))
                    ->with('cssPath',config('const.path.cssPath'));
                
            }catch(Exception $e){
                echo "データベースの接続に失敗しました：";
                echo $e->getMessage();
                die();
    
                return view('travel1.public.manager.login')
                    ->with($assign)
                    ->with('imgPath',config('const.path.imgPath'))
                    ->with('jsPath',config('const.path.jsPath'))
                    ->with('cssPath',config('const.path.cssPath'));
            }
        }else{

            return redirect('SLogin')
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
        }
    }
}

