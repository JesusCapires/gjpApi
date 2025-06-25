<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class TaskRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            'description' => 'required|string|max:255',
            'priority' => 'nullable|string|max:45',
            'type' => 'nullable|string|max:45',
            'date_start' => 'nullable|date',
            'date_end' => 'nullable|date',
            'status' => 'required|string|max:45',
            'id_project' => 'required|exists:projects,id',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es obligatorio',
            'description.required' => 'La descripción es obligatoria',
            'status.required' => 'El estado es obligatorio',
            'id_project.required' => 'El proyecto es obligatorio',
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $firstError = $validator->errors()->first();
        
        throw new HttpResponseException(response()->json([
            'error'   => true,
            'message'   => $firstError,
            'data'      => $validator->errors()
        ]));
    }
}
