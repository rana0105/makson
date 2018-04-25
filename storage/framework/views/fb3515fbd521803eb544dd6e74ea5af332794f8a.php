<?php $__env->startSection('content'); ?>
<!-- logo area-->
    <header class="main-logo-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-logo overflow-fix"><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('lameri/image/logo.png')); ?>" alt=""></a></div>
          </div>
        </div>
      </div>
    </header>
    <!-- End logo area-->
    <div class="container">
      <div class="row">
        <div class="col-md-8 com-md-offset-2">
          <?php if(session('success')): ?>
            <div class="alert alert-success">
              <?php echo e(session('success')); ?>

            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>

<section class="ref-from-area overflow-fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            	 <div class="align-items-center overflow-fix">
	                  <p style="color:#fff">Thank you for participating. Stay tuned to the LE MERIDIEN DHAKA Facebook page where we will be announcing the winners on 12 February. The below is the complete note that is made out of all the correct answers</p><br>
	                  <p style="color:#fff">“Many a times in life, we can end up taking what’s closest to our hearts for granted. A relationship truly unique. A bond that is unbreakable. Some bonds are meant to be celebrated. With you, life is more exciting, full of happiness. It’s truly remarkable to appreciate and be grateful for how you make me feel that way. Every day is a new day to learn something new about you and always be reminded of how amazing you are. A relationship that is meant for each other. That kind of a relationship that brings out the best in each other. A match made in heaven and a match here on Earth.”</p>
	                  <div style="text-align: center; margin-top: 3%;"><a style="color:red;" class="go-gome-button" href="<?php echo e(url('/')); ?>">GO BACK</a></div>
              </div>
            </div>
        </div>
 	</div>	
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>