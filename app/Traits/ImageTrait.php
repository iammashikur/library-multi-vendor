<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;

trait ImageTrait {

    public function MakeImage(Request $request, $fileName, $path){
          /**
          * Image resizing and saving in defined dirs
          */
          if( $request->hasFile($fileName) ){
            $image = $request->file($fileName);
            // Extension
            $imageExt = $image->extension();
            // Changing the file name
            $FullImageName = time().'-'.uniqid().'.'.$imageExt;
            // intervention Make image
            $imageResize = Image::make($image->getRealPath());
            // local store path
            $fullPath = $path.$FullImageName;
            // saving image
            $imageResize->save($fullPath);
    
            return $FullImageName;
    
          }
    
    }
}