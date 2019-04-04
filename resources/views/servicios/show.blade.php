@extends('plantilla.app')

@section('titulo','Servicio | Detalles')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Detalles del Servicio</h1>
    </div>
  </div>
  <hr>
  <dl class="row">
    <dt class="col-md-3">Proveedor</dt>
    <dd class="col-md-9">{{ $servicio->proveedor->nombre}}</dd>
    <dt class="col-md-3">Código</dt>
    <dd class="col-md-9">{{ $servicio->codigo}}</dd>
    <dt class="col-md-3">Nombre</dt>
    <dd class="col-md-9">{{ $servicio->nombre}}</dd>
    <dt class="col-md-3">Descripción</dt>
    <dd class="col-md-9">{{ $servicio->descripcion}}</dd>
    <dt class="col-md-3">Precio</dt>
    <dd class="col-md-9">{{ $servicio->precio}}</dd>
    <dt class="col-md-3">Duracion</dt>
    <dd class="col-md-9">{{ $servicio->duracion}}</dd>
    <dt class="col-md-3">Fecha de Actualización</dt>
    <dd class="col-md-9">{{ $servicio->updated_at}}</dd>
    <dt class="col-md-3">Fecha de Registro</dt>
    <dd class="col-md-9">{{ $servicio->created_at}}</dd>
  </dl>
  <div class="row">
    <div class="col-md-2">
      <a href="{{ route('servicios.index')}}" class="btn btn-outline-secondary btn-block">
        <i class="fas fa-undo"></i>
        Atrás
      </a>
    </div>
  </div>
@endsection
