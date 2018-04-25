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
                        <li><a href="<?php echo e(route('concern.index')); ?>">Concern</a></li>
                        <li class="active">Edit</li>
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
                            <strong class="card-title">Edit</strong>
                        </div>
                        <div class="card-body">
                          <?php echo Form::open(['route' => ['concern.update', $concern->id ], 'method' => 'PUT', 'enctype'=>'multipart/form-data', 'file'=>'true' ]); ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                              <label for="name" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-8">
                                <input type="text" name="name" class="form-control" id="name" value="<?php echo e($concern->name); ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="description" class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-8">
                                <textarea name="description" id="description" cols="30" class="form-control" rows="5"><?php echo e($concern->description); ?></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="logo" class="col-sm-2 col-form-label">Logo</label>
                              <div class="col-sm-8">
                                <input type="file" name="logo" class="form-control" id="logo">
                                <img class="img img-thumbnail" style="margin-top: 3px;" src="<?php echo e(asset('/uploads/'. $concern->logo)); ?>" alt="<?php echo e($concern->logo); ?>" width="50" height="50">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="on_hover_logo" class="col-sm-2 col-form-label">On Hover Logo</label>
                              <div class="col-sm-8">
                                <input type="file" name="on_hover_logo" class="form-control" id="on_hover_logo">
                                <img class="img img-thumbnail" style="margin-top: 3px;" src="<?php echo e(asset('/uploads/'. $concern->on_hover_logo)); ?>" alt="<?php echo e($concern->on_hover_logo); ?>" width="50" height="50">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="image" class="col-sm-2 col-form-label">Image</label>
                              <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" id="image">
                                <img class="img img-thumbnail" style="margin-top: 3px;" src="<?php echo e(asset('/uploads/'. $concern->image)); ?>" alt="<?php echo e($concern->image); ?>" width="50" height="50">
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                              </div>
                            </div>
                          <?php echo Form::close(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backend.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>