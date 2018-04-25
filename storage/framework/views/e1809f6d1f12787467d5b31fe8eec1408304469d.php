<div class="col-9">
        <select class="form-control billViewSelect" data-id="<?php echo e($id); ?>">
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
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $billview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>