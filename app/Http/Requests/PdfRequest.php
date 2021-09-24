<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PdfRequest extends FormRequest
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
                    'image'       => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:500'],
                    'title'       => ['required', 'max:200'],
                    'pdf'         => ['sometimes', 'max:5000'],
                    'category'    => ['required'],
                    'description' => ['required', 'max:300'],
                    'status'      => ['sometimes']
                ];
                break;

            default:
                return [
                    'image'       => ['sometimes', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:500'],
                    'title'       => ['required', 'max:200'],
                    'pdf'         => ['required', 'max:5000'],
                    'category'    => ['required'],
                    'description' => ['required', 'max:300'],
                    'status'      => ['sometimes']
                ];
                break;
        }


    }
}
