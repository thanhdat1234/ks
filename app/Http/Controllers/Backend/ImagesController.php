<?php

namespace App\Http\Controllers\Backend;

use App\Model\images;
//use Faker\Provider\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Symfony\Component\DomCrawler\Image;
use Image;
//use Intervention\Image\Facades\Image;

class ImagesController extends Controller
{
    //
    public function getList($slug){
        $img_m = images::get();
        $dataz = images::where(['alias'=>$slug])->get()->first();
        return view('admin.pages.image',compact('dataz','img_m'));

    }
    public function postFile(Request $r,$slug){
        //echo $slug;
        $dataz = images::where(['alias'=>$slug])->get()->first();

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

                $image = Image::make(sprintf('public/images/'.$slug.'/%s', $fileName))->resize($dataz->max_width, $dataz->max_height)->save();
                //$image = Image::make(sprintf('public/images/'.$slug.'/%s', $fileName))->resize(450, 350)->save();
                if($dataz->content == ''){
                    $x[]=$fileName;
                }else{
                    $x = json_decode($dataz->content,true);
                    $x[count($x)]= $fileName;
                }
                $imx = images::FindOrFail($dataz->id);
                $imx->content = json_encode($x,true);
                $imx->save();

                return response()->json(['code'=>1,'msg'=>$fileName]);
            }
        }
    }
    public function removeFile(Request $r){
        if($r->ajax()){
            $slug = $r->slug;
            $id   = $r->id;
            $dataz = images::where(['alias'=>$slug])->get()->first();
            $x = json_decode($dataz->content,true);
            unset($x[$id]);
            if($x != null){
                $x=array_values($x);
            }
            //$x = reset($x);
            //$un_ar[] = $x[$id];
            //$x = array_diff($x,$un_ar);
            $imx = images::FindOrFail($dataz->id);
            $imx->content = json_encode($x,true);
            $imx->save();

            return response()->json(['code'=>1,'msg'=>'Detele thành công!']);

        }
    }
}
