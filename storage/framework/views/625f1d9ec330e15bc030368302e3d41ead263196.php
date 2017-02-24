<?php $__env->startSection('title'); ?>
GOUR BAZAR ADMIN | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
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
                            <?php if(Session::has('message')): ?>
                                <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
                            <?php endif; ?>
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
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr> 
                                        <td><?php echo e($order->id); ?></td>
                                        <td><?php echo e($order->name); ?></td>
                                        <td><?php echo e($order->address_one); ?><br/><?php echo e($order->address_two); ?></td>
                                        <td><?php echo e($order->mobile); ?></td>
                                        <td><?php echo e($order->email); ?></td>
                                        <td><?php echo e($order->product_name); ?></td>
                                        <td><?php echo e($order->quantities); ?></td>
                                        <td><?php echo e($order->price); ?></td>
                                        <td class="align-middle">
                                            <?php echo Form::open([ 'method' => 'Delete', 'url' => ['/order', $order->id]]); ?>

                                            <?php echo Form::submit('Delete',['class'=>'btn btn-sm btn-danger']); ?>

                                            <?php echo Form::close(); ?>                                        
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>