@extends('public.layouts.master')
@section('title')
GOUR BAZAR | BUY MANGO ONLINE
@endsection
@section('content')
    <main class="main-content">
        <div class="page-head" style="background-image: url('/frontend/images/shop_banner.jpg');">
            <div class="page-header-container hover-target">
                <div class="page-header-content underline-animation">
                    <h2>All Collections</h2>        
                </div>
            </div>
        </div>
        <div class="main-content-area">    
            <div class="container">    
                <div class="col-sm-3">
                    <h5>Collections</h5>
                    <ul class="collection-nav">
                        <li class="collection-nav--active"><a href="#">All Collections</a></li>
                        <li><a href="#">Artwork</a></li>
                        <li><a href="#">Fabric by the Yard</a></li>
                        <li><a href="#">Featured</a></li>
                    </ul>
                    <h5>Tags</h5>
                    <ul class="collection-nav">
                        <li class="collection-nav--active"><a href="#">All Tags</a></li>
                        <li><a title="Tangerine" href="#">Blush - Tangerine</a></li>
                        <li><a title="fabric by the yard" href="#">fabric by the yard</a></li>
                    </ul>
                </div>   
                <div class="col-sm-9">    
                    <div class="grid-uniform collection-products">
                    @foreach($products as $product)
                        <div class="product-grid-item col-sm-4">
                            <a class="product-image-tile" href="{{ url('products', [$product->id, make_slug($product->name)] )}}">
                                <div class="reveal">
                                    <img class="img-responsive" src="/{{$product->image}}" alt="" />      
                                    <!-- <div class="hidden">
                                            <img class="img-responsive" src="/frontend/images/pillow-back-small.jpg" alt="Pillow in Multi" />
                                        </div>   -->    
                                </div>
                            </a>
                            <div class="figcaption hover">
                                <a href="{{ url('products', [$product->id, make_slug($product->name)] )}}">
                                    <p class="collection-product-title">{{$product->name}}</p>
                                    <p class="price_wrapper">প্রতি কেজি <span class="price"><span class="money">৳ {{$product->price}}</span></span></p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection