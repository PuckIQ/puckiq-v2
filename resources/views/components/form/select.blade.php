<div class="form-group">
  {{ Form::label($label, null, ['class' => 'control-label']) }}
  {{ Form::select($name, $value, null, array_merge(['class' => 'form-control'], $attributes)) }}
</div>