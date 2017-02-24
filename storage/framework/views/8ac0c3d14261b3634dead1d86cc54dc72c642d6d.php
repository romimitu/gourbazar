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
                    <h1>GourBazar Team Member</h1>
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
                                <span class="caption-subject font-dark sbold uppercase">Team Member</span>
                            </div>
                            <div class="actions">
                                <div class="btn-group btn-group-devided">
                                    <a href="/member/create"><label class="btn btn-transparent dark btn-outline btn-circle btn-sm">Add New Member</label></a>
                                </div>
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
                                        <th class="col-md-2">name</th>
                                        <th class="col-md-2">description</th>
                                        <th class="col-md-2">image</th>
                                        <th class="col-md-1">E-mail</th>
                                        <th class="col-md-1">Facebook</th>
                                        <th class="col-md-1">Twitter</th>
                                        <th class="col-md-2" colspan="2">Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php $__currentLoopData = $members; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $member): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr> 
                                        <td><?php echo e($member->id); ?></td>
                                        <td><?php echo e($member->name); ?></td>
                                        <td><?php echo e($member->description); ?></td>
                                        <td><img src="/<?php echo e($member->image); ?>" class="img-responsive" alt=""></td>
                                        <td><?php echo e($member->email); ?></td>
                                        <td><?php echo e($member->facebook); ?></td>
                                        <td><?php echo e($member->twitter); ?></td>
                                        <td class="align-middle">
                                            <a class="btn btn-sm btn-primary" href="<?php echo e(url('/member/'.$member->id.'/edit')); ?>">Edit</a>
                                        </td>
                                        <td class="align-middle">
                                            <?php echo Form::open([ 'method' => 'Delete', 'url' => ['/member', $member->id]]); ?>

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