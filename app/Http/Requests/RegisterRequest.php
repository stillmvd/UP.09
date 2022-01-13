<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * @var mixed
     */
    private $password;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'login' => 'required | unique:users| min:4 | max:16',
            'email' => 'required | unique:users| email',
            'password' => 'required | min:6',
            'confirmPassword' => 'same:password'
        ];
    }
}
