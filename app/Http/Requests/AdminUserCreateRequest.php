<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => ['string', 'unique:users'],
            'email' => 'unique:users',
            'password'=>['required','min:8']
        ];
    }

    public function messages()
    {
        return [
            'email.unique' => "ایمیل ها یکتا هستند",
            'username.unique' => "نام های کاربری یکتا هستند",
        ];
    }
}
