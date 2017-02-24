@extends('admin.layouts.master')
@section('title')
GOUR BAZAR ADMIN | BUY MANGO ONLINE
@endsection
@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>GourBazar Product Orders</h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject font-dark sbold uppercase">Product Order List</span>
                            </div>
                        </div>
                        <div class="portlet-body form">                             
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table mb0"> 
                                <thead>
                                    <tr> 
                                        <th class="col-md-1">ID</th>
                                        <th class="col-md-2">Name</th>
                                        <th class="col-md-2">Address</th>
                                        <th class="col-md-1">Mobile</th>
                                        <th class="col-md-1">E-mail</th>
                                        <th class="col-md-2">Product Name</th>
                                        <th class="col-md-1">Quantities</th>
                                        <th class="col-md-1">Price</th>
                                        <th class="col-md-1">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($orders as $order)
                                    <tr> 
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->address_one }}<br/>{{ $order->address_two }}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->product_name }}</td>
                                        <td>{{ $order->quantities }}</td>
                                        <td>{{ $order->price }}</td>
                                        <td class="align-middle">
                                            {!! Form::open([ 'method' => 'Delete', 'url' => ['/order', $order->id]]) !!}
                                            {!! Form::submit('Delete',['class'=>'btn btn-sm btn-danger']) !!}
                                            {!! Form::close() !!}                                        
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>                          
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@endsection