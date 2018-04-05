<?php

namespace App\Http\Controllers;

use App\Model\images;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    //protected $data;
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*public function setdataImages(){
        $img = images::get();
        $this->data['images_m'] = $img;
    }*/
}
