<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_surname' => 'required|sometimes|string',
            'email'        => 'required|sometimes|email',
            'password'     => 'required|sometimes|confirmed|min:4'
        ];
    }

    public function messages()
    {
        return [
            'name_surname.required' => 'İsim soyisim alanı gereklidir.',
            'name_surname.string'   => 'İsim soyisim alanı metinsel olmalıdır.',
            'email.required'        => 'E-Posta alanı gereklidir.',
            'email.email'           => 'E-Posta alanı e-posta formatına uygun olmalıdır.',
            'password.required'     => 'Şifre alanı gereklidir.',
            'password.confirmed'    => 'Şifre doğrulanamadı.',
            'password.min'          => 'Şifre alanı en az 4 karakter içermelidir.'
        ];
    }

    protected function passedValidation()
    {
        if ($this->request->has("password")) {
            $password = $this->request->get("password");
            $this->request->set("password", Hash::make($password));
        }
    }
}