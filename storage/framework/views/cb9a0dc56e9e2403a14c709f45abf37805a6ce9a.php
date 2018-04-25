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
    <section class="full-hight-area home-banner-area overflow-fix">
      <div class="full-hight-table overflow-fix">
        <div class="full-hight-tablecell">
          <div class="banner-area-content-area overflow-fix" style="background:url(<?php echo e(asset('lameri/image/car-bg.jpg')); ?>);">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="banner-area overflow-fix">
                    <div class="banner-left-content overflow-fix"><img src="<?php echo e(asset('lameri/image/car-1.jpg')); ?>"></div>
                    <div class="banner-right-content overflow-fix"><img src="<?php echo e(asset('lameri/image/car-2.jpg')); ?>"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="banner-bottom-area overflow-fix">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <div class="footer-area overflow-fix">
                    <div class="footer-title overflow-fix">
                      <h2>ONCE UPON A<span>Valentine’s</span></h2>
                    </div>
                    <div class="footer-content overflow-fix">
                      <p>CRAFT A STORY LIKE NO OTHER</p>
                    </div>
                    <div class="footer-button"><a href="<?php echo e(url('registration')); ?>">ENTER COMPETITION</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>