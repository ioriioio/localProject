<?php


namespace App\Http\Controllers;

use App\models\Movie;
use App\models\Schedule;

class UScheduleController
{
    
    public function index(){

        $screen1 = Schedule::select('schedules.*','movies.*')
        ->leftJoin('movies', 'schedules.movie_id', '=', 'movies.id')
        ->where('schedules.start_at',date("Y/m/d"))
        ->where('schedules.screen_no',"スクリーン1")
        ->get();

        $screen2 = Schedule::select('schedules.*','movies.*')
        ->leftJoin('movies', 'schedules.movie_id', '=', 'movies.id')
        ->where('schedules.start_at',date("Y/m/d"))
        ->where('schedules.screen_no',"スクリーン2")
        ->orderby('schedules.start_time', 'asc')
        ->get();


        // var_dump($screen2);
        return view('iw32.public.view.schedule.schedule')
                ->with('date',date("Y/m/d"))
                ->with('screen1',$screen1)
                ->with('screen2',$screen2);
    }

    public function getAjax(){
        //ajaxで送られてきたデータを取得
        $date = $_GET["date"];

        $screen1 = Schedule::select('schedules.*','movies.*')
        ->leftJoin('movies', 'schedules.movie_id', '=', 'movies.id')
        ->where('schedules.start_at',$date)
        ->where('schedules.screen_no',"スクリーン1")
        ->get();

        $screen2 = Schedule::select('schedules.*','movies.*')
        ->leftJoin('movies', 'schedules.movie_id', '=', 'movies.id')
        ->where('schedules.start_at',$date)
        ->where('schedules.screen_no',"スクリーン2")
        ->orderby('schedules.start_time', 'asc')
        ->get();
        
        // var_dump($screen2);
        // $return['screen1'] = $screen1;
        // $return['screen2'] = $screen2;

        return redirect('calendar')
                ->with('date',$date)
                ->with('screen1',$screen1)
                ->with('screen2',$screen2);
    }
}