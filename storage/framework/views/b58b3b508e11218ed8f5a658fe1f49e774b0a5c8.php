<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Macksons</title>
     <?php echo $__env->make('backend.partial.admin-style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
     <?php echo $__env->yieldContent('style'); ?>

</head>
<body id="dashboard-body">
    <?php echo $__env->make('backend.partial.admin-sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('backend.partial.admin-navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
       <div id="flash-msg">
                <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    <?php echo $__env->yieldContent('content'); ?>
       
    <?php echo $__env->make('backend.partial.admin-footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- Scripts -->
    <?php echo $__env->make('backend.partial.admin-javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
</body>
</html>