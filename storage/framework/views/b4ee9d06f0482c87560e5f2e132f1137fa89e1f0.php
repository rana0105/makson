

<?php $__env->startSection('content'); ?>
    <section class="ref-from-area overflow-fix" style="margin-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" method="POST" action="<?php echo e(route('password.request')); ?>">
                            <?php echo e(csrf_field()); ?>


                            <input type="hidden" name="token" value="<?php echo e($token); ?>">

                            <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                <p>Email</p>
                                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" required autofocus>

                                    <?php if($errors->has('email')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('email')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>

                            <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <p>Password</p>
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>

                            <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                                <p>Password Confirm</p>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                                    <?php if($errors->has('password_confirmation')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                            </div>

                            <button type="submit">Reset password</button>
                        </form>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>