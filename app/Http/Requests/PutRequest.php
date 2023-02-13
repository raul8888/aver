<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
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
            'title' => 'required',
           /*  'slug' => 'required|unique:posts', */
            'content' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'posted' => 'required',
            'image' => 'mimes:jpeg, jpg, png|max:10240',
        ];
    }
}
