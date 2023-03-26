<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmbulanUpdateRequest extends FormRequest
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
            'merk' => ['nullable', 'string', 'max:255'],
            'tahun' => ['nullable', 'string', 'max:255'],
            'jumlah' => ['nullable', 'integer', 'max:255'],
            'deskripsi' => ['nullable', 'string', 'max:255'],
            'foto.*' => ['mimes:jpg,jpeg,png', 'max:5000'],
        ];
    }
}
