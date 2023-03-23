<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmbulanCreateRequest extends FormRequest
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
            'nama' => ['string', 'max:255'],
            'merk' => ['string', 'max:255'],
            'tahun' => ['string', 'max:255'],
            'jumlah' => ['integer', 'max:255'],
            'deskripsi' => ['string', 'max:255'],
        ];
    }
}
