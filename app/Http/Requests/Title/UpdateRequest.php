<?php

namespace App\Http\Requests\Title;

use Illuminate\Foundation\Http\FormRequest;
use App\Resourses\Helpers\PageHelper;

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
        $fields = array_keys(PageHelper::getTitlesJsonFile());

        $rules = [];

        foreach ($fields as $field) {
            $rules[$field] = [
                'required'
            ];
        }
        return $rules;
    }
}
