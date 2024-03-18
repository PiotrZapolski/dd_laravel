<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'content' => ['required'],
            'schedule_at' => ['required', 'date'],
            'posted_at' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
