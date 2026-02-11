<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <h1 class="text-3xl text-center mb-3"><?php echo e($title); ?></h1>

    <div class="flex flex-col items-center gap-10 m-4">
        <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="flex flex-col gap-2 w-1/3 h-56 bg-green-500">
                <div>
                    Buchung vom: <?php echo e($booking['created_at']); ?> - Nr.: <?php echo e($booking['id']); ?>

                </div>
                <div>
                    Anleger: <?php echo e($piers[$index]['name']); ?>

                </div>
                <div>
                    Ab: <?php echo e($booking['starting_at']); ?>

                </div>
                <div>
                    Bis: <?php echo e($booking['ending_at']); ?>

                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/account/bookingHistory.blade.php ENDPATH**/ ?>