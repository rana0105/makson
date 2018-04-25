<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keywords' content='Ajax Cable TV Network'>
    <meta name='author' content='Hussain Sumrat, itsumrat@gmail.com'>
    <meta name='designer' content='Hussain Sumrat'>
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>TV Cable Network</title>

    <?php echo $__env->make('partial.style', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    

    <style>
        .result-set { margin-top: 1em }
    </style>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<body>
    <div id="app">
        <?php echo $__env->make('partial.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="container">
            <div id="flash-msg">
                <?php echo $__env->make('flash::message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
    <?php echo $__env->make('partial.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partial.javascript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>
