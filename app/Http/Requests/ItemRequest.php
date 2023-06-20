<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'method' => ['required', 'string'],
            'price' => ['required', 'numeric'],
            'title' => ['required', 'string'],
            'description' => ['required', 'string'],
            'royalties' => ['required', 'numeric'],
            'size' => ['required', 'string'],
            'collection_id' => ['required', 'integer'],
            'category_id' => ['required', 'integer'],
        ];

    }
}
