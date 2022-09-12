<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RiderRequest extends FormRequest
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
            "rider_name"=>'required|regex:/^[\pL\s\-]+$/u',
            "rider_address"=>'required|regex:/^[\pL\s\-]+$/u',
            "rider_phone"=>'required|digits:10',
            "gender" => 'required',

            "license_no"=>'required',
            "vehicle_no"=>'required',
            "image"=>'required',

        ];
    }
}
