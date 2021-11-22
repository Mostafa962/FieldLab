<?php

namespace Admin\Http\Requests\Service;

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
        return [
            'title' => 'required|string|min:4|max:191',
            'description' => 'nullable|string|min:2|max:99999',
            'image' =>'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
        ];
    }
}
