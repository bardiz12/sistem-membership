<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $table = "user_detail";

    protected $fillable = ["alamat","telepon"];
    public $timestamps = true;
    protected $primaryKey = "user_id";
}
