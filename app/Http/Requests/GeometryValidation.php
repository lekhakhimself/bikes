<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeometryValidation extends FormRequest
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
              'size' => "required | max:25",
              'fortynine'=>'required| max:15',
              'fiftytwo'=>'required|max:15',
              'fiftythree'=>'required|max:15',
                  'fiftyfour'=>'required|max:15',
              'fiftysix'=>'required|max:15',
              'fiftyeight'=>'required|max:15',
              'sixtyone'=>'required|max:15',
              'bike_id'=>'required'




            //
        ];
    }
    public function messages(){
        return[
            'size.required'=>'size is required',
            'size.max'=>'only 25 character support',
            'fortynine.required'=>'this value is compulsory',
            'fortynine.max' =>'only 15 character support',
            'fiftytwo.required'=>'this value is compulsory',
            'fiftytwo.max' =>'only 15 character support',
             'fiftyfour.required'=>'this value is compulsory',
            'fiftyfour.max' =>'only 15 character support',
             'fiftysix.required'=>'this value is compulsory',
            'fiftysix.max' =>'only 15 character support',
             'fiftyeight.required'=>'this value is compulsory',
            'fiftyeight.max' =>'only 15 character support',
             'sixtyone.required'=>'this value is compulsory',
            'sixtyone.max' =>'only 15 character support',
            'bike_id'=>'choose bike'
        ];
    }
}

