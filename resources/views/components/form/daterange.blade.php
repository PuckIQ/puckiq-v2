<div class="form-group">
  {{ Form::label($name1, $label, ['class' => 'control-label']) }}
  <div class="input-group">
    {{ Form::date($name1, $value1, array_merge(['class' => 'form-control'], $attributes)) }}
    {{ Form::date($name2, $value2, array_merge(['class' => 'form-control'], $attributes)) }}
  </div>
</div>