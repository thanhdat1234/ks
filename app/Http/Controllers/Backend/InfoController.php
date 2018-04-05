<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class InfoController extends Controller
{
    //
    public function getList(){
        $img_m = images::get();
        return view('admin.pages.room');
    }
}
