<?php $__env->startSection('title'); ?>
GOUR BAZAR | BUY MANGO ONLINE
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main class="main-content" role="main">
        <div class="page-header" style="background-image: url(/frontend/images/service-banner.jpg)">
            <div class="page-header-container hover-target">
                <div class="page-header-content underline-animation">
                    <h2>আমাদের সেবাসমূহ</h2>
                </div>
            </div>
        </div>
        <div class="container page-margin">
            <div class="col-sm-10 col-sm-offset-1">
                <blockquote>
                    <p class="p1" style="text-align: center;">চাঁপাইনবাবগঞ্জ থেকে সমগ্র বাংলাদেশ</p>
                </blockquote>
                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-sm-4">
                    <div class="article-spacing">
                        <a href="<?php echo e(url('our-service', [$service->id, str_slug($service->title, '-')] )); ?>">
                          <div class="blog-index-image" style="background-image: url('/<?php echo e($service->image); ?>');"></div>
                        </a>
                        <div class="blog-index-copy">
                            <h2><?php echo e($service->title); ?></h2>
                            <a href="<?php echo e(url('our-service', [$service->id, str_slug($service->title, '-')] )); ?>" class="text-center">READ MORE</a>
                        </div>                    
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('public.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>