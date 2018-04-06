<?php

namespace App\Http\Controllers\Backend;

use App\Model\images;
use App\Model\rooms;
use Illuminate\Http\Request;
//use App\Http\Requests\Request;
use App\Http\Requests\RoomRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Image;
class RoomController extends Controller
{
    //
    public function getList($slug){
        try{
            $id = (string)$slug;
            $room = rooms::where(['alias'=>$id])->get()->first();
            if((array)$room == null){
                return redirect(url('/admin'));
            }
            $img_m = images::get();
            return view('admin.pages.room',compact('img_m','room'));
        }catch (\ErrorException $e){
            return redirect(url('/admin'));
        }

    }
    public function update(RoomRequest $r,$slug){
        try{
            $id = (string)$slug;
            $room = rooms::where(['alias'=>$id])->get()->first();

            $imx = rooms::FindOrFail($room->id);
            $imx->content = (string)$r->contentz;
            $imx->price  = (int)$r->price;
            $imx->sale  = (int)$r->sale;

            $imx->save();
            return redirect()->back();

        }catch (\ErrorException $e){
            return redirect(url('/admin'));
        }

    }

    public function postFile(Request $r,$slug){
        //echo $slug;
        $dataz = rooms::where(['alias'=>$slug])->get()->first();

        if($r->ajax()){
            if($r->hasFile('image')){
                /*$this->validate($r, [
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|dimensions:width='.$dataz->max_width.',height='.$dataz->max_height,
                ]);
                if($validator->fails())
                {
                    return Response::make( array_merge(['test'=>404],$validator->errors()->all()));
                }
                */

                $image = $r->file('image');
                $fileName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(
                    base_path() . '/public/images/'.$slug.'/', $fileName
                );

                $image = Image::make(sprintf('public/images/'.$slug.'/%s', $fileName))->resize($dataz->width, $dataz->height)->save();
                //$image = Image::make(sprintf('public/images/'.$slug.'/%s', $fileName))->resize(450, 350)->save();
                if($dataz->images == ''){
                    $x[]=$fileName;
                }else{
                    $x = json_decode($dataz->images,true);
                    $x[count($x)]= $fileName;
                }
                $imx = rooms::FindOrFail($dataz->id);
                $imx->images = json_encode($x,true);
                $imx->save();

                return response()->json(['code'=>1,'msg'=>$fileName]);
            }
        }
    }
    public function removeFile(Request $r){
        if($r->ajax()){
            $slug = $r->slug;
            $id   = $r->id;
            $dataz = rooms::where(['alias'=>$slug])->get()->first();
            $x = json_decode($dataz->images,true);
            unset($x[$id]);
            if($x != null){
                $x=array_values($x);
            }
            //$x = reset($x);
            //$un_ar[] = $x[$id];
            //$x = array_diff($x,$un_ar);
            $imx = rooms::FindOrFail($dataz->id);
            $imx->images = json_encode($x,true);
            $imx->save();

            return response()->json(['code'=>1,'msg'=>'Detele thành công!']);

        }
    }


}
