

<div class="form-group">
    <label for="">Title</label>
    {{ Form::text('title', null , ['class' => 'form-control','required','required' => true]) }}
</div>


<div class="form-group">
    <label for="">Content</label>
    {{ Form::textarea('content', null , ['class' => 'form-control','required' => true]) }}
</div>
@if(isset($blog)) 
    <table class="table">
        <tr>
            <td><img src="{{ $blog->image ? $blog->image->getUrl() : asset('images/default.jpg') }}" alt="" width="200px">
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
    <button type="submit" class="btn btn-primary">{{ isset($blog) ? 'Update' : 'Create' }}</button>
</div>