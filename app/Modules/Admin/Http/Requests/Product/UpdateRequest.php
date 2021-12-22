<?php

namespace Admin\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
        $keys_size = request()->input('keys')?count(request()->input('keys')):0;
        return [
            'category'    => 'required|exists:categories,id',
            'name'        => 'required|string|regex:/^[\pL\s\-]+$/u|min:4|max:191',
            'image'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'pdf'         => 'nullable|mimes:pdf|max:10000',
            'quotation'   => 'nullable|string|min:2|max:200',
            'description' => 'required|string|min:2|max:99999',
            'images'      => 'nullable|array',
            'images.*'    => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'keys'        => 'nullable|array',
            'keys.*'      => 'nullable|string|min:1|max:191',
            'values'      => 'nullable|array|size:'.$keys_size,
            'values.*'    => 'nullable|string|min:1|max:191',
        ];
    }
}
