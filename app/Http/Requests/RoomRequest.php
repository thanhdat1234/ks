<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RoomRequest extends Request {

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
            'price'          	=> 'required|integer|min:0',
            'sale'          	=> 'integer|min:0',
        ];
    }
    public function messages(){
        return[
            'price.required' 	=> 'Bạn chưa nhập giá !',
            'price.integer' 	=> 'Giá tiền là số!',
            'price.min' 	    => 'giá tiền không được âm!',
            'sale.integer' 	    => 'Giá khuyến mãi là số!',
            'sale.min' 	        => 'Giá tiền không được âm!',

        ];
    }

}
