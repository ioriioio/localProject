<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SCheck extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["name"])){
            $assign["name"] = $_SESSION["name"];

            $db = DB::table('userReserve')->select()
                    ->where("storeId","=","".$_SESSION["id"]."")
                    ->where("complet","=",0)
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

            }

            $assign["eats"] = $items;

            
            return view('travel1.public.manager.check')
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

        $db = DB::table('userReserve')->select()
                ->where("id","=","".$request->input('dele')."")
                ->delete();

        return redirect('SCheck')
            // ->with($assign)
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }

    public function check(Request $request){

        // $assign["name"] = $_SESSION["name"];

        DB::table('userReserve')
            ->where('id', $request->input('check'))
            ->update(['complet' => 1]);

        return redirect('SCheck')
            // ->with($assign)
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }
}

