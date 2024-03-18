<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'description' => ['nullable'],
            'path' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
