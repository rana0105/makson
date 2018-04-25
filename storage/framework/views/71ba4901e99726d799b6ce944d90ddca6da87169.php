<?php $__env->startSection('content'); ?>
<section id="profile">
        <div class="container">
            <div class="row">
                <div class="offset-md-2 col-md-8 col-sm-12">
                	<form>
                		<div class="profile-form-title">
                			<h6>Profile Information</h6>
                			<a href="#" class="btn">save changes</a>
                		</div>
                		<div id='profile-upload' class="profile col-3">
	                        <div class="hvr-profile-img"><input type="file" name="logo" id='getval'  class="upload w180" title="Dimensions 180 X 180" id="imag"></div>
	                        <i class="fa fa-camera"></i>
	                    </div>
	                    <p style="display: inline-block; position: absolute;top: 25%;right: 0;">License Key: l;'asl;df'as'f;'sdf</p>
	                    <div class="form-group row">
						  	<label class="col-3 col-form-label">Network name:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="text" value="Fiber Cable">
						  	</div>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">Name:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="text" value="Morshed Khan Rana">
						  	</div>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">Email:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="email" value="ra.ranacse@gmail.com">
						  	</div>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">Phone:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="tel" value="126546899">
						  	</div>
						</div>
						<div class="form-group row">
						  	<label class="col-3 col-form-label">user name:</label>
						  	<div class="col-9">
						    	<input class="form-control" type="text" value="rana0105">
						  	</div>
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
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>