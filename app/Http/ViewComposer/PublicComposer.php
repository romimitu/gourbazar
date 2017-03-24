<?php
namespace App\Http\ViewComposer;

use App\Gallery;
use App\Member;
use App\Service;
use App\Blog;
use App\Product;
use Illuminate\View\View;
use Illuminate\Support\PublicProvider;

class PublicComposer
{
    public function allService(View $view)
    {
        $services = Service::orderBy('created_at', 'asc')->take(3)->get();
        $view->with('services', $services);
    }
    public function allBlog(View $view)
    {
        $blogs = Blog::orderBy('created_at', 'asc')->take(9)->get();
        $view->with('blogs', $blogs);
    }
    public function homeProduct(View $view)
    {
        $products = Product::orderBy('created_at', 'asc')->take(3)->get();
        $view->with('products', $products);
    }
}