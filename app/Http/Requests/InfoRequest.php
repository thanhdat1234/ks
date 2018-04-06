<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class InfoRequest extends Request {

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
            'phone_a'          	=> 'min:10|max:11',
            'phone_b'          	=> 'min:10|max:11',
            //'content'          	=> 'integer|min:0',
        ];
    }
    public function messages(){
        return[
            'email.required' 	=> 'Mời bạn nhập  !',
            'email.integer' 	=> 'Email bạn nhập chưa !',
            'phone_a.min' 	    => 'Số điện thoại 10 hoặc 11 !',
            'phone_a.max' 	    => 'Số điện thoại 10 hoặc 11 !',
            'phone_b.min' 	        => 'Số điện thoại 10 hoặc 11 !',
            'phone_b.max' 	        => 'Số điện thoại 10 hoặc 11 !',

        ];
    }

}
