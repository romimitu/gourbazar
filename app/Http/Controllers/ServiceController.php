<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Service;

class ServiceController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $services = Service::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.service.index', ['services' => $services]);  
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(ServiceRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/service/');
        $service = Service::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/service');  
    }

    public function show(Service $service)
    {
        //
    }
    public function edit(Service $service)
    {
        return view('admin.service.edit', ['service' => $service]);
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/service/');
        $service->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/service');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/service');
    }
}
