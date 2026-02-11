<?php $__env->startSection('title'); ?>
    Fehler
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <h1 class="text-3xl">Fehler</h1>

    <div>
        <p>
            Das Startdatum muss vor dem Enddatum liegen!
        </p>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/booking/booking_dates_invalid.blade.php ENDPATH**/ ?>