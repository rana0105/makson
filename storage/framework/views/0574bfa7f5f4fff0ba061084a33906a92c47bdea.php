<?php $__env->startSection('content'); ?>
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Dashboard</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li><a href="<?php echo e(url('/dashboard')); ?>">Dashboard</a></li>
                        <li class="active">Annual Report</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Success!</strong> <?php echo e(session('success')); ?>.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php endif; ?>
                    <?php if(session('danger')): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Deleted!</strong> <?php echo e(session('danger')); ?>.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                    <?php endif; ?>
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title"><a href="<?php echo e(route('qreport.create')); ?>">Create</a></strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>File</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $qreports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $qreport): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr>
                                    <td><?php echo e(config('company.reverse_company.'.$qreport->company)); ?></td>
                                    <td><?php echo e($qreport->title); ?></td>
                                    <td>
                                        <a target="blank" href="<?php echo e(asset('/uploads/'. $qreport->file)); ?>">PDF File</a>
                                    </td>
                                    <td>

                                        
                                        <?php echo Form::open(['route' => ['qreport.destroy', $qreport->id ], 'method' => 'DELETE', 'class'=>'delete_form', 'style'=>'display:inline' ]); ?>

                                            <button class="btn btn-style btn-small btn-danger delete-btn"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>