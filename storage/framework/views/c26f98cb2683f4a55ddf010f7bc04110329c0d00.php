<?php $__env->startSection('content'); ?>
<section id="report">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php if(session('success')): ?>
                  <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                  </div>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <table id="management-report" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>Connection Date</th>
                            <th>Contact No</th>
                            <th>Area</th>
                            <th>Package</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Bill Man</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Customer ID</th>
                            <th>Customer Name</th>
                            <th>Connection Date</th>
                            <th>Contact No</th>
                            <th>Area</th>
                            <th>Package</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Bill Man</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      <?php $sr = 1 ?>
                      <?php $__currentLoopData = $report; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <tr>
                            <td><?php echo e($sr++); ?></td>
                            <td><?php echo e($r->customer_id); ?></td>
                            <td> <?php echo e($r->customer_name); ?></td>
                            <td><?php echo e(date('d-M-Y', strtotime($r->connection_date))); ?></td>
                            <td><?php echo e($r->customer_phone); ?></td>
                            <td><?php echo e($r->area); ?></td>
                            <td><?php echo e($r->package); ?></td>
                            
                            <?php  $bill = $r->bill_amount - $r->monthly_fee; ?>
                            <td><?php echo e($r->bill_amount > $r->monthly_fee?$r->bill_amount - $r->monthly_fee:$r->monthly_fee - $r->bill_amount); ?>

                                <?php if($bill > 0): ?>
                                <span class="badge badge-primary">Advance</span>
                                <?php elseif($bill < 0): ?>
                                <span class="badge badge-warning">Due</span>
                                <?php else: ?>
                                <span class="badge badge-success">Paid</span>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if($r->status['customer_status'] === 1): ?>
                                <span class="badge badge-success">Active</span>
                                <?php else: ?>
                                <span class="badge badge-default">Deactive</span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo e($r->bill_man); ?></td>
                            
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="detailsView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Details Show</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <div class="form-group row">
                            <div class="col-9">
                                <p><span>Customer ID :-</span> <span id="customer_id"></span></p>
                                <p><span>Name :-</span> <span id="customer_name"></span></p>
                                <p><span>Area :-</span> <span id="area"></span></p>
                                <p><span>Address:-</span> <span id="customer_address"></span></p>
                                <p><span>Package:-</span> <span id="package"></span></p>
                                <p><span>Connection Date:-</span> <span id="connection_date"></span></p>
                                <p><span>Bill Amount:-</span> <span id="bill_amount"></span></p>
                                <p><span>Bill of Month:-</span> <span id="bill_month"></span></p>
                                <p><span>Payment Type:-</span> <span id="pay_type"></span></p>
                                <p><span>Bill Man:-</span> <span id="billman"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    // show detatials report
$(document).ready(function(){ 
    $(document).on('click', 'a.view_modal', function() {
         var id = $(this).attr('data-id');
           $.get('detatils-report/'+id, function(data){
            console.log(data);
            $('#customer_id').html(data.customer_id);
            $('#customer_name').html(data.customer_name);
            $('#area').html(data.area);
            $('#customer_address').html(data.customer_address);
            $('#package').html(data.package);
            $('#connection_date').html(data.date_time);
            $('#bill_amount').html(billPay(data));
            $('#bill_month').html(data.bill_month);
            $('#pay_type').html(data.pay_type);
            $('#billman').html(data.billman.name);
        });
    });
    function billPay(data){
        var monthfee = data.monthly_fee;
        var billamount = data.bill_amount;
        var originalBill = billamount - monthfee;
        var bill = 0;
        if(billamount > monthfee){
            bill = billamount - monthfee;
        }else{
            bill = monthfee - billamount;
        }
        var a = "";
        if(originalBill > 0){
             a = '<span class="badge badge-primary">Advance</span>';
        } else if (originalBill < 0){
         a = '<span class="badge badge-warning">Due</span>';
        }else{
         a = '<span class="badge badge-success">Paid</span>';
        }
        return bill + a;
    }
}); 

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>