<?php
namespace App\Http\ViewComposer;

use App\Gallery;
use App\Member;
use App\Service;
use App\Blog;
use Illuminate\View\View;
use Illuminate\Support\HomeProvider;

class HomeComposer
{
    public function HomeService(View $view)
    {
        $services = Service::orderBy('created_at', 'asc')->take(3)->get();
        $view->with('services', $services);
    }

    public function HomeBlog(View $view)
    {
        $blogs = Blog::orderBy('created_at', 'asc')->take(5)->get();
        $view->with('blogs', $blogs);
    }
}