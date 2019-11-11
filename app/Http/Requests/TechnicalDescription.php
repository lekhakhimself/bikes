<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TechnicalDescription extends FormRequest
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
            'part'=>'required|max:25',
            'bike_id'=>'required',
            'memo'=>'required|max:150',
        ];
    }
    public function messages(){
        return[
            'part.required'=>'part must be required',
            'part.max'=>'only 25 character support',
            'bike_id'=>'please choose bike',
            'memo.required'=>'memo field is required',
            'memo.max'=>'support only 150 characters',
        ];
    }
}
