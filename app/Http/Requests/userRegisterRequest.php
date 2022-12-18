<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRegisterRequest extends FormRequest
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
            'reg_name'=>'required|min:3',
            'reg_email'=>'required|email|unique:users,email',
            'reg_password'=>'required|min:4',
            'confirm'=>'required_with:reg_password|same:reg_password|min:4'
        ];
    }
}
