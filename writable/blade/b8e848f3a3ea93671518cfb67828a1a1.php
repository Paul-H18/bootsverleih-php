<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?> | Bootsverleih</title>
    <link rel="stylesheet" href="<?php echo e(base_url('build/style.css')); ?>">


</head>
<body class="bg-gray-900 text-gray-100 ">

<?php echo $__env->yieldContent('body'); ?>


<script>
    window.backend = {
        token: '<?php echo e(csrf_token()); ?>',
        hash: '<?php echo e(csrf_hash()); ?>',
        routes: {
            registration: {
                register: '<?php echo e(route_to('registration.register')); ?>',
            },
            login: {
                login: '<?php echo e(route_to('login.login')); ?>',
            },
        }
    }
</script>

<?php echo $__env->yieldContent('scripts'); ?>

</body>
</html><?php /**PATH /var/www/html/app/Views/layout/master.blade.php ENDPATH**/ ?>