<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Residentes extends Model
{
    protected $table='residentes';

    protected $fillable=['nombres','apellidos','rut','telefono','id_usuario'];

    public function usuario()
    {
    	return $this->belongsTo('App\User','id_usuario');
    }
}
