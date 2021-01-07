<?php

namespace App\Traits;

trait taskTrait
{
    function saveImage($photo , $folder ){
        $file_extension = $photo -> getClientOriginalExtension();
        $file_new_name = time().'.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$file_new_name);
        return $file_new_name;
    }
}
