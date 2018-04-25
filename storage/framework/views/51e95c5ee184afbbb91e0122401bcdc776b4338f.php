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
                      <form method="POST" action="<?php echo e(route('login')); ?>">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                          <label>Type email/phone no:</label>
                          <input type="text" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                          <?php if($errors->has('password')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('password')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                      <div class="form-group <?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                          <label>Type password:</label>
                          <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                          <?php if($errors->has('password')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('password')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                      <button type="submit" class="btn">login</button>
                       <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                          Forgot Your Password?
                      </a>
                      <h5>Don't have an account? Then register first, <a href="<?php echo e(url('register')); ?>">Register me</a></h5>
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