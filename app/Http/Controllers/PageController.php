<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Page;

class PageController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pages = Page::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.page.index', ['pages' => $pages]);  
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(PageRequest $request)
    {
        $data = $request->except('image','background_image'); 
        $data['image']=uploadFile('image',$request,'uploads/page/');
        $data['background_image']=uploadFile('background_image',$request,'uploads/page/');
        $page = Page::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/page');  
    }

    public function show(Page $page)
    {
        //
    }
    public function edit(Page $page)
    {
        return view('admin.page.edit', ['page' => $page]);
    }

    public function update(PageRequest $request, Page $page)
    {
        $data = $request->except('image','background_image'); 
        $data['image']=uploadFile('image',$request,'uploads/page/');
        $data['background_image']=uploadFile('background_image',$request,'uploads/page/');
        $page->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/page');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/page');
    }
}
