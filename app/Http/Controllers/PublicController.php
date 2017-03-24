<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Service;
use App\Member;
use App\Blog;
use App\Product;

class PublicController extends Controller
{
    public function servicedetails($id, $slug)
    {
        $service = Service::find($id);
        return view('public.service-single', ['service' => $service]);
    }

    public function blogdetails($id, $slug)
    {
        $blog = Blog::find($id);
        return view('public.blog-single', ['blog' => $blog]);
    }

    public function Productdetails($id, $slug)
    {
        $product = Product::find($id);
        return view('public.product-single', ['product' => $product]);
    }

    public function TeamMember()
    {
        $teams = Member::orderBy('created_at', 'asc')->paginate(7);
        return view('public.about-us', ['teams' => $teams]);
    }

    public function allProduct()
    {
        $products = Product::orderBy('created_at', 'asc')->paginate(12);
        return view('public.shop', ['products' => $products]);
    }

}
