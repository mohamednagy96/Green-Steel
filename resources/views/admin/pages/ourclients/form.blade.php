

<div class="form-group">
    <label for="">Name</label>
    {{ Form::text('name', null , ['class' => 'form-control','required' => true]) }}
</div>
<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control']) }}
</div>
<div>
    @if(isset($ourclient))
    <td> <img src="{{ $ourclient->image ? $ourclient->image->getUrl() : asset('images/default.jpg') }}" alt="" width="200px"></td>
    <br>
    <br>
    @endif
    {!! Form::file('file', ['enctype'=>'multipart/form-data']) !!}
</div>
</br>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($ourclient) ? 'Update' : 'Create' }}</button>
</div>