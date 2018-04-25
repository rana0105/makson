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
                        <span class="help-block">
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

<?php echo $__env->make('frontend.layouts.main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>