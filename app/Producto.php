<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';

    //protected $fillable = ['proveedor_id','codigo','nombre','descripcion','publicado','precio','cantidad'];
    protected $fillable = ['proveedor_id','codigo','nombre','descripcion','precio','cantidad'];


    public function tienda()
    {
      return $this->belongsTo('App\Tienda');
    }

    public function proveedor()
    {
      return $this->belongsTo('App\Proveedor');
    }
}
