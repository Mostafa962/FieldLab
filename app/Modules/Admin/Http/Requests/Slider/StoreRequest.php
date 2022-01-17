<?php

namespace Admin\Http\Requests\Slider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'nullable|string|regex:/^[\pL\s\-]+$/u|min:4|max:191',
            'image' =>'required|image|mimes:jpg,jpeg,png,gif,bmp',
        ];
    }
}
