<div class="form-group">
  {{ Form::label("q0" . $name, $label, ['class' => 'control-label']) }}
  {{ Form::text("q0" . $name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  {{ Form::hidden("q2" . $name, null, ['id' => "q2" . $name . '_val']) }}
</div>