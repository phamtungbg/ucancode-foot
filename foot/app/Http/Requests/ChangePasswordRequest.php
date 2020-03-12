<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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

            "password"=>"required",
            "password_conf"=>"required|same:password",
            "new_password"=>"required|different:password"
        ];
    }
    public function messages()
    {
        return [
            "password.required"=>"Password không được để trống",
            "password_conf.same"=>"Password xác thực không chính xác",
            "password_conf.required"=>"Password xác thực không được để trống",
            "new_password.required"=>"Password mới không được để trống",
            "new_password.different"=>"Password mới không được trùng password cũ"
        ];
    }
}
