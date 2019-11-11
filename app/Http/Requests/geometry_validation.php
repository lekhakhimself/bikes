<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class geometry_validation extends FormRequest
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
              'forty_nine'=>"required|max:15",
               'fifty_two'=>"required|max:15",
                  'fifty_four'=>"required|max:15",
         'fifty_six'=>"required|max:15",
         'fifty_eight'=>"required|max:15",
          'sixty_one'=>"required|max:15",
          'bike_id'=>"required",
        ];
       
    } 
    public function messages(){
        return[
            'size.required'=>'size is required',
            'size.max'=>'only 25 characters',
            'forty_nine.required'=>'this value is compulsory',
            'forty_nine.max'=>'only supporyts 15 characters',
            'fifty_two.required'=>'this value is compulsory',
            'fifty_two.max'=>'only supporyts 15 characters',
        'fifty_four.required'=>'this value is compulsory',
            'fifty_four.max'=>'only supporyts 15 characters',
             'fifty_six.required'=>'this value is compulsory',
            'fifty_six.max'=>'only supporyts 15 characters',
             'fifty_eight.required'=>'this value is compulsory',
            'fifty_eight.max'=>'only supporyts 15 characters',
             'sixty_one.required'=>'this value is compulsory',
            'sixty_one.max'=>'only supporyts 15 characters',
            'bike_id.required'=>'this value is compulsory',


       
        ];
    }
}
