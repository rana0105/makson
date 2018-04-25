
<?php $__env->startSection('content'); ?>
<section id="bill-payment">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6">
                    <?php if(session('success')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                      </div>
                    <?php endif; ?>
                </div>
                <form action="<?php echo e(route('billpay.store')); ?>" method="POST" target="blank">
                    <?php echo e(csrf_field()); ?>

                    <div class="row">
                        <div class="col-md-6">
                             <div class="form-group row">
                                <label class="col-4 col-form-label">Customer id:</label>
                                <div class="col-8">
                                    <select id="autoid_pass" name="customer_id" class="selectpicker" data-live-search="true" title=" " required="">
                                      <?php $__currentLoopData = $customerid; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $autoid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                                        <option value="<?php echo e($autoid->customer_auto_id); ?>"><?php echo e($autoid->customer_auto_id); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <input class="form-control" readonly="" id="customer_name" name="customer_name" type="hidden" value="">
                            <input class="form-control" readonly="" id="customer_phone" name="customer_phone" type="hidden" value="">
                            <input class="form-control" readonly="" id="address" name="customer_address" type="hidden" value="">
                            <input type="hidden" readonly="" id="area_name" name="area" value="" class="form-control">
                            <input type="hidden" readonly="" id="package_name" name="package" value="" class="form-control">
                            <input type="hidden" readonly="" id="monthly_fee" class="form-control" name="monthly_fee" value="">
                            <input type="hidden" id="pay_type" class="form-control" name="pay_type" value="">
                            <input type="hidden" id="create" class="form-control" name="create" value="">
                            <input class="form-control" readonly="" id="bill_man" name="bill_man" type="hidden" value="">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Bill Date:</label>
                                <div class="col-8">
                                    <input type="text" class="form-control" name="bill_date" id="billPay" required="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Bill Amount:</label>
                                <div class="col-8">
                                    <input type="number" class="form-control" name="bill_amount" value="" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Month & Year:</label>
                                <div class="col-4">
                                    <?php $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']?>
                                    <select class="selectpicker" data-live-search="true" name="bill_month" title=" " required="">
                                        <?php $__currentLoopData = $months; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"
                                        <?php if($key == date('MM')): ?>
                                            selected=""
                                        <?php endif; ?>
                                        ><?php echo e($month); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <select class="selectpicker" data-live-search="true" name="bill_year" title=" " required="">
                                        <?php for($i = 2000; $i <= 2051; $i++): ?>
                                            <option value="<?php echo e($i); ?>"
                                            <?php if($i == date('Y')): ?>
                                            selected=""
                                            <?php endif; ?>
                                            ><?php echo e($i); ?></option>
                                        <?php endfor; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Save & Generate Invoice</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" style="margin-top: 2%">
            <div class="col-md-12">
                <div class="bill-list">
                    <table id="bill-list" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Area</th>
                                <th>Bill Status</th>
                                <th>Invoice</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Area</th>
                                <th>Bill Status</th>
                                <th>Invoice</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <?php $sr = 1 ?>
                        <tbody>
                            <?php $__currentLoopData = $billpay; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e($bill->customer_id); ?></td>
                                <td><?php echo e($bill->customer_name); ?></td>
                                <td><?php echo e($bill->customer_phone); ?></td>
                                <td><?php echo e($bill->area); ?></td>
                                <?php  $remain = $bill->bill_amount - $bill->monthly_fee; ?>
                                <td><?php echo e($bill->bill_amount > $bill->monthly_fee?$bill->bill_amount - $bill->monthly_fee:$bill->monthly_fee - $bill->bill_amount); ?>

                                    <?php if($remain > 0): ?>
                                    <span class="badge badge-primary">Advance</span>
                                    <?php elseif($remain < 0): ?>
                                    <span class="badge badge-warning">Due</span>
                                    <?php else: ?>
                                    <span class="badge badge-success">Paid</span>
                                    <?php endif; ?>
                                </td>
                                <td><a href="assets/download/invoice.pdf" target="_blank">Invoice</a></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#billView" data-id="<?php echo e($bill->customer_id); ?>" class="billView badge badge-info">Bill View</a>
                                    <a href="#" data-toggle="modal" data-target="#customerDetail" data-id="<?php echo e($bill->customer_id); ?>" class="customerDetail badge badge-info">Customer Details</a>
                                    <a href="#" data-toggle="modal" data-target="#billViewPay" data-id="<?php echo e($bill->customer_id); ?>" class="billViewPay badge badge-info">Pay</a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Create Customer -->
    <div class="modal fade" id="customerDetail" tabindex="-1" role="dialog" aria-labelledby="customerDetailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="customerDetailLabel">Details of <span>Fatema Akter</span></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Customer ID:</label>
                            <div class="col-9">
                                <input id="customer_idd" class="form-control" type="text" value="" readonly="true">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Customer Name:</label>
                            <div class="col-9">
                                <input id="customer_named"  class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Customer Address:</label>
                            <div class="col-9">
                                <textarea id="addressd" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Select Area:</label>
                            <div class="col-9">
                                <input type="text" id="area_named" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Select Package:</label>
                            <div class="col-9">
                                <input type="text" id="package_named" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Payment Type:</label>
                            <div class="col-9">
                                <input type="text" id="pay_typed" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Connection Fee:</label>
                            <div class="col-9">
                                <input id="connection_feed" type="number" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Monthly Fee:</label>
                            <div class="col-9">
                                <input id="monthly_feed" type="number" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Bill Man:</label>
                            <div class="col-9">
                                <input type="text" id="bill_mand" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Status:</label>
                            <div class="col-9">
                                <input id="status" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bill Details -->
    <div class="modal fade" id="billView" tabindex="-1" role="dialog" aria-labelledby="customerDetailLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="id="billview_name"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body add-billView">
                    
                </div>
            </div>
        </div>
    </div>

    <!-- Due/Advance Pay -->
    <div class="modal fade" id="billViewPay" tabindex="-1" role="dialog" aria-labelledby="payLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="payLabel">Pay <span>Fatema Akter</span>'s Bill</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body add-billViewPay">
                  
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
  $( document ).ready(function() {
    $('#autoid_pass').change(function()  {
          var autid = $(this).val();
          $.get('autoCustomerID/'+autid, function(data){
            $('#customer_name').val(data.name);
            $('#customer_phone').val(data.phone_no);
            $('#address').val(data.address);
            $('#pay_type').val(data.payment_type);
            $('#monthly_fee').val(data.monthly_fee);
            $('#create').val(data.created_at);
            $('#area_name').val(data.area.area_name);
            $('#package_name').val(data.package.package_name);
            $('#bill_man').val(data.billman.name);
          });
          
    });

    $(document).on('click', 'a.customerDetail', function() {
          var customer_id = $(this).attr('data-id');
          $.get('customerDetail/'+customer_id, function(data){
            console.log(data);
            $('#customer_idd').val(data.customer_auto_id);
            $('#customer_named').val(data.name);
            $('#customer_phoned').val(data.phone_no);
            $('#addressd').val(data.address);
            $('#pay_typed').val(data.payment_type);
            $('#monthly_feed').val(data.monthly_fee);
            $('#connection_feed').val(data.connection_fee);
            $('#created').val(data.created_at);
            $('#area_named').val(data.area.area_name);
            $('#package_named').val(data.package.package_name);
            $('#bill_mand').val(data.billman.name);
            $('#status').val(data.customer_status===1?'Active':'deactive');
          });
          
    });

    $(document).on('click', 'a.billView', function() {
         var id = $(this).attr('data-id');
           $.get('billView/'+id, function(data){
            console.log(data);
           $('#billView').find('.add-billView').first().html(data);
        });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });
    var year = ''
    $(document).on('change', 'select.billViewSelect', function() {
         var id = $(this).attr('data-id');
        year = $(this).val();
         console.log(id);
           $.get('billView/'+id+'?year='+year, function(data){
            console.log(data);
           $('#billView').find('.add-billView').first().html(data);
        });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

    $(document).on('click', 'a.billViewPay', function() {
         var id = $(this).attr('data-id');
           $.get('billViewPay/'+id, function(data){
            console.log(data);
           $('#billViewPay').find('.add-billViewPay').first().html(data);
        });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

    $(document).on('change', 'select.billViewSelectPay', function() {
         var id = $(this).attr('data-id');
        year = $(this).val();
         console.log(id);
           $.get('billViewPay/'+id+'?year='+year, function(data){
            console.log(data);
           $('#billViewPay').find('.add-billViewPay').first().html(data);
        });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

    // var year = new Date('Y');
    // $('.billView').click(function()  {
    //       var customer_id = $(this).attr('data-id');
    //       $.get('billView/'+customer_id,
    //         [year], function(data){
    //         console.log(data);
    //         $('#billview_name').html(data.customer_name);
    //         $('#billview_balance').html(data.balance);
    //         var date = new Date(data.bill_date).getMonth();
    //         console.log(date);
    //         if(date === 0){
    //             $("#billview_created").html('January');
    //         }else if(date === 1){
    //             $("#billview_created").html('February');
    //         }
    //       });
          
  });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>