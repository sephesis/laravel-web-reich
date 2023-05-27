<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'nullable',
            'active' => 'nullable',
            'img' => 'nullable',
            'date_active_from' => 'nullable',
            'date_active_to' => 'nullable',
            'tags' => 'nullable|array',
            'slug'=> 'nullable|string',
        ];
    }
}
