<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    //
    protected $table = 'servicios';

    protected $fillable = ['proveedor_id','codigo','nombre','descripcion','precio','duracion'];

    public function tienda()
    {
      return $this->belongsTo('App\Tienda');
    }

    public function proveedor()
    {
      return $this->belongsTo('App\Proveedor');
    }
}
