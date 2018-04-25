<?php $__env->startSection('content'); ?>
<section id="create-customer">
    <div class="container">
        <div class="row" style="margin-top: 3%">
            <div class="col-sm-6">
                <button class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#createArea">Create Area</button>
                <div class="table_container">
                    <?php if(session('success-a')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session('success-a')); ?>

                      </div>
                    <?php endif; ?>
                    <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr. No:</th>
                                <th>Area Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sr = 1 ?>
                            <?php $__currentLoopData = $area; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e($ar->area_name); ?></td>
                                <td>
                                  <button type="button" class="area_modal btn btn-sm btn-primary" data-toggle="modal" data-target="#editAreaModal" data-id="<?php echo e($ar->id); ?>">Edit</button>
                                  <?php echo Form::open(['route' => ['setting.destroy', $ar->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                    <?php echo e(Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger btn-responsive delete-btn'))); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#createPackage">Create Package</button>
                <div class="table_container">
                    <?php if(session('success-p')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session('success-p')); ?>

                      </div>
                    <?php endif; ?>
                    <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr. No:</th>
                                <th>Package Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sr = 1 ?>
                            <?php $__currentLoopData = $package; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pac): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e($pac->package_name); ?></td>
                                <td>
                                    <button type="button" class="package_modal btn btn-sm btn-primary" data-toggle="modal" data-target="#editPackageModal" data-id="<?php echo e($pac->id); ?>">Edit</button>
                                    <?php echo Form::open(['route' => ['package.delete', $pac ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                    <?php echo e(Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger btn-responsive delete-btn'))); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 3%">
            <div class="col-sm-6">
                <button class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#createExpenseType">Create Expense Type</button>
                <div class="table_container">
                    <?php if(session('success-ex')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session('success-ex')); ?>

                      </div>
                    <?php endif; ?>
                    <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr. No:</th>
                                <th>Expense Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sr = 1 ?>
                            <?php $__currentLoopData = $expenseType; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ex): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e($ex->expense_type); ?></td>
                                <td>
                                  <button type="button" class="expense_modal btn btn-sm btn-primary" data-toggle="modal" data-target="#editExpenseType" data-id="<?php echo e($ex->id); ?>">Edit</button>
                                  <?php echo Form::open(['route' => ['expenseType.delete', $ex->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                    <?php echo e(Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger btn-responsive delete-btn'))); ?>

                                    <?php echo Form::close(); ?>

                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <button class="btn btn-primary" style="margin-bottom: 2%;" data-toggle="modal" data-target="#createBillMan">Create Bill Man</button>
                <div class="table_container">
                    <?php if(session('success-bill')): ?>
                      <div class="alert alert-success">
                        <?php echo e(session('success-bill')); ?>

                      </div>
                    <?php endif; ?>
                    <table class="table table-striped table-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Sr. No:</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $sr = 1 ?>
                            <?php $__currentLoopData = $billman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($sr++); ?></td>
                                <td><?php echo e($bill->name); ?></td>
                                <td><?php echo e($bill->phone); ?></td>
                                <td>
                                  <button type="button" class="billman_modal btn btn-sm btn-primary" data-toggle="modal" data-target="#editBillMan" data-id="<?php echo e($bill->id); ?>">Edit</button>
                                  <?php echo Form::open(['route' => ['billman.delete', $bill->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                    <?php echo e(Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'btn btn-sm btn-danger btn-responsive delete-btn'))); ?>

                                    <?php echo Form::close(); ?>

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


<div class="modal fade" id="createArea" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <form action="<?php echo e(route('setting.store')); ?>"  method="POST" file="true">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label class="col-3 col-form-label">Area Name</label>
                                <div class="col-9">
                                    <input class="form-control" type="text" name="area_name" required="">
                                </div>
                            </div>
                            <button type="submit" class="btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="modal fade" id="editAreaModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Area</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form add-area">
                        
                    </div>
                </div>
            </div>
        </div>
</div>




<div class="modal fade" id="createPackage" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <form action="<?php echo e(route('package.store')); ?>"  method="POST" file="true">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label class="col-4 col-form-label">Package Name</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="package_name" required="">
                                </div>
                            </div>
                            <button type="submit" class="btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="modal fade" id="editPackageModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Package</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form add-package">

                    </div>
                </div>
            </div>
        </div>
</div>




<div class="modal fade" id="createExpenseType" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Expense Type</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <form action="<?php echo e(route('expense.type')); ?>"  method="POST" file="true">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label class="col-4 col-form-label">Expense type</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="expense_type" required="">
                                </div>
                            </div>
                            <button type="submit" class="btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="modal fade" id="editExpenseType" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Expense</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form add-expense">

                    </div>
                </div>
            </div>
        </div>
</div>


<div class="modal fade" id="createBillMan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bill Man</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <form action="<?php echo e(route('bill.man')); ?>"  method="POST" file="true">
                          <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                                <label class="col-4 col-form-label">Name</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="name" required="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-4 col-form-label">Phone</label>
                                <div class="col-8">
                                    <input class="form-control" type="text" name="phone" required="">
                                </div>
                            </div>
                            <button type="submit" class="btn">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="modal fade" id="editBillMan" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Billman</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form add-billman">

                    </div>
                </div>
            </div>
        </div>
</div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>