<?php

namespace App\Http\Requests\Brands;

use Illuminate\Foundation\Http\FormRequest;

class brandsRequest extends FormRequest
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
            'name' => 'required|distinct:name|unique:Brands',
            'logo' => 'mimes:jpeg,jpg,png,gif|required|max:10000',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Danh Mục không được để trống',
            'name.unique' => 'Tên Đã Được Sử Dụng',
            'logo.required' => 'Logo không được để trống',
            'logo.mimes' => 'Logo phải là định dạng jpeg,jpg,png,gif',
        ];
    }
}
