<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class forgotPasswordRequest extends FormRequest
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
            'email'         =>  'required|exists:users,email'
        ];
    }

    public function attributes()
    {
        return [
            'email'                 =>  'Email'
        ];
    }

    public function messages()
    {
        return [
            '*.required'        => ':attribute harus di isi',
            '*.exists'          => ':attribute tidak ditemukan'
        ];
    }
}
