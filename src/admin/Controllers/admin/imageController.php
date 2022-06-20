<?php

namespace App\Http\Controllers\vendor\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use liondev\setting_admin\function\image;

class imageController extends Controller
{
    public function uploadImg(Request $request)
    {

        if(!$request->hasFile('upload')) {
            return response()->json(['Tải ảnh lên thất bại'], 400);
        }
        $a = new image();
        return $a->upload($request->file('upload'));
    }

    public function ShowImg($fileName){
        $path = public_path().'/uploads/images/'.$fileName;
        return Response::file($path);        
    }

}
