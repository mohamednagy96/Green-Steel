<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class ServicesFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'slug'=>'required|unique',
            'description'=>'nullable',
            'seo.title'=>'nullable',
            'seo.description'=>'nullable',
            'seo.keyword'=>'nullable'
        ];
    }
    
    // public function messages()
    // {
    //     return [
    //         'name.required'=>'101',
    //         'slug.required|unique'=>'102',
    //         'description.nullable'=>'103',
    //         'seo.title.nullable'=>'104',
    //         'seo.description.nullable'=>'105',
    //         'seo.keyword.nullable'=>'106'
    //     ];
    // }
}
