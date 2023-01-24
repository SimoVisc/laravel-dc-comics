<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'description' => 'required|string',
            'thumb' => 'required|url|max:255',
            'price' => 'required|decimal:2|between:0.01,99.99',
            'series' => 'required|string|max:100',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:50',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'WARNING: title is required',
            'title.string' => 'WARNING: title must be a string',
            'title.max' => 'WARNING: title must not be longer than 100 characters',
        ];
    }
}