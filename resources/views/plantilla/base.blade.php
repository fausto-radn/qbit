@extends('plantilla.app')

@section('titulo','base')


@section('contenido')
  @component('componentes.fgr', [
      'input' => 'email',
      'label' => 'E-Mail Address',

  ])@endcomponent
@endsection
