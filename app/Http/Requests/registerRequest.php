<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'first_name'    =>  'required',
            'last_name'     =>  'required',
            'email'         =>  'required',
            'birth_date'    =>  'required',
            'password'      =>  'required'
        ];
    }

    public function attributes()
    {
        return [
            'first_name'            => 'Nama Depan',
            'last_name'             => 'Nama Belakang',
            'birth_date'            => 'Tanggal Lahir',
            'password'              =>  'Kata Sandi',
            'email'                 =>  'Email'
        ];
    }

    public function messages()
    {
        return [
            '*.required'        => ':attribute harus di isi',
            // '*.same'            => ':attribute tidak cocok',
            // '*.min'             => ':attribute minimal 8 karakter',
        ];
    }
}
