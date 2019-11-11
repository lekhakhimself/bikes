<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConfigValidation extends FormRequest
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
            'key'=>'required|max:30',
            'value'=>'required',
            'type'=>'required'
            //
        ];
    }
    public function messages(){
        return[
            'key.required'=>'key is required',
            'key.max'=>'maximum 30 character only',
            'value.required'=>'value is required',
            'type.required'=>'type is required'
        ];
    }
}
