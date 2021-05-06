<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFeedbackRequest extends FormRequest
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
            'name' => 'required|min:2|max:250|string',
            'email' => 'required|min:5|max:250|email',
            'subject' => 'required|min:2|max:250|string',
            'message' => 'required|min:5|max:2000|string',
        ];
    }
}
