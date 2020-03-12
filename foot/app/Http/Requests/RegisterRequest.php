<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            "email"=>"required|email|unique:thanh_vien,email",
            "password"=>"required",
            "password_conf"=>"required|same:password",
            "ho_ten"=>"required"
        ];
    }
    public function messages()
    {
        return [
            "email.required"=>"Email không được để trống",
            "email.email"=>"Email không đúng định dạng",
            "email.unique"=>"Email đã tồn tại",
            "password.required"=>"Password không được để trống",
            "password_conf.same"=>"Password xác thực không chính xác",
            "password_conf.required"=>"Password xác thực không được để trống",
            "ho_ten.required"=>"Họ tên không được để trống"
        ];
    }
}
