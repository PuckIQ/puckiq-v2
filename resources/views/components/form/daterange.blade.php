<div class="form-group">
  {{ Form::label($name.'start', $label, ['class' => 'control-label']) }}
  <div class="input-group">
    {{ Form::date($name.'start', $value, array_merge(['class' => 'form-control', 'id' => 'pq-datestart'], $attributes)) }}
    {{ Form::date($name.'end', $value, array_merge(['class' => 'form-control', 'id' => 'pq-dateend'], $attributes)) }}
  </div>
</div>