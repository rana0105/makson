<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Expense Report</title>
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
                    <h2 style="text-align: center;">Expense Report</h2>
                    <h4 style="text-align: center;">Expense Create Date: <?php echo e(date('d-M-Y', strtotime($expense->created_at))); ?></h4>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Date</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                    <th>Note</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo e(date('d-M-Y', strtotime($expense->date))); ?></td>
                    <td> <?php echo e($expense->expenseType ? $expense->expenseType->expense_type : ''); ?></td>
                    <td> <?php echo e($expense->amount); ?></td>
                    <td> <?php echo e($expense->note); ?></td>
                  </tr>
                </tbody>
              </table>
            </body>
            </html>