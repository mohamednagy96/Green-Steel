

<div class="form-group">
    <label for="">Title</label>
    {{ Form::text('title', null , ['class' => 'form-control','required','required' => true]) }}
</div>


<div class="form-group">
    <label for="">description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control','required' => true]) }}
</div>
@if(isset($aboutus)) 
    <table class="table">
        <tr>
            <td><img src="{{ $aboutus->image ? $aboutus->image->getUrl() : asset('images/default.jpg') }}" alt="" width="200px">
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
    <button type="submit" class="btn btn-primary">{{ isset($aboutus) ? 'Update' : 'Create' }}</button>
</div>