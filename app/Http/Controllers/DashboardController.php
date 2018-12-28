<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    

    public function index(){

        $event = \App\Model\Event::orderBy("created_at","DESC")->paginate(5);
        return view('member/dashboard',["events"=>$event]);
    }
}
