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
            'name' => [ 'required', 'max:30'],
            "description" => ['required','max:400'],
            "category_id" => ['required','exists:categories,id'],
            'picture' => ['required'],
            "weight" => ['gte:1'],
            'price' => ['required', 'gte:1'],
        ];
    }
}
