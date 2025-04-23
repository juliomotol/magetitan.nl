<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubscribeToNewsletterRequest extends FormRequest
{
    protected function getRedirectUrl()
    {
        return parent::getRedirectUrl() . "#newsletter";
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'name' => ['required', 'string', 'max:255'],
        ];
    }
}
