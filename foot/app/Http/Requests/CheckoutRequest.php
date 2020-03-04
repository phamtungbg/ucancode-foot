<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            "ho_ten"=>"required|min:5",
            "dia_chi"=>"required|min:5",
            "dien_thoai"=>"required|min:6",
            "email"=>"required|email"
        ];
    }
    public function messages()
    {
        return [
            "ho_ten.required"=>"Họ tên không được để trống",
            "ho_ten.min"=>"Họ tên không được ít hơn 5 ký tự",
            "dia_chi.required"=>"Địa chỉ không được để trống",
            "dia_chi.min"=>"Địa chỉ không được ít hơn 5 ký tự",
            "dien_thoai.required"=>"SDT không được để trống",
            "dien_thoai.min"=>"SDT không được ít hơn 6 ký tự",
            "email.required"=>"Email không được để trống",
            "email.email"=>"Email không đúng định dạng"
        ];
    }

}
