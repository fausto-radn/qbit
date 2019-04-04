@extends('plantilla.app')

@section('titulo','Servicio | Editar')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Editar Servicio</h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('servicios.update',$servicio->id) }}" method="post" autocomplete="off">

        @csrf
        @method('PUT')

        @component('componentes.fgrs-e', [
          'input' => 'proveedor_id',
          'label' => 'Proveedor',
          'opciones' => $proveedores,
          'mostrar' => 'nombre',
          'value' => $servicio]);
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'codigo',
          'label' => 'Código',
          'value' => $servicio])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'nombre',
          'label' => 'Nombre',
          'value' => $servicio])
        @endcomponent

        @component('componentes.fgrta', [
          'input' => 'descripcion',
          'label' => 'Descripción',
          'value' => $servicio])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'precio',
          'label' => 'Precio',
          'tipo' => 'number',
          'atributos' => 'min="0.00"',
          'value' => $servicio])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'duracion',
          'label' => 'Duración',
          'tipo' => 'time',
          'atributos' => 'min="0"',
          'value' => $servicio])
        @endcomponent

        @component('componentes.btncs', [
          'url' => 'servicios.index',
          'icono' => 'fas fa-sync-alt',
          'textSub' => 'Actualizar',
          'value' => $servicio]);
        @endcomponent


      </form>
    </div>
  </div>
@endsection
