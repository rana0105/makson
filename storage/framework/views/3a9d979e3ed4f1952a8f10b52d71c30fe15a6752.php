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
                        <li><a href="<?php echo e(route('slider.index')); ?>">Slider</a></li>
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
                          <?php echo Form::open(['route' => ['slider.update', $slider->id ], 'method' => 'PUT', 'enctype'=>'multipart/form-data', 'file'=>'true' ]); ?>

                            <?php echo e(csrf_field()); ?>

                            <div class="form-group row">
                              <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                              <div class="col-sm-8">
                                <input type="text" name="title" class="form-control" id="inputTitle" value="<?php echo e($slider->title); ?>">
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
                              <div class="col-sm-8">
                                <textarea name="description" id="inputDescription" cols="30" class="form-control" rows="5"><?php echo e($slider->description); ?></textarea>
                              </div>
                            </div>
                            <div class="form-group row">
                              <label for="inputTitle" class="col-sm-2 col-form-label">Image</label>
                              <div class="col-sm-8">
                                <input type="file" name="image" class="form-control" id="inputImage">
                                <img class="img img-thumbnail" style="margin-top: 3px;" src="<?php echo e(asset('/uploads/'. $slider->image)); ?>" alt="<?php echo e($slider->image); ?>" width="50" height="50">
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