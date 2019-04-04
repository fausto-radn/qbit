<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    //
    protected $table = 'tiendas';

    protected $fillable = ['nombre','telefono','direccion'];

    public function users()
    {
        return $this->hasMany('App\User');
    }

    public function servicios()
    {
        return $this->hasMany('App\Servicio');
    }

    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
