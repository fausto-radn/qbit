<div class="form-group row">
  <div class="{{ isset($col_lab) ? $col_lab : 'col-md-4' }}">
    <label for="{{ $input }}" class="col-form-label"> {{ $label }}</label>
  </div>

  <div class="{{ isset($col_inp) ? $col_inp : 'col-md-8' }}">
    <input
    type="{{ isset($tipo) ? $tipo : 'text' }}"
    class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}"
    id="{{ $input }}"
    name="{{ $input }}"
    placeholder="{{ isset($placeholder) ? $placeholder : '' }}"
    value="{{ old($input) ? : (isset($value) ? $value->{$input} : '') }}"
    {{ isset($atributos) ? $atributos : '' }}>
    @if ($errors->has($input))
      <div class="invalid-feedback">
        {{ $errors->first($input) }}
      </div>
    @endif
  </div>
</div>
