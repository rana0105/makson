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
                        <li><a href="<?php echo e(route('areport.index')); ?>">Annual Report</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Create</strong>
                        </div>
                        <div class="card-body">
                          <form action="<?php echo e(route('areport.store')); ?>" method="POST" enctype="multipart/form-data" file="true">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                              <label for="company" class="col-sm-2 col-form-label">Company Name</label>
                              <div class="col-sm-8">
                                <select name="company" class="form-control" id="company" required="">
                                    <?php $__currentLoopData = config('company.reverse_company'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($company); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php if($errors->has('company')): ?>
                                    <span class="help-block text-danger">
                                        <strong><?php echo e($errors->first('company')); ?></strong>
                                    </span>
                                <?php endif; ?>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="title" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Title" required="">
                                <?php if($errors->has('title')): ?>
                                    <span class="help-block text-danger">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="file" class="col-sm-2 col-form-label">PDF File</label>
                              <div class="col-sm-8">
                                <input type="file" name="file" class="form-control" id="file" required="">
                                <?php if($errors->has('file')): ?>
                                    <span class="help-block text-danger">
                                        <strong><?php echo e($errors->first('file')); ?></strong>
                                    </span>
                                <?php endif; ?>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                            </div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script type="text/javascript">
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>