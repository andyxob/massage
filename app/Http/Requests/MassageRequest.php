<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MassageRequest extends FormRequest
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
            'name'=>'required|min:4|max:64|alpha',
            'description'=>'required|min:7',
            'price'=>'required|digits_between:0,250'
        ];
    }
}
