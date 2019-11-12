<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class bikeValidation extends FormRequest
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
            'cname' => "required | max:15|alpha",
            'isactive' => "required",
            'memo' => "required|max:500",
            //
        ];
    }

    public function messages()
    {
        return [

            'cname.required' => 'name must be required',
            'cname.max' => 'maximum 15 letters only',
            'cname.alpha' => 'supports only alphabets',
            'isactive.required' => 'Is active is required',
            'memo.required' => 'description is required',
            'memo.max' => 'only support upto 500 letters',
        ];
    }
}
