<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vendingRequest extends FormRequest
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
            'money' => 'required|numeric',

        ];
    }

    public function messages() {
        return [
            'money.required' => 'お金を入力してください。',
            'money.numeric' => '数値を入力してください。',
        ];
    }
}
