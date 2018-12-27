<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ProfileController extends Controller
{
    public function edit(){
        return view('member/profile');
    }

    public function saveEdit(Request $request){
        $rules = [
            'name'=>'required',
            'email'=>"required|email",
            "alamat"=>"required",
            "telepon"=>"required|numeric"
        ];

        $validation = Validator::make($request->all(),$rules);
        if($validation->fails()){
            return redirect('profile/edit')->withInput()->withErrors($validator);
        }

        \Auth::user()->name = $request->input('name');
        \Auth::user()->email = $request->input('email');
        $details = \Auth::user()->detail;
        if(\Auth::user()->detail == null){
            $details = new \App\Model\UserDetail();
            $details->user_id = \Auth::user()->id;
        }
            $details->alamat = $request->input('alamat');
            $details->telepon = $request->input("telepon");
            $details->save();
        \Auth::user()->save();
        $request->session()->flash('status', 'Berhasil Memperbarui Profile!');
        return \Redirect::to("profile/edit");
        /*\Auth::user()->detail->alamat = ($request->input('alamat'));
        \Auth::user()->save();*/

        
        

        /*$details = \App\Model\UserDetail::where("user_id",\Auth::user()->id)->first();
        $details->alamat = $request->input('alamat');
        $details->telepon = $request->input("telepon");
        $details->save();*/
        



        
    }
}
