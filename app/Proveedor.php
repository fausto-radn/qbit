<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
  //
  protected $table = 'proveedores';

  protected $fillable = ['nombre','telefono','correo'];


  public function productos()
  {
    return $this->hasMany('App\Producto');
  }

  public function servicios()
  {
    return $this->hasMany('App\Servicio');
  }
}
