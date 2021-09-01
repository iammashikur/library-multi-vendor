<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Swift;

class BlogRequest extends FormRequest
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
                    'image'       => ['image', 'mimes:jpg,png,jpeg,gif,svg', 'max:500'],
                    'title'       => ['required', 'max:200'],
                    'category_id' => ['required'],
                    'body'        => ['required'],
                    'tags'        => ['required'],
                    'is_premium'  => ['sometimes']
                ];
                break;
            
            default: 
                return [
                    'image'       => ['required', 'image', 'mimes:jpg,png,jpeg,gif,svg', 'max:500'],
                    'title'       => ['required', 'max:200'],
                    'category_id' => ['required'],
                    'body'        => ['required'],
                    'tags'        => ['required'],
                    'is_premium'  => ['sometimes']
                ];
                break;
        }

       
    }
}
