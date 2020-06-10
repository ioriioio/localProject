<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MHistory;
class MAdminController extends Controller
{
    public function index(Request $request){
        $histories = MHistory::select('*')->orderBy('update_at' ,'desc')->paginate(10);

        return view('admin.admin')
            ->with('histories',$histories);
    }
}
