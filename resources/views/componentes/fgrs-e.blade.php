<div class="form-group row">
  <div class="{{ isset($col_lab) ? $col_lab : 'col-md-4' }}">
    <label for="{{ $input }}" class="col-form-label">{{ $label}}</label>
  </div>
  <div class="{{ isset($col_inp) ? $col_inp : 'col-md-8' }}">
    <select
    class="form-control {{ $errors->has($input) ? ' is-invalid' : '' }}"
    id="{{ $input }}"
    name="{{ $input }}">
    <option value="0">Seleccionar</option>
    @foreach ($opciones as $opcion)
      <option value="{{ $opcion->id }}" {{  $value->id  == $opcion->id ? 'selected' : '' }}>{{ $opcion->{$mostrar} }}</option>
    @endforeach
  </select>
  @if ($errors->has($input))
    <div class="invalid-feedback">
      {{ $errors->first($input) }}
    </div>
  @endif
</div>
</div>
