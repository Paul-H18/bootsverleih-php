

<?php $__env->startSection('title'); ?>
    Registrierung
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <div id="registration" class="w-full h-full">

    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script type="module" src="<?php echo e(base_url('build/registration.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/auth/registration/registration.blade.php ENDPATH**/ ?>