

<div class="form-group">
    <label for="">Title</label>
    {{ Form::text('title', null , ['class' => 'form-control','required' => true]) }}
</div>
<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control']) }}
</div>
<div class="form-group">
    <label for="">Button</label>
    {{ Form::text('button', null , ['class' => 'form-control','required' => true]) }}
</div>
<div class="form-group">
    <label for="">Button Link</label>
    {{ Form::text('button_link', null , ['class' => 'form-control','required' => true]) }}
</div>
<div>
    @if(isset($slider))
    <td> <img src="{{ $slider->image ? $slider->image->getUrl() : asset('images/default.jpg') }}" alt="" width="200px"></td>
    <br>
    <br>
    @endif
    {!! Form::file('file', ['enctype'=>'multipart/form-data']) !!}
</div>
</br>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($slider) ? 'Update' : 'Create' }}</button>
</div>