@if (config('bw.locales'))

@foreach (config('bw.locales') as $locale)


<div class="form-group">
    <label for="">{{$description}} {{ $locale }}</label>

    {{ Form::textarea("{$description}[{$locale}]" ,null, ['class' => 'form-control' , 'required' => $required ?? false]) }}
</div>
@endforeach

@else
<div class="form-group">
    <label for="">{$description}</label>
    {{ Form::textarea("{$description}[{$locale}]" ,null, ['class' => 'form-control', 'required' => $required ?? false]) }}
</div>
@endif
