<?php $__env->startSection('content'); ?>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="our-editor-content overflow-fix">
              <h2>Annual Reports</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="report-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-lg-3 tab-hide-d">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Maksons Spinning Mills Limited</a></li>
              <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Metro Spinning Limited</a></li>
            </ul>
          </div>
          <div class="col-md-7 col-lg-9">
            <div class="tab-content overflow-fix" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php if(sizeof($maksonReport)>0): ?>
                <?php $__currentLoopData = $maksonReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mreport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-single-item-report overflow-fix">
                  <div class="row margin-o">
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-left overflow-fix">
                        <p><?php echo e($mreport->title); ?></p>
                      </div>
                    </div>
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-right overflow-fix d-flex justify-content-end">
                        <div class="icon-print"><a target="blank" href="<?php echo e(asset('/storage/'. $mreport->file)); ?>"><i class="fas fa-print"></i><span>Print</span></a></div>
                        <div class="download-print"><a target="blank" href="<?php echo e(asset('/storage/'. $mreport->file)); ?>"><i class="fas fa-download"></i><span>Download</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <h4>Data not found!</h4>
                <?php endif; ?>
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <?php if(sizeof($metroReport)>0): ?>
                <?php $__currentLoopData = $metroReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mereport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-single-item-report overflow-fix">
                  <div class="row margin-o">
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-left overflow-fix">
                        <p><?php echo e($mereport->title); ?></p>
                      </div>
                    </div>
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-right overflow-fix d-flex justify-content-end">
                        <div class="icon-print"><a target="blank" href="<?php echo e(asset('/storage/'. $mereport->file)); ?>"><i class="fas fa-print"></i><span>Print</span></a></div>
                        <div class="download-print"><a target="blank" href="<?php echo e(asset('/storage/'. $mereport->file)); ?>"><i class="fas fa-download"></i><span>Download</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <h4>Data not found!</h4>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-md-5 col-lg-3 tab-hide-m">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Maksons Spinning Mills Limited</a></li>
              <li class="nav-item"><a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Metro Spinning Limited</a></li>
            </ul>
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