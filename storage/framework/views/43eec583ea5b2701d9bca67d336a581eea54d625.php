<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Net Balance Report</title>
  <style>
    tr:nth-child(even) {
        background-color: #dddddd;
    }
  </style>
</head>
<body> 
<div style="width:35%;display: inline-block;text-align: left;margin-right: 3px;">
  <p style="font-weight:bold;text-align: center; margin-right: 8%;">Total Income</p>
  <table style="border-collapse: collapse;width: 100%;">
    <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;">
      <th style="text-align: left;padding: 8px;">Date</th>
      <th style="text-align: left;padding: 8px;">Bill Amount</th>
    </tr>
    <?php $__currentLoopData = $billConnection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr style="text-align: left;padding: 8px;">
      <td style="text-align: left;padding: 8px;"><?php echo e(date('d-M-Y', strtotime($bill->created_at))); ?></td>
      <td style="text-align: left;padding: 8px;"> <?php echo e($bill->bill_amount); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td style="text-align: left;padding: 8px;"><b>Total</b></td>
      <td style="text-align: left;padding: 8px;"><b><?php echo e($billConnection->sum('bill_amount')); ?></b></td>
    </tr>
  </table>
</div>
<div style="width:35%;display:inline-block;text-align:right;margin-left: 3px; margin-top: 35px;">
  <p style="font-weight:bold;text-align: center; margin-right: 8%;">Total Expense</p>
  <table style="border-collapse: collapse;width: 100%;">
    <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;">
      <th style="text-align: left;padding: 8px;">Date</th>
      <th style="text-align: left;padding: 8px;">Amount</th>
    </tr>
    <?php $__currentLoopData = $totalExpense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr style="text-align: left;padding: 8px;">
      <td style="text-align: left;padding: 8px;"><?php echo e(date('d-M-Y', strtotime($expense->created_at))); ?></td>
      <td style="text-align: left;padding: 8px;"> <?php echo e($expense->amount); ?></td>
    </tr>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td style="text-align: left;padding: 8px;"><b>Total</b></td>
      <td style="text-align: left;padding: 8px;"><b><?php echo e($totalExpense->sum('amount')); ?></b></td>
    </tr>
  </table>
</div>
<div style="width:25%;display:inline-block;margin-left: 3px;margin-top: -11%;">
  <p style="font-weight:bold; text-align: center;">Balance (After Expenditure)</p>
  <table style="border-collapse: collapse;width: 100%; margin-top: 3%;">
    <?php $netTotal = $billConnection->sum('bill_amount') - $totalExpense->sum('amount') ?>
    <tr style="text-align: left;padding: 8px;">
      <th style="text-align: center;padding: 8px; background-color: #dddddd;">Net Balance</th>
      <th style="text-align: left;padding: 8px; background-color: #dddddd;"><?php echo e($netTotal); ?></th>
    </tr>
  </table>
</div>
</body>
</html>