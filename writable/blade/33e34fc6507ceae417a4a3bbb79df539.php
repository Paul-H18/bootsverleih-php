

<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl text-center mb-8"><?php echo e($title); ?></h1>

        <?php if(empty($bookings)): ?>
            <div class="text-center py-12">
                <p class="text-gray-400 text-lg">Sie haben noch keine Buchungen.</p>
            </div>
        <?php else: ?>
            <div class="flex flex-col items-center gap-6">
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-full max-w-2xl bg-emerald-500 rounded-3xl p-6">
                        <div class="text-white">
                            <p class="text-lg font-semibold mb-2">
                                Buchung vom <?php echo e($booking['created_at_formatted']); ?> - Nr. <?php echo e($booking['id']); ?>

                            </p>
                            <p class="mb-1">
                                Anleger: <?php echo e($booking['pier']['name']); ?>

                            </p>
                            <p class="mb-1">
                                Ab: <?php echo e($booking['starting_at_formatted']); ?>

                            </p>
                            <p class="mb-1">
                                Bis: <?php echo e($booking['ending_at_formatted']); ?>

                            </p>
                            <p>
                                Dauer: <?php echo e($booking['duration_days']); ?> Tag(e)
                            </p>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/account/bookingHistory.blade.php ENDPATH**/ ?>