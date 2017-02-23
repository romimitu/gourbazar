<!DOCTYPE html>
<html lang="en">
<?php echo $__env->make('public.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body> 
	<?php echo $__env->make('public.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('public.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	<?php echo $__env->yieldContent('script'); ?>
</body>
</html>
