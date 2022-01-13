<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'keywords' => 'required',
            'description' => 'required | max:255',
            'full_description' => 'required | min:10'
        ];
    }
}
