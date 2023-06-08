<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'surname' => ['required','max:255','min:2'],
            'name' => ['required','max:255','min:2'],
            'phone' => ['required','max:255','min:2'],
            'position' => ['required','max:255','min:2']
        ];
    }
}
