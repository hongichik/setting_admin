<?php
namespace liondev\setting_admin\function;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class image
{
    public function upload($img)
    {
        $file = $img;
        if(!$file->isValid()) {
            return response()->json(['Tải ảnh lên thất bại'], 400);
        }

        $expensions= array("jpeg","jpg","png","PNG","ico");
            
        if(in_array($file->getClientOriginalExtension(),$expensions)=== false){
            return response()->json(['Chỉ hỗ trợ ảnh jpeg, jpg, png'], 400);
        }
         
        $path = public_path() . '/uploads/images/';
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        while(file_exists($path.$fileName))
        {
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        }
        $file->move($path, $fileName);

        return $fileName;
    }

    public function Update($img,$imgDelete)
    {
        $file = $img;
        if(!$file->isValid()) {
            return response()->json(['Tải ảnh lên thất bại'], 400);
        }

        $expensions= array("jpeg","jpg","png","PNG","ico");
            
        if(in_array($file->getClientOriginalExtension(),$expensions)=== false){
            return response()->json(['Chỉ hỗ trợ ảnh jpeg, jpg, png'], 400);
        }
         
        $path = public_path() . '/uploads/images/';
        $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        while(file_exists($path.$fileName))
        {
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();
        }
        $file->move($path, $fileName);
        File::delete($path.$imgDelete);
        return $fileName;
    }

    public function copy()
    {
        $path = public_path() . '/uploads/images/';
        $fileName = uniqid().'.ico';
        while(file_exists($path.$fileName))
        {
            $fileName = uniqid().'.ico';
        }
        copy( public_path().'/installer/img/lion-5.ico' , $path.$fileName);
        return $fileName;
    }
}
?>