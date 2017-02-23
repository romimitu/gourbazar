<?php
namespace App\Http\ViewComposer;
use App\Video;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
class VideoComposer
{
    public function allVideos(View $view)
    {
        if (Auth::guest())
        {
            $videos=Video::with('user')->withCount('views')->withCount('video_likes')->where('privacy','public')->paginate(6);
        }
        else
        {
            $videos=Video::with('user')->withCount('views')->withCount('video_likes')->where('privacy', 'public')->orWhere('user_id',Auth::user()->id)->paginate(6);
        }
        $view->with('videos',$videos);
    }
    public function relatedVideos(View $view)
    {
        $id=actId();
        //$vi=Video::findOrFail($id);
        //$galleries=$vi->galleries()->pluck('gallery_id');
        $posts = Video::whereHas('galleries', function ($query){
        $query->whereIn('gallery_id',[17,29,18] );
        })->get();
        $videos=DB::select('SELECT DISTINCT v.id, v.*, u.username username FROM videos v INNER JOIN users u ON v.user_id=u.id INNER JOIN tags t ON v.id=t.video_id WHERE t.gallery_id IN (SELECT DISTINCT tags.gallery_id FROM tags where tags.video_id='.$id.') AND v.privacy="public"');
        if (count($videos)<3)
        {
            $cate=Video::where('id',$id)->pluck('category_id');
            $videos=Video::where(['privacy'=>'public','category_id'=>$cate[0]])->get();
        }
        $view->with('videos',$videos);
    }
    public function popularVideos(View $view)
    {
        $videos=Video::has('views')->withCount('views')->withCount('video_likes')->where('privacy','public')->orderBy('views_count','DESC')->limit(6)->get();
        $view->with('popularVideos',$videos);
    }
    public function newVideos(View $view)
    {
        $videos=Video::withCount('views')->withCount('video_likes')->where('privacy','public')->latest('created_at')->paginate(6);
        $view->with('newVideos',$videos);
    }
}