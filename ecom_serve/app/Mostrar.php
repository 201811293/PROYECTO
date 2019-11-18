<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mostrar extends Model
{
    public $timestamps = false;
    protected $primaryKey = ["id"];
    protected $view = 'formacion';
}
