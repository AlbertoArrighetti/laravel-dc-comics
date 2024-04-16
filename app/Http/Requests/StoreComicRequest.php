<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:255',

            'description' => 'nullable|max:2000',
            'thumb' => 'nullable|max:2000',

            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|max:100',

            'artists' => 'required|max:2000',
            'writers' => 'required|max:2000',          
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Il campo: :attribute deve essere inserito per proseguire.',
            'max' => 'Il campo: :attribute deve contenere massimo :max caratteri.',
            'sale_date.date' => 'Questo campo deve avere una data valida.',
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => 'Titolo',
            'description' => 'Descrizione',
            'thumb' => 'Thumb',
            'price' => 'Prezzo',
            'series' => 'Serie',
            'sale_date' => 'Data di uscita',
            'type' => 'Tipologia',
            'artists' => 'Artisti',
            'writers' => 'Scrittori',
        ];
    }
}
