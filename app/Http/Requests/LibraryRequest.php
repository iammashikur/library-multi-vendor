<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibraryRequest extends FormRequest
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
            'name'        => ['required'],
            'district_id' => ['required', 'integer'],
            'division_id' => ['required', 'integer'],
            'city_id'     => ['required', 'integer'],
            'address'     => ['required'],
            'logo'        => ['sometimes', 'image', 'max: 500'],
            'banner'      => ['sometimes', 'image', 'max:500'],
            'description' => ['required'],
        ];
    }
}
