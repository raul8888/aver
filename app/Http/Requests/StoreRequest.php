<?php

namespace App\Http\Requests;

use Illuminate\Support\Str;
use Psy\CodeCleaner\ValidFunctionNamePass;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => str($this->title)->slug()
        ]);
    }

    public function rules()
    {
        return [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'posted' => 'required',
        ];
    }
}
