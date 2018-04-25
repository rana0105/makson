<?php $__env->startSection('title', 'Create'); ?>

<?php $__env->startSection('content'); ?>
<div class="container d-flex justify-content-center">
    <div class="col-md-6 col-md-offset-1">
        <div class="panel">
            <div class="row">
                <div class="col-md-5">
                    <h3>Create</h3>
                </div>
                <div class="col-md-7 page-action text-right" style="margin-top: 2%">
                    <a href="<?php echo e(route('users.index')); ?>" class="btn btn-default btn-sm"> <i class="fa fa-arrow-left"></i> Back</a>
                </div>
            </div>

            <div class="row" style="margin-bottom: 3%">
                <div class="col-lg-12">
                    <?php echo Form::open(['route' => ['users.store'] ]); ?>

                        <?php echo $__env->make('user._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- Submit Form Button -->
                        <?php echo Form::submit('Create', ['class' => 'btn btn-primary']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>