<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseUpdateResqeust extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "duration" => "numeric",
            "category_id" => "exists:categories,id"
        ];
    }

    public function attributes()
    {
        return [
            "name" => "nombre",
            "description" => "descripción",
            "duration" => "duración",
            "category_id" => "Categoría"
        ];
    }
}
