

<div class="form-group">
    <label for="">Name</label>
    {{ Form::text('name', null , ['class' => 'form-control','required' => true]) }}
</div>


<div class="form-group">
    <label for="">Slug</label>
    {{ Form::text('slug', null , ['class' => 'form-control','required' => true]) }}
</div>


<div class="form-group">
    <label for="">Price</label>
    {!! Form::number('price', null, ['min' => '1', 'class' => ' form-control']) !!}
</div>


<div class="form-group">
    <label for="">Order</label>
    {!! Form::number('order', null, ['min' => '1', 'class' => ' form-control']) !!}
</div>


<div class="form-group">
    <label for="">Color Picker</label>
    {{ Form::text('color_picker', null , ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label for="">description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control']) }}
</div>


<div class="form-group">
    <label for="">inVisible</label>
    {{ Form::checkbox('invisible', 0 ,false) }}
</div>
@include('admin.components.seo')

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($package) ? 'Update' : 'Create' }}</button>
</div>