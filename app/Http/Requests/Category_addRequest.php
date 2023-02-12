<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Category_addRequest extends FormRequest
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
            'type' => 'required',
            'name' => 'required|distinct:name|unique:Categories'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Danh Mục không được để trống',
            'name.unique' => 'Tên Đã Được Sử Dụng',

            'type.required' => 'Loại Danh Mục không được để trống',
        ];
    }
}
