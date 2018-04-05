<?php

namespace App\Http\Controllers\Backend;

use App\Model\images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class RoomController extends Controller
{
    //
    public function getList(){
        $img_m = images::get();
        return view('admin.pages.room',compact('img_m'));
    }
}
