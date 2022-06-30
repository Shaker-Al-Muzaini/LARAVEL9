<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            //number = numeric |main:1
            'name'=>'required|String',
            'Brith_Date'=>'required',
            'Nationality'=>'required',
            'image'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'tax'=>'required',
        ];
    }


    public function  messages():array
    {
       return [
           'name.required'=>'Name  is  required',
           'Brith_Date.required'=>'Brith_Date  is  required',
           'Nationality.required'=>'Nationality  is  required',
           'image.required'=>'image  is  required',
           'price.required'=>'price  is  required',
           'discount.required'=>'discount  is  required',
           'tax.required'=>'tax is  required',


       ];
    }
}
