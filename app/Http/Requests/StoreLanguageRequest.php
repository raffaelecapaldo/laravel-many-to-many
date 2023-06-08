<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLanguageRequest extends FormRequest
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
            'name' => 'required|max:100',
            'badge_color' => 'required|max:50'
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Il nome del linguaggio è richiesto',
            'name.max' => 'Il nome non può superare :max caratteri',
            'badge_color.required' => "L'HEX del badge è richiesto",
            'badge_color.max' => "Il codice HEX non può superare i :max caratteri"
        ];
    }
}
