@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
    <main class="main-content" role="main">
        <div class="page-header" style="background-image: url(/frontend/images/blog-banner.jpg)">
            <div class="page-header-container hover-target">
                <div class="page-header-content underline-animation">
                    <h2>আমাদের ব্লগ</h2>
                </div>
            </div>
        </div>
        <div class="container page-margin">
            <div class="col-sm-10 col-sm-offset-1">
                <blockquote>
                    <p class="p1" style="text-align: center;">নিয়মিত আপডেট পেতে ও আমাদের সর্বশেষ অবস্থা জানতে আমাদের ব্লগ পেজে সর্বদা চোখ রাখুন</p>
                </blockquote>
                @foreach($blogs as $blog)
                <div class="col-sm-4">
                    <div class="article-spacing">
                        <a href="{{ url('our-blog', [$blog->id, str_slug($blog->title, '-')] )}}">
                            <div class="blog-index-image" style="background-image: url('/{{$blog->image}}');"></div>
                        </a>
                        <div class="blog-index-copy">
                            <h3>{{$blog->title}}</h3>
                            <a href="{{ url('our-blog', [$blog->id, str_slug($blog->title, '-')] )}}" class="text-center">READ MORE</a>
                        </div>                    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection