@extends('plantilla.app')

@section('titulo','Proveedores | Editar')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Editar Proveedor</h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('proveedores.update',$proveedor->id) }}" method="POST" autocomplete="off">

        @csrf
        @method('PUT')

        @component('componentes.fgri', [
          'input' => 'nombre',
          'label' => 'Nombre',
          'value' => $proveedor ])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'telefono',
          'label' => 'Teléfono',
          'value' => $proveedor ])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'correo',
          'label' => 'Correo eléctronico',
          'tipo' => 'email',
          'value' => $proveedor ])
        @endcomponent

        @component('componentes.btncs', [
          'url' => 'proveedores.index',
          'icono' => 'fas fa-sync-alt',
          'textSub' => 'Actualizar']);
        @endcomponent


      </form>
    </div>
  </div>
@endsection
