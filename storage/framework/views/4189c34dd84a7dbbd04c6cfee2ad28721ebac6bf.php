<!DOCTYPE html>
<html lang="en">    
    <?php echo $__env->make('admin.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">    
        <?php echo $__env->make('admin.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
        <div class="page-container">
            <?php echo $__env->make('admin.layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
        <!-- END CONTAINER -->
       <?php echo $__env->make('admin.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <?php echo $__env->yieldContent('script'); ?>
    </body>
</html>