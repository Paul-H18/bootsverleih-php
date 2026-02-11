<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('body'); ?>
    <h1 class="text-3xl text-center"><?php echo e($title); ?></h1>

    <div class="text-lg text-center">
        <p>Ihre Buchung war erfolgreich!</p>
        <br>
        <p>
            Wir erwarten Sie am <?php echo e($booking['starting_at']); ?> bei uns in Plau am See.
            <br>
            Ihr gebuchter Anleger "<?php echo e($pier['name']); ?>" steht ab 12 uhr für Sie zur Verfügung.
        </p>
        <p>
            <?php if($booking['payment_method'] === 'cash'): ?>
                Bitte denken Sie daran den Betrag von über <?php echo e($pier['price']); ?>€ am Anreisetag vorne am Schalter zu bezahlen.
            <?php else: ?>
                Sie erhalten in kürze Ihre Zahlungsbestätigung per E-Mail. Zeigen Sie diese bitte am Anreisetag vorne am Schalter vor.
            <?php endif; ?>
            <br>
        </p>





    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/app/Views/pages/booking/orderSuccess.blade.php ENDPATH**/ ?>