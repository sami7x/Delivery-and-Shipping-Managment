<?php

namespace App\Http\Requests\Admin\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "company_name"=>'required|unique:users',
            "email"=>'required|email|unique:users',
            "user_name"=>'required|unique:users',
            "password" => ['required', 'confirmed', "min:6"],
            "password_confirmation" => 'required_with:password|same:password|min:6',
        ];
    }
}
