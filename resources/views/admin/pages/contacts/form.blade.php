
<div class="form-group">
    <label for="">Name</label>
    {{ Form::text('name', null , ['class' => 'form-control','required' => true]) }}
</div>
<div class="form-group">
    <label for="">Email</label>
    {{ Form::text('email', null , ['class' => 'form-control','required' => true]) }}
</div>
<div class="form-group">
    <label for="">Message</label>
    {{ Form::textarea('message', null , ['class' => 'form-control','required' => true]) }}
</div>
<div class="form-group">
    <label for="">Phone</label>
    {{ Form::text('phone', null , ['class' => 'form-control','required' => true]) }}
</div>

<div class="form-group">
    <label for="">Subject</label>
    {{ Form::text('subject', null , ['class' => 'form-control','required' => true]) }}
</div>

<hr>


<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($contact) ? 'Update' : 'Create' }}</button>
</div>
