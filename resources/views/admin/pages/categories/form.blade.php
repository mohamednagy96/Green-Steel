<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control', 'required' => true]) }}
</div>

<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control', 'rows'=>3]) }}
</div>

@if(isset($category)) 
    <table class="table">
        <tr>
            <td><img src="{{ $category->image ? $category->image->getUrl() : asset('images/default.jpg') }}" alt="" width="100px">
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
    <button type="submit" class="btn btn-primary">{{ isset($category) ? 'Update' : 'Create' }}</button>
</div>