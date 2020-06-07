<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Scuisine extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["name"])){
            $assign["name"] = $_SESSION["name"];

            $db = DB::table('storeEat')->select()
                    ->where("storeId","=","".$_SESSION["id"]."")
                    ->get();

        
            $item = [];
            $items = [];

            foreach ($db as $store) {
                $item["id"] = $store->id;
                $item["eatName"] = $store->eatName;
                $item["price"] = $store->price;
                $item["imgUrl"] = $store->imgUrl;

                if($store->offer == 0){
                    $item["offer"] = "ランチ";
                }
                else if($store->offer == 1){
                    $item["offer"] = "ディナー";
                }
                else if($store->offer == 2){
                    $item["offer"] = "どちらも";
                }

                array_push($items,$item);

            }

            $assign["eats"] = $items;

            
            return view('travel1.public.manager.cuisine')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
        }else{

            return redirect('SLogin')
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
        }
    }

    public function delete(Request $request){

        // $assign["name"] = $_SESSION["name"];

        $db = DB::table('storeEat')->select()
                ->where("id","=","".$request->input('dele')."")
                ->delete();

        return redirect('Scuisine')
            // ->with($assign)
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }
}

