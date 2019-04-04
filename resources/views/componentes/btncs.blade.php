<div class="row justify-content-center">
  <div class="{{ isset($col_cancel) ? $col_inp : 'col-md-4' }} mt-1">
    <a href="{{ route($url) }}" class="btn btn-outline-secondary btn-block">
      <i class="fas fa-undo"></i>
      Cancelar
    </a>
  </div>
  <div class="{{ isset($col_sub) ? $col_inp : 'col-md-4' }}  mt-1">
    <button type="submit" class="btn btn-outline-success btn-block">
      <i class="{{$icono}}"></i>
      {{ $textSub}}
    </button>
  </div>
</div>
