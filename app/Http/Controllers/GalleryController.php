<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Gallery;

class GalleryController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.gallery.index', ['galleries' => $galleries]);  
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/gallery/');
        $gallery = Gallery::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/gallery');  
    }

    public function show(Gallery $gallery)
    {
        //
    }
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', ['gallery' => $gallery]);
    }

    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/gallery/');
        $gallery->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/gallery');
    }

    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/gallery');
    }
}
