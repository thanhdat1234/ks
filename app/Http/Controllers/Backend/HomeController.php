<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Auth\MainController;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\images;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index(){
        $img_m = images::get();
        //pre($img_m);
        return view('admin.pages.home',compact('img_m'));
    }
}
