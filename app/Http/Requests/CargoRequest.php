<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoRequest extends FormRequest
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
            "sender_name"=>'required|regex:/^[\pL\s\-]+$/u',
            "sender_phone"=>'required|digits:10',
            "sender_location"=>'required',
            "sender_address" => 'required|regex:/^[\pL\s\-]+$/u',

            "product"=>'required|regex:/^[\pL\s\-]+$/u',
            "product_weight"=>'required|numeric',
            "product_type"=>'required',

            "receiver_name"=>'required|regex:/^[\pL\s\-]+$/u',
            "receiver_phone"=>'required|digits:10',
            "receiver_location"=>'required',
            "receiver_address" => 'required|regex:/^[\pL\s\-]+$/u',
        ];
    }
}
