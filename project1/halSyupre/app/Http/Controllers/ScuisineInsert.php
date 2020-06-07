<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ScuisineInsert extends Controller
{
    public function index(Request $request){

        if(isset($_SESSION["name"])){
            $assign["name"] = $_SESSION["name"];


            return view('travel1.public.manager.cuisineInsert')
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


    public function insert(Request $request){

        $assign["name"] = $_SESSION["name"];
        $img = $request->file('image');
        if(isset($img)){
            $count = DB::table('storeEat')->max('id');
            $count = $count + 1;
            //画像アップロード
            $imgname = "/IW32_syupure/halSyupre/storage/app/images/store/image".$count.'.jpg';

            $request->file('image')->storeAs('images/store', "image".$count.'.jpg');
        }
        else{
            $imgname = "";
        }
        
        DB::table('storeEat')->insert(
            [
                'storeId' => $_SESSION["id"],
                'eatName' => $request->input('name'),
                'price' => $request->input('price'),
                'offer' => $request->input('offer'),
                'imgUrl' => $imgname
            ]
        );

        if($request->input('count') > 1){
            for($i = 2; $i<=$request->input('count'); $i++){
                $count = $count + 1;
                //画像アップロード
                $imgname = "/IW32_syupure/halSyupre/storage/app/images/store/image".$count.'.jpg';

                $request->file('image'.$i.'')->storeAs('images/store', "image".$count.'.jpg');

                DB::table('storeEat')->insert(
                    [
                        'storeId' => $_SESSION["id"],
                        'eatName' => $request->input('name'.$i.''),
                        'price' => $request->input('price'.$i.''),
                        'offer' => $request->input('offer'.$i.''),
                        'imgUrl' => $imgname
                    ]
                );
            }
            return redirect('ScuisineInsert')
                ->with($assign)
                ->with('imgPath',config('const.path.imgPath'))
                ->with('jsPath',config('const.path.jsPath'))
                ->with('cssPath',config('const.path.cssPath'));
        }
        else{
            return redirect('ScuisineInsert')
            ->with($assign)
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
        }
    }
}

