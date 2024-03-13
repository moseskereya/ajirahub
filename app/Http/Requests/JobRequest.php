<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'salary' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,avif,jpg,gif,webp',
            'position' => 'required|numeric|min:0',
            'expiration_date' => 'nullable|date',
            'skills' => 'nullable|string',
            'job_type' => 'nullable|string',
            'experience_level' => 'nullable|string',
            'education_level' => 'nullable|string',
            'responsibilities' => 'nullable|string',
            'company_id' => 'nullable|exists:companies,id',
            'category_id' => 'nullable|exists:categories,id',
            'user_id' => 'nullable|exists:users,id',
            'city_id' => 'nullable|exists:cities,id', 
        ];
    }
}
