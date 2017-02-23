<?php
    function testFunction()
    {
        return 'This is from testFunction Customize helper function';
    }
    function rowList($array,$arraykey)
    {

        return (($array->currentPage()-1) * $array->perPage() + $arraykey + 1);
    }
    function videoImage($link='')
    {
        if(strpos($link,'youtube'))
        {
            $id=substr(strstr($link, "be.com/embed/"), 13);
            return 'https://img.youtube.com/vi/'.$id.'/0.jpg';
        }
        elseif(strpos($link,'facebook.com'))
        {
            $fid=substr(strstr($link, "/videos/"), 8);
            return 'https://graph.facebook.com/'.$fid.'picture';
        }
        elseif($link=='')
        {
         return  'assets/videos/video_thumbnail/default.jpg';
        }
        else
            return $link;
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
    function NumberOfview($link)
    {
        $video_ID=substr(strstr($link, "be.com/embed/"), 13);
        $JSON = file_get_contents("https://gdata.youtube.com/feeds/api/videos/{$video_ID}?v=2&alt=json");
        $JSON_Data = json_decode($JSON);
        $views = $JSON_Data->{'entry'}->{'yt$statistics'}->{'viewCount'};
        return $views;
    }
    function likecheck($id)
    {
        if (!\Illuminate\Support\Facades\Auth::guest())
        {
       $userid= \Illuminate\Support\Facades\Auth::user()->id;
       $videoLikes=\App\Video_like::where(['video_id'=>$id,'user_id'=>$userid])->pluck('like');
            if (count($videoLikes)>0 AND $videoLikes[0]==1)
               { return 'liked';}
            else
            {return 'login';}
        }
        else
           {return false;}
    }
    function textLimit($str)
    {
        return substr($str, 0, 400);
    }
    function actId()
    {
        preg_match_all('!\d+!', URL::current(), $matches);
        return end($matches[0]);
    }
    function isAdmin()
    {
        if(\Illuminate\Support\Facades\Auth::user()->type->id==1)
            return true;
        else
            return false;
    }
    
    function isManager()
    {
        if(\Illuminate\Support\Facades\Auth::user()->type->id==2)
            return true;
        else
            return false;
    }
    function isAMT()
    {
        if(\Illuminate\Support\Facades\Auth::user()->type->id==2 OR \Illuminate\Support\Facades\Auth::user()->type->id=1 OR \Illuminate\Support\Facades\Auth::user()->type->id=3 )
            return true;
        else
            return false;
    }
function isTrainer()
{
    if(\Illuminate\Support\Facades\Auth::user()->type->id==3)
        return true;
    else
        return false;
}
function isStudent()
{
    if(\Illuminate\Support\Facades\Auth::user()->type->id==4)
        return true;
    else
        return false;
}
function isGeneral()
{
    if(\Illuminate\Support\Facades\Auth::user()->type->id==5)
        return true;
    else
        return false;
}



