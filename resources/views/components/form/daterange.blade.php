<div class="form-group">
  {{ Form::label("q0" . $name, $label, ['class' => 'control-label']) }}
  {{ Form::text("q0" . $name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  {{ Form::hidden("q1" . $name.'start', date('Y-m-d'), ['id' => 'pq-datestart']) }}
  {{ Form::hidden("q1" . $name.'end', date('Y-m-d'), ['id' => 'pq-dateend']) }}
</div>