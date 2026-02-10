<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?> | Bootsverleih</title>
    <link rel="stylesheet" href="<?php echo e(base_url('build/style.css')); ?>">


</head>
<body class="bg-gray-900 text-gray-100 ">
<?php if(!url_is('login') && !url_is('registration')): ?>
    <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php echo $__env->yieldContent('body'); ?>


<script>
    window.backend = {
        token: '<?php echo e(csrf_token()); ?>',
        hash: '<?php echo e(csrf_hash()); ?>',
        routes: {
            registration: {
                index: '<?php echo e(route_to('registration')); ?>',
                register: '<?php echo e(route_to('registration.register')); ?>',
            },
            login: {
                index: '<?php echo e(route_to('login')); ?>',
                login: '<?php echo e(route_to('login.login')); ?>',
            },
            booking: {
                pay: '<?php echo e(route_to('booking.pay')); ?>'
            }
        }
    }
</script>
<script type="module" src="<?php echo e(base_url('build/navigation.js')); ?>"></script>
<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH /var/www/html/app/Views/layout/master.blade.php ENDPATH**/ ?>