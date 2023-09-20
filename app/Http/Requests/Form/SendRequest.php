<?php

namespace App\Http\Requests\Form;

use Illuminate\Foundation\Http\FormRequest;

class SendRequest extends FormRequest
{
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
            'feedback_name' => 'required|string',
            'feedback_phone' => 'required|string',
            'feedback_privacy' => 'required',
            'feedback_type' => 'string',
            'feedback_file' => 'file',
        ];
    }
}