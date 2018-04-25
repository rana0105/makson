<?php $__env->startSection('content'); ?>
<section id="generate-invoice">
  <div class="container" style=" margin-top: 2%">
    <div class="row">
      <div class="offset-md-3 col-md-6 col-sm-12">
        <div class="generate-invoice-form">
          <form action="<?php echo e(url('billReport')); ?>" method="POST" target="blank">
            <?php echo e(csrf_field()); ?>

            <label>Customer Id:</label>
            <select name="customer_id" class="selectpicker" data-live-search="true" title=" " required="">
              <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($customer->customer_auto_id); ?>"><?php echo e($customer->customer_auto_id); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <button type="submit" class="btn">submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>