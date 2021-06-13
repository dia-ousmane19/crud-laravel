<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'title' => 'required|unique:posts,title',
            'description' => 'required'
        ];
    }

    public function message()
    {
        return [
            'title.required' => 'Please enter post title',
            'title.unique' => 'the post has already been token',
            'description.required' => 'Please enter post description'

        ];
    }
}
