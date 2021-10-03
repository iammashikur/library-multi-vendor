<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
        switch ($this->getMethod()) {
            case 'PUT':
                return [
                    'category_id' => ['required', 'integer'],
                    'cover_image' => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:500'],
                    'title'       => ['required','max:200'],
                    'description' => ['required'],
                    'price'       => ['required', 'integer'],
                    'stock'       => ['required', 'integer'],
                    'num_of_page' => ['sometimes', 'integer'],
                    'publisher'   => ['sometimes'],
                    'writer'      => ['sometimes'],
                    'status'      => ['sometimes'],
                ];
                break;

            default:
                return [
                    'category_id' => ['required', 'integer'],
                    'cover_image' => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:500'],
                    'title'       => ['required','max:200'],
                    'description' => ['required'],
                    'price'       => ['required', 'integer'],
                    'stock'       => ['required', 'integer'],
                    'num_of_page' => ['sometimes', 'integer'],
                    'publisher'   => ['sometimes'],
                    'writer'      => ['sometimes'],
                    'status'      => ['sometimes'],
                ];
                break;
        }

    }
}
