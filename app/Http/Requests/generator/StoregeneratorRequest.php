<?php

namespace App\Http\Requests\generator;

use Illuminate\Foundation\Http\FormRequest;

class StoregeneratorRequest extends FormRequest
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
            'coderumed_id' => 'required|numeric',
            'machine_name' => 'required|string|max:255',
            'reference' => 'required|string|max:255',
            'lote_machine' => 'required|integer',
            'temp_machine' => 'required|integer',
            'temp_ambiente' => 'required|string|max:255',
            'type_program' => 'required|string|max:255',
     
            'status' => 'required|string|max:255',
            'observation' => 'nullable|string|max:1000'
        ];
    }
}