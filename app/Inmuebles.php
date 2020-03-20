<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inmuebles extends Model
{
    protected $table='inmuebles';
    protected $fillable=['idem','tipo','status'];
}