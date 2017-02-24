<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Review;
use App\Order;
use App\Contact;
use App\Product;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Review()
    {
        $reviews = Review::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.review', ['reviews' => $reviews]);  
    }
    public function OrderList()
    {
        $orders = Order::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.order', ['orders' => $orders]);  
    }
    public function ContactMessage()
    {
        $messages = Contact::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.message', ['messages' => $messages]);  
    }


    public function destroyMessage($id)
    {
        $contact=Contact::find($id);
        dd($contact);
        $contact->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/message');
    }
}
