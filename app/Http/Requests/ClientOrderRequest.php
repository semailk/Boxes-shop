<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientOrderRequest extends FormRequest
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
            'user_id' => 'numeric',
            'first_name' => 'required|min:2|max:250|string',
            'last_name' => 'required|min:2|max:250|string',
            'phone' => 'nullable|min:5|max:250|string',
            'email' => 'required|min:5|max:250|string',
            'country' => 'required|min:3|max:100|string',
            'city' => 'required|min:3|max:100|string',
            'address' => 'required|min:3|max:250|string',
            'comment' => 'nullable|min:5|max:2000|string',
            'delivery_option' => 'required|min:5|max:250|string',
            'track_code' => 'nullable|min:5|max:200|sting',
            'payment_information' => 'nullable|min:5|max:200|string',
        ];
    }
}
