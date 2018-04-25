

<?php $__env->startSection('content'); ?>
<section class="ref-from-area overflow-fix" style="margin-top: 100px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form class="ref-from overflow-fix" method="POST" action="<?php echo e(route('register')); ?>">
          <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
          <h2 class="reg-from-title">REGISTRATION</h2>
          <input type="hidden" name="link" value="<?php echo e(str_random(30)); ?>">
          <div class="single-field-are overflow-fix form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <p>Name</p>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name......" required autofocus />
              <?php if($errors->has('name')): ?>
                  <span class="help-block alert-message-style">
                      <strong><?php echo e($errors->first('name')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
          <div class="single-field-are overflow-fix form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <p>Email</p>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>" required autofocus />
              <?php if($errors->has('email')): ?>
                  <span class="help-block alert-message-style">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                  </span>
              <?php endif; ?>
          </div>
          <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <p>Password</p>
            <input type="password" id="password" name="password" class="form-control" value="<?php echo e(old('password')); ?>" required/>
             <?php if($errors->has('password')): ?>
                <span class="help-block alert-message-style">
                    <strong><?php echo e($errors->first('password')); ?></strong>
                </span>
            <?php endif; ?>
          </div>
          <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
            <p>Password</p>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Password" required/>
             <?php if($errors->has('password_confirmation')): ?>
                <span class="help-block alert-message-style">
                    <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                </span>
            <?php endif; ?>
          </div>
          <button type="submit">Registration</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
	

<?php echo $__env->make('frontend.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>