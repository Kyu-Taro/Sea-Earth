<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'area' => ' required|string',
            'url' => 'required|active_url',
            'prof' => 'required|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '※入力必須です',
            'name.string' => '※文字で入力してください',
            'name.max' => '※255文字以内いで入力してください',
            'email.required' => '※入力必須です',
            'email.string' => '※文字で入力してください',
            'email.email' => '※メールアドレスを入力してください',
            'email.max' => '※255文字以内で入力してください',
            'area.required' => '※入力必須です',
            'area.string' => '※文字で入力してください',
            'url.required' => '※入力必須です',
            'url.active_url' => '※有効なURLを指定してください',
            'prof.required' => '※入力必須です',
            'prof.max' => '※255文字以内で入力してください',
        ];
    }
}
