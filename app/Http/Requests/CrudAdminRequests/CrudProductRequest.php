<?php

namespace App\Http\Requests\CrudAdminRequests;

use Illuminate\Foundation\Http\FormRequest;

class CrudProductRequest extends FormRequest
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
            'brand_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'name' => 'required|min:2|max:250|string',
            'slug' => 'required|min:2|max:100|string',
            'annotation' => 'required|min:2|max:250|string',
            'description' => 'required|min:5|max:2000|string',
            'tags' => 'nullable|min:2|max:250|string',
            'regular_price' => 'required|numeric',
            'sale_percentage' => 'nullable|numeric',
            'adjusted_price' => 'required|numeric',
            'stock_status' => 'required|numeric',
            'stock_quantity' => 'required|numeric',
            'gallery' => 'required|max:250',
            'sku' => 'required|min:2|max:250|string',
            'xls_tag' => 'nullable|min:2|max:250|string',
            'mete_title' => 'required|min:2|max:250|string',
            'meta_description' => 'required|min:2|max:250|string',
            'meta_keywords' => 'nullable|min:2|max:250|string'
        ];
    }
}
