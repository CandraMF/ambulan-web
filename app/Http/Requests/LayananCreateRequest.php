<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LayananCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:255'],
            'deskripsi' => ['nullable', 'string', 'max:255'],
            'foto' => ['required'],
            'foto.*' => ['mimes:jpg,jpeg,png', 'max:5000'],
        ];
    }
}
