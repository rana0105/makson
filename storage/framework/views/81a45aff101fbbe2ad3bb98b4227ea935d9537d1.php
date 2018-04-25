<?php $__env->startSection('content'); ?>
    <header class="main-logo-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-logo overflow-fix"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('lameri/image/logo.png')); ?>" alt=""></a></div>
          </div>
        </div>
      </div>
    </header>
    <section class="ref-from-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" method="POST" action="<?php echo e(route('login')); ?>">
            	<input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
              <h2 class="reg-from-title">LOGIN</h2>
              <div class="single-field-are overflow-fix form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <p>Email</p>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus />
					<?php if($errors->has('email')): ?>
	                    <span class="help-block">
	                        <strong><?php echo e($errors->first('email')); ?></strong>
	                    </span>
	                <?php endif; ?>
              </div>
              <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <p>Password</p>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required/>
					       <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <button type="submit">Login</button>
              <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                  Forgot Your Password?
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>