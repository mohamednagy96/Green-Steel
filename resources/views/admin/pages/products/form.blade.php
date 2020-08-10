<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control', 'required' => true]) }}
</div>


<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('description', null , ['class' => 'form-control', 'rows'=>3]) }}
</div>

{{-- <div class="form-group">
    <label for="">Company</label>
    {{ Form::select('company_id',$company ,null, ['class' => 'form-control', 'required' => true, 'placeholder' => '-- Company --']) }}
</div>
<div class="form-group">
    <label for="">Category</label>
    {{ Form::select('category_id',$category ,null, ['class' => 'form-control', 'required' => true, 'placeholder' => '-- Category --']) }}
</div> --}}

@if(isset($product))
    <div class="form-group">
        <label for="">Country</label>
        <select class="form-control" name="company_id" id="country" required >
        <option value="{{$product->company_id}}" disabled selected>{{$product->company->name}}</option>
            @foreach ($company as $company)
                 <option value="{{$company->id}}">{{$company->name}}</option>
            @endforeach
        </select>
    </div>   
    
    <div class="form-group">
        <label for="">Category</label>
        <select class="form-control" name="category_id" id="category" required>
        <option value="{{$product->category_id}}" disabled selected>{{$product->category->name}}</option>
            <option value=""></option>
        </select>
    </div>   

    

@else

<div class="form-group">
    <label for="">Company</label>
    <select class="form-control" name="company_id" id="company" >
        <option value="" disabled selected>Select your Company</option>
        @foreach ($company as $company)
             <option value="{{$company->id}}">{{$company->name}}</option>
        @endforeach
    </select>
</div>   
    

<div class="form-group">
    <label for="">Category</label>
    <select class="form-control" name="category_id" id="category">
        <option value="" disabled selected>First ... Select Your Company</option>
        <option value=""></option>
    </select>
</div> 

@endif 

<div class="form-group">
    <label for="">Image</label>
    {!! Form::file('image') !!}
</div>


<hr>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($product) ? 'Update' : 'Create' }}</button>
</div>


{{-- ajax with country and city --}}
<script>
    $('#company').on('change',function(e){
        console.log(e);
        var company_id = e.target.value;
        $.get('/ajax-subcat?company_id=' + company_id,function(data){
            $('#category').empty();
            $('#category').append('<option value="" + disabled selected >'   + "Selcet Your Category" + '</option>')
            $.each(data,function(index,categoryObj){
            $('#category').append('<option value="' + categoryObj.id + '">' + categoryObj.name + '</option>')
            });
        });
    });
</script>