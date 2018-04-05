<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth as Authz;


class AuthController extends Controller
{
    /*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('web');
    }

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard  $auth
     * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
     * @return void
     */
    public function __construct(/*Guard $auth, Registrar $registrar*/)
    {
        //$this->auth = $auth;
        //$this->registrar = $registrar;
        //$this->middleware('guest', ['except' => 'admin/logout']);
    }
    public function getLogin(){
        //echo bcrypt('123456');
        return view('admin.pages.login');
    }
    public function postLogin(LoginRequest $request){
        $login = [
            'email'     => $request->email,
            'password'  => $request->password,
            'level'	    => 0,
            'status'	=> 1,
        ];
        //$this->guard();
        if(Authz::attempt($login,true)){
            $this->middleware('admin');
            return redirect()->intended('admin');
        }else{
            $request->session()->flash('status_login', 'Tài khoản không đúng!');
            return redirect()->back();
        }
    }
    public function getLogout()
    {
        Authz::logout();
        return redirect(url('admin/login'));
    }
}
