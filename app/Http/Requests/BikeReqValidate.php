<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BikeReqValidate extends FormRequest
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
     'bname' => "required | max:15|alpha",
     'price'=>"required| integer",

            'isactive' => "required",

            'memo' => "required|max:150",
            'category_idd'=>"required",
            //
        ];
    }
      public function messages()
    {
        return [

            'bname.required' => 'name must be required',
            'bname.max' => 'maximum 15 letters only',
            'bname.alpha' => 'supports only alphabets',
            'price.required'=>'price is compulsory',
            'price.integer'=> 'only support integer value',

            'isactive.required' => 'Is active is required',
            'memo.required' => 'description is required',
            'memo.max' => 'only support upto 150 letters',
            'category_idd.required'=>'category Id is required'
        ];
    }
}
