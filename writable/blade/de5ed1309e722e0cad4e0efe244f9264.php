<?php $__env->startSection('title'); ?>
<?php echo e($title); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <h1>Buchung</h1>
    <div id="Buchung" class="w-full h-full">

    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/booking/index.blade.php ENDPATH**/ ?>