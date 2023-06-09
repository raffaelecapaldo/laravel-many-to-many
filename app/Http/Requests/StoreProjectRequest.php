<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100|unique:projects',
            'image_url' => 'required|url',
            'languages' => 'required|exists:languages,id',
            'tags' => 'nullable|max:255',
            'description' => 'required',
            'repo_url' => 'nullable|url',
            'category_id' => 'required|exists:categories,id'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Il nome del progetto è obbligatorio',
            'name.max' => 'Il nome non può essere più lungo di :max caratteri',
            'name.unique' => 'È già presente un progetto con questo nome',
            'image_url.required' => "L'url dell'immagine è obbligatorio",
            'image_url.url' => "L'url dell'immagine non è corretto",
            'tags.max' => 'Il campo tag non può essere più lungo di :max caratteri',
            'description.required' => 'Una descrizione del progetto è obbligatoria',
            'repo_url.url' => "L'url della repository non è corretto",
            'category_id.required' => 'Si è verificato un erorre relativo alle categorie, riprova',
            'category_id.exists' => 'Si è verificato un erorre relativo alle categorie, riprova',
            'languages.required' => 'Selezionare almeno un linguaggio di programmazione',
            'languages.exists' => 'Si è verificato un errore nella scelta del linguaggi, riprovare'



        ];
    }
}
