<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MenuValidation extends FormRequest
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
            'slug'=>'required|max:50',
            'header'=>'required',
            'footer'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'slug.required'=>'slug is required',
            'slug.max'=> 'support only 50 characters',
            'header.required'=>'header is required',
            'footer.required'=>'footer is required',
        ];
    }
}
