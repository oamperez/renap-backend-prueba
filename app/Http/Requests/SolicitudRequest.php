<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'birthdate' => 'required',
            'department' => 'required',
            'municipality' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'photo' => 'image|required',
            'email' => 'required|email|unique:users',
        ];
    }
}
