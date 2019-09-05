<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'img' => 'required',
            'text' => 'required|max:255',
            'area' => 'notin:0|required',
            'area2' => 'required|max:255',
            'season' => 'notin:0',
        ];
    }

    public function messages()
    {
        return [
            'img.required' => '※画像を選択してください',
            'text.required' => '※入力必須です',
            'text.max' => '※255文字以内で入力してください',
            'area2.required' => '※入力必須です',
            'area2.max' => '※255文字以内で入力してください',
            'season.notin' => '※選択必須です',
            'area.notin' => '※選択必須です',
        ];
    }
}
