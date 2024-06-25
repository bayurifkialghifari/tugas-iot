<?php

namespace App\Http\Requests\Api;

use App\Traits\isApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
{
    use isApiRequest;

    public function rules(): array
    {
        return [
            'ppm' => ['required', 'numeric'],
        ];
    }
}
