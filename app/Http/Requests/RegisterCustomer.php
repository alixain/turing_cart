<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterCustomer extends FormRequest
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
            //
            'name'=>'required|max:50',
            'email'=>'required|email|max:100',
            'password'=>'required|min:5|max:15',
            'address'=>'min:3|max:100',
            'address_2'=>'max:100',
            'city'=>'max:100',
            'region'=>'max:100',
            'postal_code'=>'integer',
            'country'=>'max:100',
            'day_phone'=>'phone',
            'eve_phone'=>'phone',
            'mob_phone'=>'phone'

        ];
    }
}
