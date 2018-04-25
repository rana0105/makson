<form action="<?php echo e(route('customer-update', $customer->id)); ?>"  method="post" file="true">
  <?php echo e(csrf_field()); ?>

    <div class="form-group<?php echo e($errors->has('customer_auto_id') ? ' has-error' : ''); ?> row">
        <label class="col-3 col-form-label">Customer Id:</label>
        <div class="col-9">
            <input id="todayDate" readonly="" class="form-control" type="text" name="customer_auto_id" value="<?php echo e($customer->customer_auto_id); ?>">
            
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
            <input class="form-control" type="text" name="name" value="<?php echo e($customer->name); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Customer Phone:</label>
        <div class="col-9">
            <input class="form-control" type="text" name="phone_no" value="<?php echo e($customer->phone_no); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Customer Address:</label>
        <div class="col-9">
            <textarea class="form-control" name="address" value="<?php echo e($customer->address); ?>"><?php echo e($customer->address); ?></textarea>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Select Area:</label>
        <div class="col-9">
             <?php echo e(Form::select('area', $are , $customer->area_id, ["class" => 'form-control'])); ?>

        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Select Package:</label>
        <div class="col-9">
            <?php echo e(Form::select('package', $pac , $customer->package_id, ["class" => 'form-control'])); ?>

        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Select Payment Type:</label>
        <div class="col-9">
            <select name="payment_type" class="form-control selectpicker" data-live-search="true" title=" " required="">
                <option value="<?php echo e($customer->payment_type); ?>"><?php echo e($customer->payment_type); ?></option>
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
            <input name="connection_fee" type="number" class="form-control" value="<?php echo e($customer->connection_fee); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Monthly Fee:</label>
        <div class="col-9">
            <input name="monthly_fee" type="number" class="form-control" value="<?php echo e($customer->monthly_fee); ?>">
        </div>
    </div>
     <div class="form-group row">
        <label class="col-3 col-form-label">Bill Man:</label>
        <div class="col-9">
            <?php echo e(Form::select('bill_man', $billwithman , $customer->bill_men_id, ["class" => 'form-control'])); ?>

        </div>
    </div>
    
    <div class="form-group row">
        <label class="col-3 col-form-label">Customer Status:</label>
        <div class="col-9">
            <select name="customer_status"  class="form-control">
                <?php $__currentLoopData = config('customerStatus.reverse_status'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($key); ?>" <?php echo e($key == $customer->customer_status ? 'selected':''); ?>><?php echo e($status); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    </div>
    <button type="submit" class="btn">Update</button>
</form>