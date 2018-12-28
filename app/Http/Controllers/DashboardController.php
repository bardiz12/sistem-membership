<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class DashboardController extends Controller
{
    

    public function index(){

        $event = \App\Model\Event::orderBy("created_at","DESC")->paginate(5);
        return view('member/dashboard',["events"=>$event]);
    }public function search(Request $request)
    {
        # code...
        $cari = Input::get('cari');
        $event = \App\Model\Event::latest()->where('nama_event','LIKE','%'.$cari.'%')->orWhere('description','LIKE','%'.$cari.'%')->orWhere('tempat_event','LIKE','%'.$cari.'%')->orWhere('tanggal_mulai_event','LIKE','%'.$cari.'%')->orWhere('tanggal_berakhir_event','LIKE','%'.$cari.'%')->paginate(5);
        $event->appends($request->only('cari'));
        return view('member/dashboard',['events'=>$event]);
    }
}
