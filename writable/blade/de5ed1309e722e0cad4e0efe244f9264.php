<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <div id="booking" class="w-full h-full" data-items='<?php echo json_encode($piers, 15, 512) ?>' data-user='<?php echo json_encode($user, 15, 512) ?>'></div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script type="module" src="<?php echo e(base_url('build/booking.js')); ?>"></script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/booking/index.blade.php ENDPATH**/ ?>