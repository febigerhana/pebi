<?php

namespace App\Http\Requests\User;

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
            'nama' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns'
        ];
    }

    public function messages()
{
    return [
        'nama.required' => '*Nama Diisi BANG JAGO',
        'username.required' => '*Username Diisi BANG JAGO',
        'username.unique' => '*Username Sudah Tersedia BANG JAGO',
        'email.required' => '*Email Diisi BANG JAGO',
    ];
}
}
