<?php

namespace App\Http\Requests\API;

use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "name" => ["required", "string", "max:100"],
            "date_of_birth" => ["required", "string", "max:20"],
            "type" => ["required", "string", "max:100"],
            "weight_kg" => ["required", "numeric", "max:10000"],
            "height_m" => ["required", "numeric", "max:100"],
            "biteyness" => ["required", "numeric", "between:0,5"]
        ];
    }
}
