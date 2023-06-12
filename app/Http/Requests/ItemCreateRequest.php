<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemCreateRequest extends FormRequest
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
            'method' => ['required'],
            'price' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'royalties' => ['required'],
            'size' => ['required'],
            'collection_id' => ['required'],
            'category_id' => ['required'],
        ];
    }
}
