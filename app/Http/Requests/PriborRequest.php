<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PriborRequest extends FormRequest
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
            'title' => ['required'],
            'type_id' => ['required'],
            'number' => ['required',Rule::unique('pribors','number')->ignore($this->route('pribor'))],
            'date_realese' => ['required','date'],
            'date_start' => ['required','date'],
            'deta_count' => ['required'],
            'status' => ['required'],
            'departament_id' => ['required'],
            'description' => ['required'],
        ];
    }
}
