<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Total Expense Report</title>
  <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        width: auto;
        font-size: 12px;
        border: 1px solid #000000;
        /*border: none;*/
        text-align: center;
        padding-top: 4px;
        padding-bottom:  5px;
        margin-top: 2px;
        margin-bottom: 2px;
    }
    input {
        border: none;
    }

    textarea {
        border: none;
  }
  </style>
</head>
<body> 
        <h2 style="text-align: center;">Total Expense Report</h2>
  <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
    <thead>
      <tr>
        <th>Date</th>
        <th>Purpouse</th>
        <th>Note</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $totalExpense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expense): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(date('d-M-Y', strtotime($expense->created_at))); ?></td>
        <td> <?php echo e($expense->expenseType ?  $expense->expenseType->expense_type : ''); ?></td>
        <td> <?php echo e($expense->note); ?></td>
        <td> <?php echo e($expense->amount); ?></td>
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td colspan="2"></td>
        <td><b>Total</b></td>
        <td><b><?php echo e($totalExpense->sum('amount')); ?></b></td>
      </tr>
    </tbody>
  </table>
</body>
</html>