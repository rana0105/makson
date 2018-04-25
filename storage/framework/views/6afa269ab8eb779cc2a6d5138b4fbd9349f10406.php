<?php $__env->startSection('style'); ?>
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="our-concern-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="our-editor-content overflow-fix">
              <h2>Annual Reports</h2>
            </div>
          </div>
          <div class="col-md-6">
            <select class="form-control year change-year" name="year" title=" " required="" style="margin-bottom: 2%;">
                <?php for($i = 2000; $i <= 2050; $i++): ?>
                    <option value="<?php echo e($i); ?>"
                    <?php if($i == date('Y')): ?>
                    selected=""
                    <?php endif; ?>
                    ><?php echo e($i); ?></option>
                <?php endfor; ?>
            </select>
          </div>
        </div>
      </div>
    </section>
    <section class="report-area overflow-fix">
      <div class="container">
        <div class="row right-me">
          <div class="col-md-5 col-lg-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-id="0" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Maksons Spinning Mills Limited</a></li>
              <li class="nav-item"><a class="nav-link" data-id="1" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Metro Spinning Limited</a></li>
            </ul>
          </div>
          <div class="col-md-7 col-lg-9">
            <div class="tab-content overflow-fix" id="myTabContent">
              <div class="tab-pane fade active" id="home">
                <?php if(sizeof($maksonReport)>0): ?>
                <?php $__currentLoopData = $maksonReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mreport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-single-item-report overflow-fix">
                  <div id="maksonM" class="row margin-o">
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-left overflow-fix">
                        <p><?php echo e($mreport->title); ?></p>
                      </div>
                    </div>
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-right overflow-fix d-flex justify-content-end">
                        <div class="icon-print">
                          <?php  $pdf = asset('/uploads/'. $mreport->file)  ?>
                          <a href="javascript:void(0)" onclick="printJS('<?php echo e($pdf); ?>')">
                            <i class="fas fa-print"></i>
                            <span>Print</span>
                          </a>
                        </div>
                        <div class="download-print"><a target="blank" href="<?php echo e(asset('/uploads/'. $mreport->file)); ?>"><i class="fas fa-download"></i><span>Download</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <h4>Data not found!</h4>
                <?php endif; ?>
              </div>
              <div class="tab-pane fade" id="profile">
                <?php if(sizeof($metroReport)>0): ?>
                <?php $__currentLoopData = $metroReport; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mereport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="tab-single-item-report overflow-fix">
                  <div id="metroM" class="row margin-o">
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-left overflow-fix">
                        <p><?php echo e($mereport->title); ?></p>
                      </div>
                    </div>
                    <div class="col-md-6 padding-o">
                      <div class="single-item-report-right overflow-fix d-flex justify-content-end">
                        <div class="icon-print">
                          <?php  $mpdf = asset('/uploads/'. $mereport->file)  ?>
                          <a href="javascript:void(0)" onclick="printJS('<?php echo e($mpdf); ?>')">
                            <i class="fas fa-print"></i>
                            <span>Print</span>
                          </a>
                        </div>
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
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('makson/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script>
  $(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.change-year').change(function(){
      var year = $('.year').val();
      var id = $('.nav-tabs .active').attr('data-id');
        $('#myTabContent .active').html('<img class="loading" src="/makson/images/loder.gif">');
        $.ajax({
            url:'<?php echo e(URL::to('/annualReportPost')); ?>',
            type: "POST",
            data:{ year: year, id:id,},
            success: function(data) {
              console.log(data);
            if (typeof data !== 'undefined' && data.length > 0) {
              var result = '';
              $.each(data, function(index, value){
                result += '<div class="tab-single-item-report overflow-fix">';
                result += '<div id="metroM" class="row margin-o">';
                result += '<div class="col-md-6 padding-o">';
                result += '<div class="single-item-report-left overflow-fix">';
                result += '<p> '+value.title+' </p>';
                result += '</div>';
                result += '</div>';
                result += '<div class="col-md-6 padding-o">';
                result += '<div class="single-item-report-right overflow-fix d-flex justify-content-end">';
                result += '<div class="icon-print">';
                result += '<a href="javascript:void(0)" onclick="printJS('+value.fileFullpath+')">';
                result += '<i class="fas fa-print"></i>';
                result += '<span>Print</span>';
                result += '</a>';
                result += '</div>';
                result += '<div class="download-print"><a target="blank" href="/uploads/'+value.file+'"><i class="fas fa-download"></i><span>Download</span></a></div>';
                result += '</div>';
                result += '</div>';
                result += '</div>';
                result += '</div>';
              });
                $('#myTabContent .active').html(result);
            }else{
                $('#myTabContent .active').text("No data found");
            }
          }
        });
    });
  });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>