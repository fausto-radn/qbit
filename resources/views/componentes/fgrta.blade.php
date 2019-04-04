<div class="form-group row">
  <div class="{{ isset($col_lab) ? $col_lab : 'col-md-4' }}">
    <label for="{{ $input }}" class="col-form-label"> {{ $label }}</label>
  </div>

  <div class="{{ isset($col_inp) ? $col_inp : 'col-md-8' }}">

    <textarea
    class="form-control{{ $errors->has($input) ? ' is-invalid' : '' }}"
    id="{{ $input }}"
    name="{{ $input }}"
    rows="3"
    style="resize:none;"
    {{ isset($atributos) ? $atributos : '' }} >{{ old($input) ?: (isset($value) ? $value->{$input} : '')}}</textarea>
  @if ($errors->has($input))
    <div class="invalid-feedback">
      {{ $errors->first($input) }}
    </div>
  @endif
</div>
</div>
