<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;
use function Symfony\Component\Translation\t;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required',
            'age'=>'required',
            'job'=>'required',
            'image'=>'required|image|mimes:jpg,png,gif|max:2765|min_width=3840,min_height=2160',

        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'this file cant be null',
            'age.required'=>'this file cant be null',
            'job.required'=>'this file cant be null',
            'image.required'=>'no image uploaded',
        ];
    }
}
