<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Storage;
use App\User;
class ProfileController extends Controller
{
    public function edit(){
        return view('member/profiles');
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
    public function photo()
    {
        # code...
        return view('member.profile-photo');
    }
    public function reset()
    {
        # code...
        return view('member.reset');
    }
    public function editPhoto(Request $request,$id)
    {
        # code...
        $profile = User::find($id);
        $request->validate([
            'photo' => 'file|max:10000|mimes:jpg,jpeg,png'
        ]);
        if($request->hasFile('photo')) {
            
            if($profile->detail2 === null){
                $details = new \App\Model\UserDetail();
                $details->user_id = \Auth::user()->id;
                $details->save();
            }
            if ($profile->detail2->photo) {
                # code...
                Storage::delete($profile->detail2->photo);   
            }
            $foto = $request->file('photo')->store('foto');
        }else{
            $foto = $profile->detail2->photo;
        }
        $profile->detail2()->update([
            'photo' => $foto
        ]);
        return redirect()->route('profile.photos')->with('success','Data Berhasil diupdate');
    }
}
