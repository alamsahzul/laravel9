<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DosenStoreRequest extends FormRequest
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
            'nama' => 'required|min:3|max:50',
            'nidn' => 'required|min:10|max:10',
            'email' => 'required:email',
            'hp' => 'required|min:3|max:50',
        ];
    }
}
