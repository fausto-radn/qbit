@extends('plantilla.app')

@section('titulo','Proveedores | Nuevo')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Nuevo Proveedor</h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('proveedores.store') }}" method="post" autocomplete="off">

        @csrf

        @component('componentes.fgri', [
          'input' => 'nombre',
          'label' => 'Nombre'])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'telefono',
          'label' => 'Teléfono'])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'correo',
          'label' => 'Correo eléctronico',
          'tipo' => 'email'])
        @endcomponent

        @component('componentes.btncs', [
          'url' => 'proveedores.index',
          'icono' => 'fas fa-save',
          'textSub' => 'Guardar']);
        @endcomponent


      </form>
    </div>
  </div>
@endsection
