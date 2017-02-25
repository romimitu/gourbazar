@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
    <main class="main-content" role="main">
        <div class="page-header" style="background-image: url(/frontend/images/generic_header_image2966.jpg)">
            <div class="page-header-container hover-target">
                <div class="page-header-content underline-animation">
                    <h2>আমাদের সেবাসমূহ</h2>
                </div>
            </div>
        </div>
        <div class="container page-margin">
            <div class="col-sm-10 col-sm-offset-1">
                <blockquote>
                    <p class="p1" style="text-align: center;">চাঁপাই নবাবগন্জ থেকে সমগ্র বাংলাদেশ</p>
                </blockquote>
                @foreach($services as $service)
                <div class="col-sm-4">
                    <div class="article-spacing">
                        <a href="{{ url('our-service', [$service->id, str_slug($service->title, '-')] )}}">
                          <div class="blog-index-image" style="background-image: url('/{{$service->image}}');"></div>
                        </a>
                        <div class="blog-index-copy">
                            <a href="{{ url('our-service', [$service->id, str_slug($service->title, '-')] )}}"><h4>{{$service->title}}</h4></a>
                            <a href="{{ url('our-service', [$service->id, str_slug($service->title, '-')] )}}" class="text-center">READ MORE</a>
                        </div>                    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection