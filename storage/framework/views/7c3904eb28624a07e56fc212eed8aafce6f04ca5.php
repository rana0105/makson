<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>New Connection Report</title>
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
        <h2 style="text-align: center;">New Connection Report</h2>
  <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
    <thead>
      <tr>
        <th>Date</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $newConnection; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $newConnect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
        <td><?php echo e(date('d-M-Y', strtotime($newConnect->created_at))); ?></td>
        <td> <?php echo e($newConnect->connection_fee); ?></td>=
      </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td><b>Total</b></td>
        <td><b><?php echo e($newConnection->sum('connection_fee')); ?></b></td>
      </tr>
    </tbody>
  </table>
</body>
</html>