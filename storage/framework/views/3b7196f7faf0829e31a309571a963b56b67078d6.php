<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
       <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Maksons, Metro, Spinning, Bangladesh, Garments, Dhaka">
    <meta name="description" content="Official website of Maksons Group, Bangladesh">
        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('favicon.png')); ?>"/>
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('favicon.png')); ?>"/>
    <title>Maksons Group, Bangladesh | Garments, Fashions, Spinning, Textiles, Pharmaceutical</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Poppins:400,500,600,700" rel="stylesheet">

    <?php echo $__env->make('frontend.partial.style1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body class="body-area">
    <?php echo $__env->make('frontend.partial.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <a id="return-to-top" href="javascript:" style="display:none;"><i class="fas fa-arrow-up"></i></a>
    <?php echo $__env->make('frontend.partial.javascript1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
  </body>
</html>