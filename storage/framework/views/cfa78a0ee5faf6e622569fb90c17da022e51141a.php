<?php $__env->startSection('content'); ?>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix">
              <h2>Metro Spinning Ltd. Shareholding Positions:</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle"><span>26 %</span></div>
              <p>Sponsor</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle1"><span>14 %</span></div>
              <p>Financial Institution</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle2"><span>60 %</span></div>
              <p>General Public</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle3"><span>100 %</span></div>
              <p>Total</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-concern-area overflow-fix circle-area-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="our-editor-content overflow-fix">
              <h2>Maksons Spinning Mills Ltd. Shareholding Positions:</h2>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle4"><span>26.23 %</span></div>
              <p>Sponsor </p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle5"><span>13%</span></div>
              <p>Financial Institution</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle6"><span>60.77%</span></div>
              <p>General Public</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="single-scre-area overflow-fix">
              <div class="circle-areaass" id="circle7"><span>100%</span></div>
              <p>Total</p>
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
  <?php $__env->startSection('sytle'); ?>
  <?php $__env->stopSection(); ?>
  <?php $__env->startSection('script'); ?>
  <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
  <script>
    $(document).ready(function() {
      $('#circle').circleProgress({
    value: 0.26,
    size: 200,
    fill: {
      gradient: ["#e34f26"]
    }
    });
  $('#circle1').circleProgress({
    value: 0.14,
    size: 200,
    fill: {
      gradient: ["#0d84ce"]
    }
  });
  $('#circle2').circleProgress({
    value: 0.60,
    size: 200,
    fill: {
      gradient: ["#f0e040"]
    }
    });
    $('#circle3').circleProgress({
    value: 100,
    size: 200,
    fill: {
      gradient: ["#83cd29"]
    }
    });
    $('#circle4').circleProgress({
    value: 0.26,
    size: 200,
    fill: {
      gradient: ["#e34f26"]
    }
    });
  $('#circle5').circleProgress({
    value: 0.13,
    size: 200,
    fill: {
      gradient: ["#0d84ce"]
    }
  });
  $('#circle6').circleProgress({
    value: 0.60,
    size: 200,
    fill: {
      gradient: ["#f0e040"]
    }
    });
    $('#circle7').circleProgress({
    value: 1,
    size: 200,
    fill: {
      gradient: ["#83cd29"]
    }
    });
    });
  </script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.main1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>