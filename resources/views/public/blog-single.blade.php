@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
    <main class="main-content">
        <div class="blog_article-image" style="background-image: url('/frontend/images/5_things.jpg');"></div>
        <div class="article-background">
            <div class="container">
                <article class="col-sm-8 col-sm-offset-2">
                    <div class="blog_article blog_article-over-image blog_simple">
                        <header>
                            <div class="article-title">
                                <h3>{{$blog->title}}</h3>
                            </div>
                            <p class="article-pre-em">
                                <span class="em">Posted by:</span>&nbsp;<span class="uppercase">Admin</span>
                            </p>
                        </header>
                        <div class="blog_article_content">
                            <p>{!!$blog->description!!}</p>
                            <p><img src="/{{$blog->image}}" class="img-responsive" alt=""></p>
                            <p>What are your tips? Share them below. </p>
                        </div>
                        <div class="text-center article-tags">
                            <span class="article-pre-em em">Tagged With &nbsp;</span>
                            <a class="article-tag-simple" href="/">Dining</a>
                        </div>
                        <div class="text-center article-page-social">                            
                            <ul class="inline-list">
                                <li><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>          
                    </div>
                </article>
            </div>
        </div>
    </main>
@endsection