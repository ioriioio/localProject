<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UGetReserve extends Controller
{
    public function ajax(Request $request, $data){
        //新規会員とうろく
        
        var_dump($data);
        return view('travel1.public.user.store')
            ->with('imgPath',config('const.path.imgPath'))
            ->with('jsPath',config('const.path.jsPath'))
            ->with('cssPath',config('const.path.cssPath'));
    }


}
