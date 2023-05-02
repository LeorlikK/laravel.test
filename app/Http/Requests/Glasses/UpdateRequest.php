<?php

namespace App\Http\Requests\Glasses;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'], // numeric current_password integer|size:10 unique:App\Models\User,email_address
            'slug' => ['required', 'string', 'max:255'],
            'text' => ['string', 'nullable'],
            'price' => ['required', 'numeric', 'max:50'],
            'discount' => ['numeric', 'nullable', 'max:50'],

            'brand_id' => ['string', 'nullable'],
            'category' => '',

            'is_public' => ['boolean'],
        ];
    }
}
