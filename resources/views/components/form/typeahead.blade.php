<div class="form-group">
  {{ Form::label($name, $label, ['class' => 'control-label']) }}
  {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  {{ Form::hidden($name . '_hidden', null, ['id' => $name . '_val']) }}
</div>