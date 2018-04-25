<?php $__env->startSection('content'); ?>
<section id="profile">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-sm-12">
                	<form action="<?php echo e(route('profiles.update', Auth::user()->id)); ?>" method="POST" enctype="multipart/form-data" files="true">
                		<?php echo e(csrf_field()); ?>

                		<div class="profile-form-title">
                			<h6>Profile Information</h6>
                			<button id="uploadButton" class="btn btn-primary" style="margin-top: 2px">Save changes</button>
                		</div>
                		<div id='profile-upload' class="profile col-3">
	                        <div class="hvr-profile-img"><input type="file" name="logo" id='getval'  class="upload w180 extimage" title="Dimensions 180 X 180" id="imag"></div>
	                        <i class="fa fa-camera"></i>
	                        <p><img src="<?php echo e(asset('images/resize_images')); ?>/<?php echo e($admin->image); ?>" alt="" width="140px" height="130px"></p>
	                    </div>
	                    <p style="display: inline-block; position: absolute;top: 25%;right: 0;">License Key: l;'asl;df'as'f;'sdf</p>
	                    <div class="form-group row">
						  	<label class="col-3 col-form-label">Network name:</label>
						  	<div class="col-9">
						    	<input class="form-control" name="type_network" type="text" value="<?php echo e($admin->type_network); ?>">
						  	</div>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">Name:</label>
						  	<div class="col-9">
						    	<input class="form-control" name="name" type="text" value="<?php echo e($admin->name); ?>">
						  	</div>
						</div>
						<div class="form-group<?php echo e($errors->has('customer_auto_id') ? ' has-error' : ''); ?> row">
						  	<label class="col-3 col-form-label">Email:</label>
						  	<div class="col-9">
						    	<input class="form-control" name="email" type="email" value="<?php echo e($admin->email); ?>" required="">
						    	<?php if($errors->has('email')): ?>
	                                <span class="help-block">
	                                    <strong><?php echo e($errors->first('email')); ?></strong>
	                                </span>
	                            <?php endif; ?>
						  	</div>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">Phone:</label>
						  	<div class="col-9">
						    	<input class="form-control" name="phone_no" type="tel" value="<?php echo e($admin->phone); ?>">
						  	</div>
						</div>
						<div class="form-group<?php echo e($errors->has('customer_auto_id') ? ' has-error' : ''); ?> row">
						  	<label class="col-3 col-form-label">user name:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="text" name="username" value="<?php echo e(isset($admin->username) ? $admin->username : old('username')); ?>" required="">
						  	</div>
						  	<?php if($errors->has('username')): ?>
                                <span class="help-block">
                                    <strong><?php echo e($errors->first('username')); ?></strong>
                                </span>
                            <?php endif; ?>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">Password:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="password" value="123456">
						  	</div>
						</div>
                	</form>
                </div>
            </div>
        </div>
    </section> 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
	$('INPUT[type="file"]').change(function () {
    var ext = this.value.match(/\.(.+)$/)[1];
    switch (ext) {
        case 'jpg':
        case 'jpeg':
        case 'png':
        case 'gif':
            $('#uploadButton').attr('disabled', false);
            break;
        default:
             swal({
        title             : "Not allowed file extension",
        text              : "Support only lowercase extension & Image !",
        type              : "warning",
        showCancelButton  : true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText : "Yes, Check!",
        cancelButtonText  : "No, Cancel!",
        closeOnConfirm    : false,
        closeOnCancel     : false
    });
            this.value = '';
    }
});
</script> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>