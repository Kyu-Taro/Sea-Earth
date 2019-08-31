<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'pass_re'){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'pass' => 'required',
            'new_pass' => 'required|confirmed',
            'new_pass_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'pass.required' => '※入力必須です',
            'new_pass.required' => '※入力必須です',
            'new_pass.confirmed' => '※パスワードの再入力が一致しません',
            'new_pass_confirmation.required' => '※入力必須です',
        ];
    }
}
