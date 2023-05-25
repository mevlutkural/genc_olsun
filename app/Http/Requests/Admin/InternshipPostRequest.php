<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class InternshipPostRequest extends FormRequest
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
            'title'             => 'required|sometimes|string',
            'short_description' => 'required|sometimes|string',
            'description'       => 'required|sometimes|string',
            'image'             => 'required|sometimes|mimes:jpeg,png,jpg,gif'
        ];
    }

    public function messages()
    {
        return [
            'title.required'             => 'Başlık alanı gereklidir.',
            'title.string'               => 'Başlık alanı gereklidir.',
            'short_description.required' => 'Kısa Açıklama alanı gereklidir.',
            'short_description.string'   => 'Kısa Açıklama alanı gereklidir.',
            'description.required'       => 'Açıklama alanı gereklidir.',
            'description.string'         => 'Açıklama alanı gereklidir.',
            'image.required'             => 'Başlık alanı gereklidir.',
            'image.string'               => 'Başlık alanı gereklidir.'
        ];
    }
}