<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreShortUrlRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'destination_url' => 'url|required',
        ];
    }

    public function attributes(): array
    {
        return array_combine(
            array_keys($this->rules()),
            array_keys($this->rules()),
        );
    }
}
