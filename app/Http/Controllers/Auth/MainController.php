<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
    public function __construct(){

        if(Auth::check()){
            if(Auth::user()->level != 0){
                Auth::logout();
                header('location:'.url('admin/login'));
                exit();
            }
        }else{
            header('location:'.url('admin/login'));
            exit();
        }
    }
}
