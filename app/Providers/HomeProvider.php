<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HomeProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('public.index', 'App\Http\ViewComposer\HomeComposer@HomeService');
        View::composer('public.index', 'App\Http\ViewComposer\HomeComposer@HomeBlog');
    }

    public function register()
    {
        //
    }
}
