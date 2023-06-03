<?php

namespace App\Http\Requests\Project;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            //
            'title' => 'required|string',
            'active' => 'nullable',
            'year' => 'string',
            'p_date' => 'date',
            'solution_id' => 'int',
            'color' => 'string',
            'url' => 'url|string',
            'img' => 'nullable',
            'sort' => 'required|string',
            'slug' => 'nullable',
            'property_column_size_4' => 'nullable',
            'property_column_size_8' => 'nullable',
            'show_on_main' => 'nullable',
        ];
    }
}
