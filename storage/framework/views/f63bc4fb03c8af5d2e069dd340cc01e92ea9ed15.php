<?php $__env->startSection('content'); ?>
<section id="generate-invoice">
  <div class="container" style=" margin-top: 2%">
    <div class="row">
      <div class="offset-md-3 col-md-6 col-sm-12">
        <div class="generate-invoice-form">
          <form action="<?php echo e(route('financial.statement')); ?>" method="POST" target="blank">
            <?php echo e(csrf_field()); ?>

            <div class="form-group row">
                <label class="col-4 col-form-label">Select Category:</label>
                <div class="col-8">
                  <select name="key_word" class="selectpicker" data-live-search="true" title=" " required="">
                      <option value="bill_connection">Total Bill Collection</option>
                      <option value="due">Total Due Collection</option>
                      <option value="new_connection">Total New Connection Fee</option>
                      <option value="advanced">Total Advanced Collection</option>
                      <option value="expenditure">Total Expense</option>
                      <option value="balance">Net Balance</option>
                  </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label">From:</label>
                <div class="col-8">
                   <input type="date" class="form-control" name="from_date" required=" ">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4 col-form-label">To:</label>
                <div class="col-8">
                   <input type="date" class="form-control" name="to_date" required=" ">
                </div>
            </div>
            
            <button type="submit" class="btn">submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>