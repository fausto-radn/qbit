@extends('plantilla.app')

@section('titulo','Producto | Editar')


@section('contenido')
  <div class="row">
    <div class="col-md-12">
      <h1>Editar Producto</h1>
    </div>
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form action="{{ route('productos.update',$producto->id) }}" method="post" autocomplete="off">

        @csrf
        @method('PUT')

        @component('componentes.fgrs-e', [
          'input' => 'proveedor_id',
          'label' => 'Proveedor',
          'opciones' => $proveedores,
          'mostrar' => 'nombre',
          'value' => $producto]);
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'codigo',
          'label' => 'Código',
          'value' => $producto])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'nombre',
          'label' => 'Nombre',
          'value' => $producto])
        @endcomponent

        @component('componentes.fgrta', [
          'input' => 'descripcion',
          'label' => 'Descripción',
          'value' => $producto])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'precio',
          'label' => 'Precio',
          'tipo' => 'number',
          'atributos' => 'min="0.00"',
          'value' => $producto])
        @endcomponent

        @component('componentes.fgri', [
          'input' => 'cantidad',
          'label' => 'Cantidad',
          'tipo' => 'number',
          'atributos' => 'min="0"',
          'value' => $producto])
        @endcomponent

        @component('componentes.btncs', [
          'url' => 'productos.index',
          'icono' => 'fas fa-sync-alt',
          'textSub' => 'Actualizar',
          'value' => $producto]);
        @endcomponent


      </form>
    </div>
  </div>
@endsection
