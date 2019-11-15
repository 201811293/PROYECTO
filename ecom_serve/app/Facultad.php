<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    public $timestamps = true;
    protected $guarded = ["facultad_id"];
    protected $table = 'facultad';
}
