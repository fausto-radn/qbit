@extends('plantilla.app')

@section('titulo','Producto | Detalles')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Detalles del Producto</h1>
    </div>
  </div>
  <hr>
  <dl class="row">
    <dt class="col-md-3">Proveedor</dt>
    <dd class="col-md-9">{{ $producto->proveedor->nombre}}</dd>
    <dt class="col-md-3">Código</dt>
    <dd class="col-md-9">{{ $producto->codigo}}</dd>
    <dt class="col-md-3">Nombre</dt>
    <dd class="col-md-9">{{ $producto->nombre}}</dd>
    <dt class="col-md-3">Descripción</dt>
    <dd class="col-md-9">{{ $producto->descripcion}}</dd>
    <dt class="col-md-3">Precio</dt>
    <dd class="col-md-9">{{ $producto->precio}}</dd>
    <dt class="col-md-3">Cantidad</dt>
    <dd class="col-md-9">{{ $producto->cantidad}}</dd>
    <dt class="col-md-3">Fecha de Actualización</dt>
    <dd class="col-md-9">{{ $producto->updated_at}}</dd>
    <dt class="col-md-3">Fecha de Registro</dt>
    <dd class="col-md-9">{{ $producto->created_at}}</dd>
  </dl>
  <div class="row">
    <div class="col-md-2">
      <a href="{{ route('productos.index')}}" class="btn btn-outline-secondary btn-block">
        <i class="fas fa-undo"></i>
        Atrás
      </a>
    </div>
  </div>
@endsection
