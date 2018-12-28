<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";
    protected $fillable = ["nama_event","description","tempat_event","tanggal_mulai_event","tanggal_berakhir_event"];
    public $timestamps = true;

    public function peserta(){
        return $this->belongsToMany('App\User','peserta_event','event_id',"user_id");
    }

    public function isUserRegistered($user_id){
        $cek = \App\Model\PesertaEvent::where(["user_id"=>$user_id,"event_id"=>$this->id])->first();
        if($cek != null){
            return $cek;
        }
        return false;
    }

    public function alreadyRegister(){
        static $var;
        $var = $this->isUserRegistered(\Auth::user()->id);
        return $var;
    }
    
    public function users(){
        return $this->belongsToMany('App\User');
    }
}

function sas(){
    static $var = 'me';
}
