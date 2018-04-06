<?php

namespace App\Http\Controllers\Frontend;

use App\Model\images;
use App\Model\infos;
use App\Model\rooms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //

    public function index(){
        $info = infos::get()->first();
        $img_slider = images::where(['alias'=>'hinh-anh-slider'])->get()->first();
        $r_don = rooms::where(['alias'=>'phong-don'])->get()->first();
        $r_doi = rooms::where(['alias'=>'phong-doi'])->get()->first();
        return view('pages.index',compact('info','img_slider','r_don','r_doi'));
    }
    /**
     *@page
     */
    public function pageRoom($slug){
        $info = infos::get()->first();
        $room = rooms::where(['alias'=>(string)$slug])->get()->first();

        return view('pages.rooms',compact('info','room'));
    }
    public function pageInfo(){

    }
    public function pageImage(){
        $info = infos::get()->first();
        $imgs = images::where('alias','<>','hinh-anh-slider')->get();

        return view('pages.images',compact('info','imgs'));
    }
    public function pageService(){
        $info = infos::get()->first();
        return view('pages.service',compact('info'));
    }
}
