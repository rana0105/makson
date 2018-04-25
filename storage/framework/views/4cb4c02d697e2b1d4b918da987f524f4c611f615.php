<?php $__env->startSection('content'); ?>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-concern-banner overflow-fix"><img src="<?php echo e(asset('makson/images/job-p.png')); ?>"></div>
            <!--#circle-->
          </div>
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix">
              <p>MAKSONS GROUP is a success story in National arena. We are proud of what we have achieved so far and planning to attain in years to come. Would you like to be a part of the innovation process that is taking place in the industry that has given us all our success so far? Surf through our employee database and experience our diverse workforce.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix"><br>
              

              <?php echo $jobpost->description; ?>

            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-apply-post-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-apply-post overflow-fix">
              <h2>Apply Now</h2>
            </div>
            <form action="<?php echo e(route('job.apply')); ?>" method="POST" enctype="multipart/form-data" file="true" class="apply-job-area-form overflow-fix">
              <?php echo e(csrf_field()); ?>

              <?php if(session('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert"">
                  <?php echo e(session('success')); ?>

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
              <input type="hidden" name="job_id" value="<?php echo e($jobpost->id); ?>">
              <div class="single-input">
                <input name="name" type="name" placeholder="Full Name" required="">
              </div>
              <div class="single-input">
                <input name="email" type="email" placeholder="Email" required="">
              </div>
              <div class="single-input">
                <input class="opacity-o" type="file" name="file" id="file-upload"  required="">
                <?php if($errors->has('file')): ?>
                    <span class="help-block text-danger">
                        <strong><?php echo e($errors->first('file')); ?></strong>
                    </span>
                <?php endif; ?>
                <div class="icon-test-ip"><i class="fas fa-upload"></i><span>Attach Your CV</span></div>
                <div id="file-upload-filename"></div>
              </div>
              <div class="single-input">
                <button type="submit">Sent Application</button>
              </div>
            </form>
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

<?php $__env->startSection('style'); ?>
<style>
  span.help-block.text-danger {
    position: relative;
    z-index: 9;
    margin-top: 16px;
    display: block;
    width: 100%;
    background: #fff1f1;
    text-align: center;
    color: red;
    padding-top: 10px;
}
div#file-upload-filename {
    color: #155d29;
    position: absolute;
    font-size: 15px;
    left: 15px;
    font-weight: 600;
    top: 100%;
    margin-top: 5px;
    margin-bottom: 5px;
}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  var input = document.getElementById( 'file-upload' );
  var infoArea = document.getElementById( 'file-upload-filename' );
  input.addEventListener( 'change', showFileName );
  function showFileName( event ) {
    // the change event gives us the input it occurred in 
    var input = event.srcElement;
    // the input has an array of files in the `files` property, each one has a name that you can use. We're just using the name here.
    var fileName = input.files[0].name;
    // use fileName however fits your app best, i.e. add it into a div
    infoArea.textContent = 'File name: ' + fileName;
  }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>