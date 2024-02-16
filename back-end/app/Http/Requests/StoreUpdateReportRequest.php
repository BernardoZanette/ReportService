<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateReportRequest extends FormRequest
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
        $rules = [
            'reporter_id' => [
                'required',
                'unique'
            ],
            'reported_id' => [
                'required',
                'unique'
            ],
            'moderator_id' => [
                'required',
                'unique'
            ],
            'result' => 'required'
        ];

        return $rules;
    }
}
