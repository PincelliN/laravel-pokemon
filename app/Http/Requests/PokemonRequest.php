<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PokemonRequest extends FormRequest
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
        'name'=>'required|max:100',
        'height'=>'required|numeric',
        'weight'=>'required|numeric',
        'sprites'=>'required|url',
        'type'=>'required|max:50|min:4',
        'type_two'=>'max:50|min:4'
        ];
    }
    public function messages()
    {
        return[
             'name.required' => 'Il campo Nome è obbligatorio.',
        'name.max' => 'Il campo Nome non può superare i 100 caratteri.',
        'height.required' => 'Il campo Altezza è obbligatorio.',
        'height.numeric' => 'Il campo Altezza deve essere un numero.',
        'weight.required' => 'Il campo Peso è obbligatorio.',
        'weight.numeric' => 'Il campo Peso deve essere un numero.',
        'sprites.required' => 'Il campo Sprites è obbligatorio.',
        'sprites.url' => 'Il campo Sprites deve essere un URL valido.',
        'type.required' => 'Il campo Tipo è obbligatorio.',
        'type.max' => 'Il campo Tipo non può superare i 50 caratteri.',
        'type.min' => 'Il campo Tipo deve avere almeno 4 caratteri.',
        'type_two.max' => 'Il campo Tipo 2 non può superare i 50 caratteri.',
        'type_two.min' => 'Il campo Tipo 2 deve avere almeno 4 caratteri.',
        ];
    }
}