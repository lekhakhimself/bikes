<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class addBikeDetails extends FormRequest
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
             'part' => "required | max:15",
             'color'=> "required ",
             'size' => "required|numeric",
             'bike_id'=>"required",
             'memo'=>"required|string|max:150"
            //
        ];
    }
        public function messages()
        {
        return[
            'part.requires'=>'part must be required',
            'part.max'=>'maximum 15 string only',
            'color.required'=>'color must be required',
            'size.required'=>'size must be required',
            'size.numeric'=>'size support numeric value only',
            'bike_id'=>'bike name is required',
            'memo.required'=>'memo is required',
            'memo.string'=>'memo support string only',
            'memomax'=>'support only 150 characters '
   
            //
        ];
    }
}
