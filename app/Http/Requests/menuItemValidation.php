<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class menuItemValidation extends FormRequest
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

          'nam'=>'required|max:25',
            'url'=>'required|max:100',
            'type'=>'required|max:20',
            'isactive'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'nam.required'=>'name is required',
            'nam.max'=>'support only 25 character',
            'url.required'=>'url is required',
            'url.max'=> 'support only 100 character ',
            'type.required'=>'type is required',
            'type.max'=>'support only 20 character',
            'isactive.required'=>'is active is required',
            ];
    }
}
