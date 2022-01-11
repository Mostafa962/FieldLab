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
            'logo'             => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'home_title'       => 'nullable|string|min:2|max:191',
            'home_cover'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'home_description' => 'nullable|string|min:2|max:99999',
            'address'          => 'nullable|string|min:2|max:191',
            'fax'              => 'nullable|string|min:2|max:191',
            'email'            => 'nullable|email|min:2|max:191',
            'facebook'         => 'nullable|url|min:2|max:191',
            'instagram'        => 'nullable|url|min:2|max:191',
            'twitter'          => 'nullable|url|min:2|max:191',
            'linkedin'         => 'nullable|url|min:2|max:191',
            'youtube'          => 'nullable|url|min:2|max:191',
            'about_cover'      => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'about_header'     => 'nullable|string|min:2|max:99999',
            'about_p1'         => 'nullable|string|min:2|max:99999',
            'about_p2'         => 'nullable|string|min:2|max:99999',
            'about_p3'         => 'nullable|string|min:2|max:99999',
            'about_p4'         => 'nullable|string|min:2|max:99999',
            'about_img1'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'about_img2'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'about_img3'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
            'about_img4'       => 'nullable|image|mimes:jpg,jpeg,png,gif,bmp',
        ];
    }
}
