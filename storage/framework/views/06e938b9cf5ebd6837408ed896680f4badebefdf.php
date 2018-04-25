<?php $__env->startSection('content'); ?>
    <section class="page-title-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="page-title overflow-fix">
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="con-slider-main-area overflow-fix">
      <div class="con-slider-main overflow-fix">
        <div class="con-slider owl-carousel owl-theme overflow-fix">
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-1.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-2.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-3.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-1.png')); ?>"></div>
          <div class="con-slider-single overflow-fix"><img src="<?php echo e(asset('makson/images/kon-2.png')); ?>"></div>
        </div>
      </div>
    </section>
    <section class="kontact-text-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="kontact-text-single overflow-fix">
              <h2 class="title">Corporate Office</h2>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Location</h3>
                  <p>House # 17, Road # 6, Sector # 1,Uttara Model Town, Dhaka 1230, Bangladesh</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Phone</h3>
                  <p>+8802 8933612, 8933613, 8933767, 8933739, 8933740</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-print"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Fax</h3>
                  <p>+8802 8933656</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-envelope"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Email</h3>
                  <p>info@maksonsgroup.com.bd</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kontact-text-single overflow-fix">
              <h2 class="title">Registered Office</h2>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Location</h3>
                  <p>Dilkusha Centre, 28 Dilkusha C/A, Suite # 401, Dhaka 1000, Bangladesh</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-phone"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Phone</h3>
                  <p>+880 2 7168613-4, 9559349, 9566470, 9564543</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-print"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Fax</h3>
                  <p>+880 2 9564503</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kontact-text-single overflow-fix">
              <h2 class="title">Investor’s Relation Department</h2>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Noor Mohammad, DGM</h3>
                  <p><span>Email:</span>noor@maksonsgroup.com.bd</p>
                </div>
              </div>
              <div class="kontact-text-content overflow-fix d-flex justify-content-start">
                <div class="icon"><i class="fas fa-user"></i></div>
                <div class="conetnt">
                  <h3 class="con-tit">Mrs. Farhana Haque, Sr. Manager </h3>
                  <p><span>Email:</span>noor@maksonsgroup.com.bd</p>
                  <p><span>Tel:</span>+880 2 8933612, 8933613, 8933767, 8933739, 8933740</p>
                  <p><span>Fax:</span> +880 2 8933656</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="concat-page-area-main overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <div class="concat-right-area-new overflow-fix">
              <!-- .thanjks-u.overflow-fix.d-flex.justify-content-center.align-items-centerh2 Your message have <br> been sent successfully !
              -->
              <h2>Send Message</h2>
              <form action="<?php echo e(route('contact.post')); ?>" method="POST" class="form-box-area overflow-fix">
                <?php echo e(csrf_field()); ?>

                  <?php if(session('success')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert"">
                        <?php echo e(session('success')); ?>

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                  <?php endif; ?>
                  <?php if(session('warning')): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert"">
                      <?php echo e(session('warning')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  <?php if(session('error')): ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert"">
                      <?php echo e(session('error')); ?>

                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                <div class="form-group">
                  <input name="name" class="form-control"  type="text" required="required" placeholder="Name">
                  <!-- label.form-label Subject-->
                </div>
                <div class="form-group">
                  <input name="email" class="form-control" required="required" type="email" placeholder="Email">
                  <!-- label.form-label Email-->
                </div>
                <div class="form-box-single overflow-fix">
                  <textarea name="message" placeholder="Say Something"></textarea>
                </div>
                <button class="submit-button" type="submit" value="Submit"><span>Submit</span>
                  <!--i.fas.fa-circle-notch.fa-spin-->
                  <!--i.fas.fa-check-->
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-7">
            <div class="map-right-area overflow-fix">
              <div class="embed-responsive embed-responsive-21by9">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.765473045347!2d90.39529061473003!3d23.862460384534227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c42141255fdf%3A0xb8deba2758a65ec4!2s17+Road-6%2C+Dhaka+1230!5e0!3m2!1sen!2sbd!4v1522477559556"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer class="subpage-footer-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="border-full-wdith overflow-fix"></div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer-copy overflow-fix">
              <p>Maksons Group &copy 2018</p>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="subpage-footer overflow-fix d-flex">
              <h2>Follow us on</h2>
              <ul>
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>