<?php $__env->startSection('content'); ?>
<section id="expenditure">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if(session('success')): ?>
                  <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                  </div>
                <?php endif; ?>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#expenseModal" style="margin: 2% 0 2% 0;">Create Expense</button>
                <table id="expenditure-list" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Purpose</th>
                            <th>Amount</th>
                            <th>Note</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $sr = 1 ?>
                        <?php if(sizeof($expense)>0): ?>
                        <?php $__currentLoopData = $expense; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e(date('d-M-Y', strtotime($ex->date))); ?></td>
                                <td><?php echo e($ex->expenseType ? $ex->expenseType->expense_type : ' '); ?></td>
                                <td><?php echo e($ex->amount); ?></td>
                                <td><?php echo e($ex->note); ?></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#expendEditView" data-id="<?php echo e($ex->id); ?>" class="badge badge-info expense_edit_modal">View/Edit</a>
                                    <?php echo Form::open(['route' => ['expense.delete', $ex->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                        <?php echo e(Form::button('Delete', array('type' => 'submit', 'class' => 'badge badge-danger delete-btn'))); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
    <!-- Expense Modal -->
<div class="modal" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="expenseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expenseModalLabel">Create New Expense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo e(route('expenditure.store')); ?>"  method="POST" file="true" target="blank">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group row">
                        <label class="col-3 col-form-label">Date:</label>
                        <div class="col-9">
                            <input type="text" id="newExpenditure" class="form-control" name="date" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Purpose:</label>
                        <div class="col-9">
                            <select name="purpose" class="form-control" required="">
                                <?php $__currentLoopData = $expenseType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($exp->id); ?>"><?php echo e($exp->expense_type); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Amount:</label>
                        <div class="col-9">
                            <input type="number" name="amount" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3 col-form-label">Notes:</label>
                        <div class="col-9">
                            <textarea class="form-control" name="note" required=""></textarea>
                        </div>
                    </div>
                    <button type="Submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Expense Edit Modal -->
<div class="modal" id="expendEditView" tabindex="-1" role="dialog" aria-labelledby="expenditureViewModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="expenditureViewModalLabel">Edit Expense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body add-expense-edit">
                
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script>
    $(document).ready(function() {
        $('#pdfGenerateAndRefresh').click(function(){
            location.reload();
        });

        $(document).on('click', 'a.expense_edit_modal', function() {
             var id = $(this).attr('data-id');
               $.get('expense/'+id+'/edit', function(data){
               $('#expendEditView').find('.add-expense-edit').first().html(data);
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
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>