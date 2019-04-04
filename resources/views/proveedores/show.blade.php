@extends('plantilla.app')

@section('titulo','Proveedor | Detalles')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Detalles del Proveedor</h1>
    </div>
  </div>
  <hr>
  <dl class="row">
    <dt class="col-md-3">Nombre del Proveedor</dt>
    <dd class="col-md-9">{{ $proveedor->nombre}}</dd>
    <dt class="col-md-3">Teléfono del Proveedor</dt>
    <dd class="col-md-9">{{ $proveedor->telefono}}</dd>
    <dt class="col-md-3">Correo del Proveedor</dt>
    <dd class="col-md-9">{{ $proveedor->correo}}</dd>
    <dt class="col-md-3">Fecha de Actualización</dt>
    <dd class="col-md-9">{{ $proveedor->updated_at}}</dd>
    <dt class="col-md-3">Fecha de Registro</dt>
    <dd class="col-md-9">{{ $proveedor->created_at}}</dd>

    <dt class="col-md-3">Servicios</dt>
    <dd class="col-md-9">
      <ul>
        @foreach ($proveedor->servicios as $servicio)
          <li>{{ $servicio->nombre }}</li>
        @endforeach
      </ul>
    </dd>
    <dt class="col-md-3">Productos</dt>
    <dd class="col-md-9">
      <ul>
        @foreach ($proveedor->productos as $producto)
          <li>{{ $producto->nombre }}</li>
        @endforeach
      </ul>
    </dd>
  </dl>
  <div class="row">
    <div class="col-md-2">
      <a href="{{ route('proveedores.index')}}" class="btn btn-outline-secondary btn-block">
        <i class="fas fa-undo"></i>
        Atrás
      </a>
    </div>
  </div>
@endsection
