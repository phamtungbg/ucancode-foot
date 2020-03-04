<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'ten'=>'required|min:3',
            'gia'=>'required|numeric',
            'so_luong'=>'required|numeric',
            'anh'=>'image', // file phải là định dạng ảnh
        ];
    }
    public function messages()
    {
        return [
            'ten.required'=>'Tên sản phẩm không được để trống!',
            'ten.min'=>'Tên sản phẩm phải lớn hơn 3 ký tự!',
            'gia.required'=>'Giá sản phẩm không được để trống!',
            'gia.min'=>'Giá sản phẩm phải là dạng số!',
            'so_luong.required'=>'Số lượng sản phẩm không được để trống!',
            'so_luong.numeric'=>'Số lượng sản phẩm phải là dạng số!',
            'anh.image'=>'File Ảnh không đúng định dạng!',
        ];
    }
}
