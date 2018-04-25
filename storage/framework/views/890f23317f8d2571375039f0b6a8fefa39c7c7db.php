<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>Le Meridien</title>
    <?php echo $__env->make('frontend.partial.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('style'); ?>
  </head>
  <body class="body-area reg-form-page">
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('frontend.partial.javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>
  </body>
</html>