<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function detail(){
        return $this->belongsTo('App\Model\UserDetail','id','user_id');
    }

    public function role(){
        return $this->belongsToMany('App\Model\Role','user_role','user_id','role_id');
    }

    public function hasRole($role_name){
        foreach($this->role as $userRole){
            if($userRole->role_name === $role_name){
                return true;
            }
        }
        return false;
    }
}
