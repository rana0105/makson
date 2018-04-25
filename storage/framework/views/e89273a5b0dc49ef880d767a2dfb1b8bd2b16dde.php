<!DOCTYPE html>
            <html lang="en">
            <head>
              <meta charset="UTF-8">
              <title>Bill Payment Invoice</title>
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
                    <h2 style="text-align: center;">Bill Payment Invoice</h2>
                    <h3 style="text-align: center;">Customer ID: <?php echo e($invoice->customer_id); ?></h3>
                    <h4 style="text-align: center;">Bill Payment Date: <?php echo e(date('d-M-Y', strtotime($invoice->created_at))); ?></h4>

              <table style="margin-top: 15px; margin-bottom: 15px; float: center;">
                <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Customer Phone</th>
                    <th>Area</th>
                    <th>Address</th>
                    <th>Package</th>
                    <th>Amount</th>
                    <th>Bill of Month</th>
                    <th>Payment Period</th>
                    <th>Bill Man</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo e($invoice->customer_name); ?></td>
                    <td> <?php echo e($invoice->customer_phone); ?></td>
                    <td> <?php echo e($invoice->area); ?></td>
                    <td> <?php echo e($invoice->customer_address); ?></td>
                    <td> <?php echo e($invoice->package); ?></td>
                    <td> <?php echo e($invoice->bill_amount); ?></td>
                    <?php $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];?>
                    <td> <?php echo e($months[$invoice->bill_month ]); ?> </td>
                    <td> <?php echo e($invoice->pay_type); ?></td>
                    <td> <?php echo e($invoice->bill_man); ?></td>
                  </tr>
                </tbody>
              </table>
            </body>
            </html>