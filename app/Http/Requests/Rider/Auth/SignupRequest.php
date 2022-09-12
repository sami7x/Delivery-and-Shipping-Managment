<?php

namespace App\Http\Requests\Rider\Auth;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            "id"=>'required|unique:signup',
            "username"=>'required|unique:signup',
            "password" => ['required', 'confirmed', "min:6"],
            "password_confirmation" => 'required_with:password|same:password|min:6',
        ];
    }
}
