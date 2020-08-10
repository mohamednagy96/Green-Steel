
<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control' ]) }}
</div>
<div class="form-group">
    <label for="">description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control','rows' =>5]) }}
</div>

@if(isset($service)) 
    <table class="table">
        <tr>
            <td><img src="{{ $service->image ? $service->image->getUrl() : asset('images/default.jpg') }}" alt="" width="200px">
            </td>
            <td>  <label for="">Images</label>
                {!! Form::file('image') !!}
            </td>
        </tr>
    </table>
@else
    <div class="form-group">
    <label for="">Images</label>
    {!! Form::file('image') !!}
    </div>
@endif
<hr>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($service) ? 'Update' : 'Create' }}</button>
</div>

