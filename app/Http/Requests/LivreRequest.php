<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|string|max:255',
            'auteur' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'nbrePage' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'pdf_file' => 'required|mimes:pdf|max:10240'
        ];
    }
}
