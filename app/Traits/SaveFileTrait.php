<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait SaveFileTrait {

    public function MakeFile(Request $request, $fileName, $path){
          /**
          * Pdf saving in defined dirs
          */
          if( $request->hasFile($fileName) ){
            $file = $request->file($fileName);
            // Extension
            $fileExt = $file->extension();
            // Changing the file name
            $FullFileName = time().'-'.uniqid().'.'.$fileExt;

            // saving image
            $file->storeAs($path, $FullFileName, ['disk' => 'local']);

            return $FullFileName;

          }

    }
}
