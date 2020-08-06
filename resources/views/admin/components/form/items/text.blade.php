
@if (config('bw.locales'))
@foreach (config('bw.locales') as $locale)
<div class="form-group">
    <label for="">{{ str_replace('_', ' ', $name) }} {{ $locale }}</label>
    {{ Form::text("{$name}[{$locale}]", null , ['class' => 'form-control' , 'required' => $required ?? false]) }}
</div>

@endforeach

@else
<div class="form-group">
    <label for="">{{ str_replace('_', ' ', $name) }}</label>
    {{ Form::text("{$name}[{$locale}]",null , ['class' => 'form-control', 'required' => $required ?? false]) }}
</div>
@endif

