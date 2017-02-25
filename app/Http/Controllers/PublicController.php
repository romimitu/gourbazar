<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use App\Service;
use App\Blog;

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

}
