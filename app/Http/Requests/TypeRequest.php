<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TypeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required','max:255','min:2',Rule::unique('types','title')->ignore($this->route('type'))],
            'type' => ['required','max:255','min:2'],
            'registry' => ['required','max:255','min:2'],
            'class' => ['required','max:255','min:2']
        ];
    }
}
