@extends('plantilla.app')

@section('titulo','Producto | Nuevo')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Nuevo Producto</h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('productos.store') }}" method="post" autocomplete="off">

        @csrf

        @component('componentes.fgrs', [
          'input' => 'proveedor_id',
          'label' => 'Proveedor',
          'opciones' => $proveedores,
          'mostrar' => 'nombre']);
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'codigo',
          'label' => 'Código'])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'nombre',
          'label' => 'Nombre'])
        @endcomponent

        @component('componentes.fgrta', [
          'input' => 'descripcion',
          'label' => 'Descripción'])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'precio',
          'label' => 'Precio',
          'tipo' => 'number',
          'atributos' => 'min="0.00"'])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'cantidad',
          'label' => 'Cantidad',
          'tipo' => 'number',
          'atributos' => 'min="0"'])
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
