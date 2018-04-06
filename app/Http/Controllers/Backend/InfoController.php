<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\InfoRequest;
use App\Model\images;
use App\Model\infos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
class InfoController extends Controller
{
    //
    public function getList(){
        $img_m = images::get();
        $info = infos::get()->first();
        $dataz = new \stdClass();
        $dataz->name = 'Thông tin nhà nghỉ';
        return view('admin.pages.info',compact('img_m','dataz','info'));
    }
    public function update(InfoRequest $r){
        try{
            //$id = (string)$slug;
            $info = infos::get()->first();
            $imx = infos::FindOrFail($info->email);
            $imx->content = (string)$r->contentz;
            $imx->phone_a  = (string)$r->phone_a;
            $imx->phone_b  = (string)$r->phone_b;
            $imx->addr  = (string)$r->addr;
            $imx->email  = (string)$r->email;
            $imx->save();
            return redirect()->back();

        }catch (\ErrorException $e){
            return redirect(url('/admin'));
        }

    }
}
