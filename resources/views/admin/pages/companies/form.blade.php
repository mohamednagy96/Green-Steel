<div class="form-group">
    <label for="">name</label>
    {{ Form::text('company[name]', isset($company) ? $company->name : null , ['class' => 'form-control', 'required' => true]) }}
</div>

<div class="form-group">
    <label for="">Description</label>
    {{ Form::textarea('company[description]', isset($company) ? $company->description : null , ['class' => 'form-control', 'rows'=>3]) }}
</div>


@if(isset($company)) 

    <div class="form-group row">
        <label for="categories" class="col-md-1">{{ __('Categories') }}</label>
        <div class="col-md-12">
                <select name="categories[]" id="categories" class="form-control select2" multiple="multiple" data-placeholder="{{ __('Select a category') }}" style="width: 100%;">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id  }}" @if (in_array($category->id,$companyCategories)) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
        </div>
    </div>

    <table class="table">
            <tr>
                <td><img src="{{ $category->image ? $category->image->getUrl() : asset('images/default.jpg') }}" alt="" width="200px">
                </td>
                <td>  <label for="">Images</label>
                    {!! Form::file('image') !!}
                </td>
            </tr>
        </table>
@else
        <div class="form-group row">
            <label for="categories" class="col-md-1">{{ __('categories') }}</label>
            <div class="col-md-12">
                    <select name="categories[]" id="categories" class="form-control select2" multiple="multiple" data-placeholder="{{ __('categories') }}" style="width: 100%;">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id  }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

            <div class="form-group">
            <label for="">Images</label>
            {!! Form::file('image') !!}
        </div>
@endif
<hr>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($company) ? 'Update' : 'Create' }}</button>
</div>
