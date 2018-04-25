<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel">
                
            
                <div class=" page-action text-right" style="margin-top: 2%">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('add_users')): ?>
                        <a href="<?php echo e(route('users.create')); ?>" class="btn btn-primary btn-sm"> <i class="glyphicon glyphicon-plus-sign"></i> Create</a>
                    <?php endif; ?>
                </div>
                <div class="result-set table-responsive">
                <table  class="table table-striped display" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Sr.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created At</th>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users', 'delete_users')): ?>
                        <th class="text-center">Actions</th>
                        <?php endif; ?>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1 ?>
                    <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td><?php echo e($item->roles->implode('name', ', ')); ?></td>
                            <td><?php echo e($item->created_at->toFormattedDateString()); ?></td>

                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users')): ?>
                            <td class="text-center">
                                <?php echo $__env->make('shared._actions', [
                                    'entity' => 'users',
                                    'id' => $item->id
                                ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            </td>
                            <?php endif; ?>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>

                <div class="text-center">
                    <?php echo e($result->links()); ?>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>