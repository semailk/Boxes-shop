<?php

namespace App\Http\Requests\CrudAdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class CrudCategoryRequest extends FormRequest
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
            'slug' => 'required|min:2|max:250|string',
        ];
    }
}
