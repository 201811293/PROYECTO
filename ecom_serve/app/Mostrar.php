<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mostrar extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];
    protected $table = 'local_view';
}
