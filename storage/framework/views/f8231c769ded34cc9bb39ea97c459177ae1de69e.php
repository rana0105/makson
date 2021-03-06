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
                        <li><a href="<?php echo e(route('jobpost.index')); ?>">Job Post</a></li>
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
                          <form action="<?php echo e(route('jobpost.store')); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                              <label for="title" class="col-sm-2 col-form-label">Job Title</label>
                              <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" id="title" placeholder="Job title" required="">
                                <?php if($errors->has('title')): ?>
                                    <span class="help-block text-danger">
                                        <strong><?php echo e($errors->first('title')); ?></strong>
                                    </span>
                                <?php endif; ?>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="description" class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-8">
                                <textarea name="description" id="description" cols="30" class="form-control" rows="5" placeholder="Description"></textarea>
                                <?php if($errors->has('description')): ?>
                                    <span class="help-block text-danger">
                                        <strong><?php echo e($errors->first('description')); ?></strong>
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
    tinymce.init({
    selector: 'textarea',
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>