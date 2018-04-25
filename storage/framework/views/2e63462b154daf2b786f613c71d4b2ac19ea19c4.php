
<?php $__env->startSection('content'); ?>
<section id="create-customer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <button class="btn btn-sm btn-primary" style="margin: 2% 0 2% 0" data-toggle="modal" data-target="#createCustomer"><i class="fa fa-user-plus" aria-hidden="true"></i>Create New Customer</button>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <?php if(session('success')): ?>
                  <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                  </div>
                <?php endif; ?>
                <div class="table_container">
                    <table id="create-new-customer" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Customer ID</th>
                                <th>Name</th>
                                <th>Phone No</th>
                                <th>Area</th>
                                <th>Bill Man</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $sr = 1 ?>
                          <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cus): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e($cus->customer_auto_id); ?></td>
                                <td><?php echo e($cus->name); ?></td>
                                <td><?php echo e($cus->phone_no); ?></td>
                                <td><?php echo e($cus->area->area_name); ?></td>
                                <td><?php echo e($cus->billman->name); ?></td>
                                <td>
                                    <?php if($cus->customer_status == 1): ?>
                                    <span class="badge badge-primary">Active</span>
                                    <?php else: ?>
                                    <span class="badge badge-warning">Inactive</span>
                                    <?php endif; ?>
                                </td>
                                <td>
                                  <a href="#" data-toggle="modal" data-target="#editCustomerModal" data-id="<?php echo e($cus->id); ?>" class="customer_edit_modal badge badge-info">View & Edit</a>
                                  <?php echo Form::open(['route' => ['customer.destroy', $cus->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                    <?php echo e(Form::button('Delete', array('type' => 'submit', 'class' => 'badge badge-danger delete-btn'))); ?>

                                   <?php echo Form::close(); ?>

                                </td>
                            </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="createCustomer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <form action="<?php echo e(route('customer.store')); ?>"  method="POST" file="true">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group<?php echo e($errors->has('customer_auto_id') ? ' has-error' : ''); ?> row">
                                <label class="col-3 col-form-label">Customer Id:</label>
                                <div class="col-9">
                                    <input id="todayDate" class="form-control" type="text" name="customer_auto_id" required="">
                                    
                                    <?php if($errors->has('customer_auto_id')): ?>
                                        <span class="help-block">
                                            <strong><?php echo e($errors->first('customer_auto_id')); ?></strong>
                                        </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Customer Name:</label>
                                <div class="col-9">
                                    <input class="form-control" type="text" name="name" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Customer Phone:</label>
                                <div class="col-9">
                                    <input class="form-control" type="text" name="phone_no" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Customer Address:</label>
                                <div class="col-9">
                                    <textarea class="form-control" name="address" required=""></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Select Area:</label>
                                <div class="col-9">
                                    <select class="selectpicker" name="area" data-live-search="true" title=" " required="">
                                      <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ar->id); ?>"><?php echo e($ar->area_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Select Package:</label>
                                <div class="col-9">
                                    <select name="package" class="selectpicker" data-live-search="true" title=" " required="">
                                        <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($pac->id); ?>"><?php echo e($pac->package_name); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Select Payment Type:</label>
                                <div class="col-9">
                                    <select name="payment_type" class="selectpicker" data-live-search="true" title=" " required="">
                                        <option value="Monthly">Monthly</option>
                                        <option value="Quaterly">Quaterly</option>
                                        <option value="Half Yearly">Half Yearly</option>
                                        <option value="Yearly">Yearly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Connection Fee:</label>
                                <div class="col-9">
                                    <input name="connection_fee" type="number" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Monthly Fee:</label>
                                <div class="col-9">
                                    <input name="monthly_fee" type="number" class="form-control" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Select Bill Man:</label>
                                <div class="col-9">
                                    <select name="bill_man" class="selectpicker" data-live-search="true" title=" " required="">
                                        <?php $__currentLoopData = $billman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $man): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($man->id); ?>"><?php echo e($man->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="modal fade" id="editCustomerModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Customer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-edit customer-create-form">
                        
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  function getDate()
  {
    var dcn = 'DCN';
    var auto = <?php echo e($autoid->auto_id); ?>+1;
    var str = "" + auto;
    var pad = "00000";
    var ans = pad.substring(0, pad.length - str.length) + str;
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth()+1; //January is 0!
    var yyyy = today.getFullYear();
    var yy = yyyy.toString().substr(-2);
    if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm}
    today = dcn+"-"+yy+""+mm+"-"+ans;
    document.getElementById("todayDate").value = today;
  }
  //call getDate() when loading the page
  getDate();
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>