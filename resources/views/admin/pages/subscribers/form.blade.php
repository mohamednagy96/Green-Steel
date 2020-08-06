

<div class="form-group">
    <label for="">Name</label>
    {{ Form::text('name', null , ['class' => 'form-control']) }}
</div>


<div class="form-group">
   <label for="emails" class="col-md">{{ __('emails') }}</label>
    <div class="col-md-13">
     <select name="emails[]" id="emails" class="form-control select2" multiple="multiple" data-placeholder="{{ __('emails') }}" style="width: 100%;">
       @foreach ($subscribers as $subscriber)
   <option value="{{ $subscriber->id  }}">{{ $subscriber->email }}</option>                   
       @endforeach
                 </select>
                </div>
  </div>

<div class="form-group">
    <label for="">Subject</label>
    {{ Form::text('subject', null , ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label for="">Message</label>
    {{ Form::textarea('message', null , ['class' => 'form-control ckeditor']) }}
</div>



<div class="form-group">
    <button type="submit" class="btn btn-primary">Send Email</button>
</div>