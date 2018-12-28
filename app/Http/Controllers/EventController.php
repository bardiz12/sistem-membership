<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function register(Request $request,$id){
        if(!is_numeric($id)){
            return abort(500);
        }
        echo $id;
        $event = \App\Model\Event::find($id);
        //dd($event);
        if($event ==null){
            return abort(404);
        }
        $cek = $event->alreadyRegister();
        if($cek){
            $request->session()->flash("error","Sudah terdaftar pada Event ".$event->nama_event." dengan status <b>".($cek->accepted ? "Diterima" : "Pending")."</b>");
        }else{
           
            $pesertaEvent = new \App\Model\PesertaEvent();
            $pesertaEvent->user_id = \Auth::user()->id;
            $pesertaEvent->event_id = $id;
            $pesertaEvent->accepted = false;
            if($pesertaEvent->save()){
                $request->session()->flash("status","anda sudah masuk daftar antrian pada Event ".$event->nama_event);
            }else{
               return abort(500);
            }
        }
        return back();
    }
}
