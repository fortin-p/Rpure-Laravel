<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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

                'name'=>'required ',
                'description'=>'required ',
                'price'=>'required | numeric | digits_between:: min=1 , max=10000 ',
                'weight'=>'required | numeric',
                'image'=>'required',
                'categorie_id'=>'required | numeric',
                'quantity'=>'required | numeric',


        ];
    }
}
