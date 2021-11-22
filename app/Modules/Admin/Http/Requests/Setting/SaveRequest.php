<?php

namespace Admin\Http\Requests\Setting;

use Illuminate\Foundation\Http\FormRequest;

class SaveRequest extends FormRequest
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
            'about_us_content' => 'nullable|string|min:2|max:99999',
            'logo' =>'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
        ];
    }
}
