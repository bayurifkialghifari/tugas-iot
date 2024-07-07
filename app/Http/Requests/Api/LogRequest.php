<?php

namespace App\Http\Requests\Api;

use App\Traits\IsApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
{
    use IsApiRequest;

    public function rules(): array
    {
        return [
            'ppm' => ['required', 'numeric'],
        ];
    }
}
