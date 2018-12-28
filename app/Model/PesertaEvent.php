<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PesertaEvent extends Model
{
    protected $table = "peserta_event";
    protected $fillable = ["user_id","event_id","accepted"];
}
