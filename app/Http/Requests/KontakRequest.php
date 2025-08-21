<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KontakRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email:rfc,dns|max:255',
            'phone' => 'nullable|string|max:20|regex:/^[0-9+\-\s]+$/',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|min:10|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'name.regex' => 'Nama hanya boleh berisi huruf dan spasi.',
            'phone.regex' => 'Format nomor telepon tidak valid.',
            'message.min' => 'Pesan minimal 10 karakter.',
        ];
    }
}
