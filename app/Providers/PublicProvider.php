<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class PublicProvider extends ServiceProvider
{
    public function boot()
    {        
        View::composer('public.blog', 'App\Http\ViewComposer\PublicComposer@allBlog');
        View::composer('public.service', 'App\Http\ViewComposer\PublicComposer@allService');
    }

    public function register()
    {
        //
    }
}
