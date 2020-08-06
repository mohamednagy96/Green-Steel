<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control', 'required' => true]) }}
</div>

<div class="form-group">
    <label for="">Slug</label>
    {{ Form::text('slug', null , ['class' => 'form-control', 'required' => true]) }}
</div>

<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control', 'rows'=>3]) }}
</div>

<div class="form-group">
    <label for="">inVisible</label>
    {{ Form::checkbox('invisible', 1 , isset($product) ? $product->invisable : false ) }}
</div>

<div class="form-group">
    <label for="">Images</label>
    {!! Form::file('images[]' ,['multiple' => 'multiple']) !!}
</div>

@include('admin.components.seo')


<hr>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Create' }}</button>
</div>
