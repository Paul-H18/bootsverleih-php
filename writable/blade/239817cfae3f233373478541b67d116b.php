

<?php $__env->startSection('title'); ?>
    Buchung fehlgeschlagen
<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <h1 class="text-3xl text-center">Buchung fehlgeschlagen</h1>

    <div class="text-lg m-12 text-center">
        <p>
            Leider konnte die Buchung nicht abgeschlossen werden, da der Anleger bereits belegt ist.
        </p>

    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/booking/pierInactive.blade.php ENDPATH**/ ?>