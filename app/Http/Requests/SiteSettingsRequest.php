<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteSettingsRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'logo'           => ['sometimes', 'max:500'],
            'favicon'        => ['sometimes',  'max:500'],
            'banner_one'     => ['sometimes', 'max:500'],
            'banner_two'     => ['sometimes', 'max:500'],
            'banner_three'   => ['sometimes', 'max:500'],
            'meta'           => ['required', 'max:200'],
            'description'    => ['required', 'max:200'],
            'hero_title'     => ['required', 'max:200'],
            'hero_sub_title' => ['required', 'max:200'],
            'basic_credit'   => ['required', 'max:200'],
            'pro_credit'     => ['required', 'max:200'],
        ];

    }
}
