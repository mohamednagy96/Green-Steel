<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class PackageFormRequest extends FormRequest
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
            'slug'=>'required|unique:packages,slug',
            'description'=>'nullable',
            'order'=>'nullable',
            'color_picker'=>'nullable',
            'price'=>'nullable',
            'seo.title'=>'nullable',
            'seo.description'=>'nullable',
            'seo.keyword'=>'nullable',
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required'=>'100',
    //         'slug.required|unique'=>'101',
    //         'description.nullable'=>'102',
    //         'order.nullable'=>'103',
    //         'color_picker.nullable'=>'104',
    //         'price.nullable'=>'105',
    //     ];
    // }
}
