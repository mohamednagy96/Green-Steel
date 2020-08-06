<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseFormRequest;
use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
            'slug'=>'required|unique:products',
            'description'=>'nullable',
            'seo.title'=>'nullable',
            'seo.description'=>'nullable',
            'seo.keyword'=>'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ];
    }

}
