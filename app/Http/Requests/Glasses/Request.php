<?php

namespace App\Http\Requests\Glasses;

use Illuminate\Foundation\Http\FormRequest;

class Request extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:App\Models\Glasses,name'], // numeric current_password integer|size:10 unique:App\Models\User,email_address
            'slug' => ['required', 'string', 'max:255', 'unique:App\Models\Glasses,slug'],
            'text' => ['string', 'nullable'],
            'price' => ['required', 'numeric', 'max:20'],
            'discount' => ['numeric', 'nullable', 'max:20'],

            'brand_id' => ['string', 'nullable'],
            'category' => 'array',

            'is_public' => ['boolean'],
        ];
    }
}
