<?php $__env->startSection('title'); ?>
    Login
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <div id="login"></div>

    <script type="module" src="<?php echo e(base_url('build/login.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/auth/login.blade.php ENDPATH**/ ?>