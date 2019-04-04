@extends('plantilla.app')

@section('titulo','Proveedores')

@section('styles')

<link rel="stylesheet" href="{{ asset('assets/DataTables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css') }}">

@endsection

@section('contenido')
  <div class="row">
    <div class="col-md-10">
      <h1>Proveedores</h1>
    </div>
    <div class="col-md-2">
      <a href="{{ route('proveedores.create') }}" class="btn btn-outline-success btn-block">
        <i class="fas fa-plus"></i>
        Nuevo
      </a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table datatable">
          <thead>
            <tr>
              <th scope="col">#ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($proveedores as $proveedor)
              <tr>
                <th scope="row">{{ $proveedor->id }}</th>
                <td>{{ $proveedor->nombre }}</td>
                <td>
                  @component('componentes.acciones', [
                    'url' => 'proveedores',
                    'id' => $proveedor->id])
                  @endcomponent
                </td>

              </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('assets/DataTables/datatables.min.js') }}" charset="utf-8"></script>
  <script src="{{ asset('assets/DataTables/DataTables-1.10.18/js/dataTables.bootstrap4.js') }}" charset="utf-8"></script>
  <script src="{{ asset('js/index.js') }}" charset="utf-8"></script>
@endsection
