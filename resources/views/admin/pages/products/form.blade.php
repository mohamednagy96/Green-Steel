<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control', 'required' => true]) }}
</div>


<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control', 'rows'=>3]) }}
</div>

<div class="form-group">
    <label for="">Category</label>
    {{ Form::select('category_id',$category ,null, ['class' => 'form-control', 'required' => true, 'placeholder' => '-- Category --']) }}
</div>

<div class="form-group">
    <label for="">Company</label>
    {{ Form::select('company_id',$company ,null, ['class' => 'form-control', 'required' => true, 'placeholder' => '-- Company --']) }}
</div>

<div class="form-group">
    <label for="">Image</label>
    {!! Form::file('image') !!}
</div>


<hr>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Create' }}</button>
</div>
