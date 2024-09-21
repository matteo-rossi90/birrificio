<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeerRequest extends FormRequest
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
            'name' => 'required|min:3|max:100',
            'price' => 'required|numeric|min:2',
            'average' => 'required|numeric',
            'image' => 'required|max:255'
        ];

    }

    public function messages(){

        return[

            'name.required' => 'Il nome è obbligatorio',
            'name.min' => 'Il nome richiede almeno :min caratteri',
            'name.max'=> 'Il nome richiede al massimo 100 caratteri',
            'price.required'=> 'Il prezzo è obbligatorio',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'ilprezzo deve avere almeno :min caratteri',
            'average.required' => 'Il voto è obbligatorio',
            'average.numeric' => 'Il voto deve essere un numero',
            'image.required' => "L'immagine è obbligatoria"
        ];
    }
}
