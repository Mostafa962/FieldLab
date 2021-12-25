<?php

namespace User\Http\Requests\Troubleshooting;

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
            'c_name'    => 'required|string|regex:/^[\pL\s\-]+$/u|min:4|max:191',
            'c_phone'   => 'required|string|regex:/^\+?\d+$/|min:10|max:15',
            'c_instrument' => 'required|string|max:191',
            'c_serial_number' => 'required|string|max:191',
            'c_message' => 'nullable|string|max:9999',
        ];
    }
}
