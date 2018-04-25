<?php $__env->startSection('content'); ?>
    <section class="ref-from-area overflow-fix" style="margin-top: 100px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" method="POST" action="<?php echo e(route('password.email')); ?>">
                <input name="_token" type="hidden" value="<?php echo e(csrf_token()); ?>"/>
                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>
              <h2 class="reg-from-title">Reset Password</h2>
              <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <p>Email</p>
                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required="" autofocus="" />
                    <?php if($errors->has('email')): ?>
                        <span class="help-block alert-message-style">
                            <strong><?php echo e($errors->first('email')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <button type="submit">Send to Email</button>
            </form>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>