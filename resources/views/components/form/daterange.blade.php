<div class="form-group">
  {{ Form::label($name, $label, ['class' => 'control-label']) }}
  {{ Form::text($name, $value, array_merge(['class' => 'form-control'], $attributes)) }}
  {{ Form::hidden($name.'start', date('Y-m-d'), ['id' => 'pq-datestart']) }}
  {{ Form::hidden($name.'end', date('Y-m-d'), ['id' => 'pq-dateend']) }}
</div>