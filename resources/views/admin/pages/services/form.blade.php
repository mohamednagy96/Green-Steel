{{--@include('admin.components.form.items.text', ['name' => 'name', 'required' => true ,'package' => 'service'])--}}

<!-- Test Area component -->
{{--@include('admin.components.form.items.textarea', ['description' => 'description'])--}}
<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control' ]) }}
</div>
<div class="form-group">
    <label for="">description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control','rows' =>5]) }}
</div>
<div class="form-group">
    <label for="">Slug</label>
    {{ Form::text('slug', null , ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label for="">inVisible</label>
    {{ Form::checkbox('invisible', 0 ,false) }}
</div>
<div class="form-group">
    <label for="">Images</label>
    {!! Form::file('images[]' ,['multiple' => 'multiple']) !!}
</div>
@include('admin.components.seo')


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($service) ? 'Update' : 'Create' }}</button>
</div>

