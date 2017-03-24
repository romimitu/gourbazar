<?php
    function rowList($array,$arraykey)
    {

        return (($array->currentPage()-1) * $array->perPage() + $arraykey + 1);
    }

    function uploadFile($image,$request,$path='',$title='')
    {
        if($request->$image!=null)
        {
            $imageName = str_slug($title,'-').'-'.time() . '.' . $request->$image->getClientOriginalExtension();
            $request->$image->move(public_path($path), $imageName);
            return $path.$imageName;
        }
    }
    
    function make_slug($string) {
        return preg_replace('/\s+/u', '-', trim($string));
    }


