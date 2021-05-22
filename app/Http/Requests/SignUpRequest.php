<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name'=>'required|min:3|max:30|regex:/[a-zA-Z0-9]/i',
            'degree'=>'required|max:50',
            'email'=>'required|unique:users|email:rfc|max:50|min:10',
            'password'=>'required|min:4|max:20',
            'con_password'=>'required_with:password|same:password|min:4|max:20',
            'address'=>'required|max:50',
            'mobile'=>'required|numeric',
            'dob'=>'required',
            'image'=>'image|mimes:jpg,bmp,png,jpeg|max:5000',
        ];
    }
}
