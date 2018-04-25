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
    <!-- reg-form-area-->
    <section class="ref-from-area overflow-fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <form class="ref-from overflow-fix" action="<?php echo e(route('registration')); ?>" method="POST">
              <?php echo e(csrf_field()); ?>

              <h2 class="reg-from-title">REGISTRATION</h2>
              <input id="autoIDgenerateMember" class="form-control" type="hidden" name="member_auto_id" required="">
              <div class="single-field-are overflow-fix">
                <p>Name</p>
                <input type="text" name="name" value="" required=""/>
              </div>
              <div class="single-field-are overflow-fix">
                <p>Age</p>
                <input type="number" name="age" value="" required=""/>
              </div>
              <div class="single-field-are overflow-fix">
                <p>Address</p>
                <input type="text" name="address" value="" required=""/>
              </div>
              <div class="single-field-are overflow-fix">
                <p>Profession</p>
                <input type="text" name="profession" value="" required=""/>
              </div>
              
              <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('phone') ? ' has-error' : ''); ?>">
                <p>Contact Number</p>
                <input type="tel" name="phone" value="<?php echo e(old('phone')); ?>" required=""/>
                <?php if($errors->has('phone')): ?>
                    <span class="help-block">
                        <strong class="error-message"><?php echo e($errors->first('phone')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div class="single-field-are overflow-fix form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <p>Email Address</p>
                <input type="email" name="email" value="<?php echo e(old('email')); ?>" required=""/>
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong class="error-message"><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              <div class="single-field-are overflow-fix">
                <p>Marital Status</p>
                <input type="text" name="marital_status" value="" required=""/>
              </div>
              <div class="single-field-are overflow-fix">
                <p>Currently Driven Vehicle</p>
                <input type="text" name="vehicle" value="" required=""/>
              </div>
              <a class="pop-up"> <img src="<?php echo e(asset('lameri/image/icon.png')); ?>"><span>by signing up you agree to the</span><span>Terms & Condction</span></a>
              <button type="submit">REGISTER</button>
              <div class="thank-you-area overflow-fix d-flex align-items-center">
      					<div class="overflow-fix">
      						<div class="dismis-thank-you overflow-fix">
      						  <p class="go-gome-button" href="#">x</p>
      						</div>
      						<div class="content-thanku overflow-fix">
      						  <h2>Terms and Conditions</h2>
      						  <ul>
      							<li>The participants are required to provide accurate, current and complete information when participating in the competition. The Provider may request a winner, before presenting the award or prize, to provide proof of their identity and residence information previously provided by the participant.</li>
      							<li>One entry per person will be considered for the campaign.</li>
      							<li>This promotion is open for all, excluding employees of LE MERIDIEN DHAKA and BMW - Executive Motors Ltd., Bangladesh or anyone professionally connected to this promotion.</li>
      							<li>Entries must be made by the participant and must not be made through agents or third parties.</li>
      							<li>LE MERIDIEN DHAKA and BMW - Executive Motors Ltd. reserves the right to publish the name and county of residence of the winner. The winner may be required to participate in the Promoter’s marketing and promotional activities and by entering the Promotion consents to such participation</li>
      							<li>Winners for the campaign will be randomly selected by LE MERIDIEN DHAKA and BMW - Executive Motors Ltd. The method of selecting winners will either be a lucky draw system or through assigning each contestant a number and then generating a random number using random number generation modules. (eg: google random number generator) </li>
      							<li>Contestants must reside in Dhaka during the duration of the competition.</li>
      							<li>The prize of the contest is not exchangeable for any other service or money</li>
      							<li>LE MERIDIEN DHAKA and BMW - Executive Motors Ltd. reserves the right at their absolute discretion to disqualify entries which they consider does not comply with these terms and conditions or any participant who they reasonably believe has interfered with the fair running of the Final Prize.</li>
      							<li>LE MERIDIEN DHAKA and BMW - Executive Motors Ltd. shall have the right where necessary to undertake all such action as is reasonable to protect themselves against fraudulent or invalid claims including without limitation to require further verification as to the identity age and other relevant details of a participant.</li>
      						  </ul>
      						</div>
      					</div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End reg-form-area-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  function autoID()
  {
    var dcn = 'LMB';
    var auto = <?php echo e($autoid->autoid); ?>+1;
    var str = "" + auto;
    var pad = "00000";
    var ans = pad.substring(0, pad.length - str.length) + str;
    autoIDgenerate = dcn+"-"+ans;
    document.getElementById("autoIDgenerateMember").value = autoIDgenerate;
  }
  autoID();
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>