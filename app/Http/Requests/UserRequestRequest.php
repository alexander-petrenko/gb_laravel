<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3', 'max:15'],
            'phone' => ['required', 'string', 'min:7', 'max:15'],
            'email' => ['required', 'string', 'min:7', 'max:20'],
            'request' => ['required', 'string', 'max:250']
        ];
    }
}
