<div class="col-9">
        <select class="form-control billViewSelectPay" data-id="<?php echo e($id); ?>">
            <?php for($i = 2000; $i <= 2051; $i++): ?>
                <option value="<?php echo e($i); ?>"
                <?php if($i == $year): ?>
                selected=""
                <?php endif; ?>
                ><?php echo e($i); ?></option>
            <?php endfor; ?>
        </select>
    </div>
    <table class="table" style="margin-top: 2%">
        <thead>
            <tr>
                <th>Month</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $billviewpay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];?>
                <th scope="row"><?php echo e($months[$bill->bill_month ]); ?></th>
                <td>
                <?php if($bill->balance == 0): ?> 
                    <span class="badge badge-success">Paid</span>
                <?php elseif($bill->balance > 0): ?>
                <?php echo e($bill->balance); ?> <span class="badge badge-primary">Adv</span>
                <?php else: ?>
                <?php echo e($bill->balance); ?> <span class="badge badge-danger">Due</span>
                <?php endif; ?>
                </td>
                <td>
                <form action="<?php echo e(route('billpay.month', $id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                    <input type="hidden" name="id" value="<?php echo e($id); ?>">
                    <input type="hidden" name="year" value="<?php echo e($bill->bill_year); ?>">
                    <input type="hidden" name="month" value="<?php echo e($bill->bill_month); ?>">
                    <input type="number" name="bill_amount" class="form-control" placeholder="Amount" value="" style="display: inline-block;width: 150px">
                    <button type="submit" class="btn-success" style="display: inline-block;padding: .27rem .75rem;">Pay Now</button>
                </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
