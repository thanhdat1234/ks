<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class LoginRequest extends Request {

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
            'email'          	=> 'required|email',
            'password'     		=> 'required|max:50|min:6',
        ];
    }
    public function messages(){
        return[
            'email.required' 	=> 'Bạn chưa nhập tên đăng nhập !',
            'email.email' 	    => 'Email đăng nhập chưa đúng định dạng !',

            'password.required' => 'Bạn chưa nhập mật khẩu !',
            'password.max' 	    => 'Mật khẩu không được quá 50 ký tự !',
            'password.min' 	    => 'Mật khẩu it nhất là 6 ký tự !',
        ];
    }

}
