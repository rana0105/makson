<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name='keywords' content='Site Title'>
    <meta name='author' content='Hussain Sumrat, itsumrat@gmail.com'>
    <meta name='designer' content='Hussain Sumrat'>
    <meta name='coverage' content='Worldwide'>
    <meta name='distribution' content='Global'>

    <title>Ajax Cable TV Billing Software</title>
    
    <?php echo Html::style('assets/vendor/bootstrap/dist/css/bootstrap.min.css'); ?>

    <?php echo Html::style('assets/vendor/font-awesome/css/font-awesome.min.css'); ?>

    <?php echo Html::style('assets/dist/css/style.min.css'); ?>

</head>
<body>
  <section id="login">
      <div class="container">
          <div class="row">
              <div class="col-md-6 hidden-sm-down">
                  <h1>Welcome to Ajax Cable TV Management Software</h1>
              </div>
              <div class="col-md-6 col-sm-12 align-self-center">
                  <div class="registration">
                      <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>

                          <div class="form-group<?php echo e($errors->has('type_network') ? ' has-error' : ''); ?>">
                              <label>Network Type:</label>
                              <input type="text" class="form-control" class="form-control" name="type_network" value="<?php echo e(old('type_network')); ?>" required autofocus>
                              <?php if($errors->has('type_network')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('type_network')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                              <label>Your Name:</label>
                              <input type="text" class="form-control" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
                              <?php if($errors->has('name')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('name')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                              <label>Username:</label>
                              <input type="text" class="form-control" class="form-control" name="username" value="<?php echo e(old('username')); ?>" required autofocus>
                              <?php if($errors->has('username')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('username')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                              <label>Your Email:</label>
                              <input type="email" class="form-control" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                              <?php if($errors->has('email')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('email')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                              <label>Phone No:</label>
                              <input type="text" class="form-control" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>
                              <?php if($errors->has('phone')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('phone')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                              <label>Password:</label>
                              <input type="password" class="form-control" class="form-control" name="password" value="<?php echo e(old('password')); ?>" required autofocus>
                              <?php if($errors->has('password')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('password')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                              <label>Confirmation Password:</label>
                              <input type="password" class="form-control" class="form-control" name="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>" required autofocus>
                              <?php if($errors->has('password_confirmation')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <div class="form-group<?php echo e($errors->has('license_key') ? ' has-error' : ''); ?>">
                              <label>License key:</label>
                              <input type="text" class="form-control" class="form-control" name="license_key" value="<?php echo e(old('license_key')); ?>" required autofocus>
                              <?php if($errors->has('license_key')): ?>
                                  <span class="help-block">
                                      <strong><?php echo e($errors->first('license_key')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                          <button type="submit" class="btn">register</button>
                          <a class="btn btn-link" href="<?php echo e(url('/')); ?>">
                              Back?
                          </a>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </section>
<?php echo Html::script('assets/vendor/jquery/dist/jquery.min.js'); ?>

<?php echo Html::script('assets/vendor/bootstrap/dist/js/bootstrap.min.js'); ?>

<?php echo Html::script('assets/dist/js/app.min.js'); ?>

</body>
</html>



