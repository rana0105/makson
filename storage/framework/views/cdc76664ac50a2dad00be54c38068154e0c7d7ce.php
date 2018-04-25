<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit_users')): ?>
    <a href="<?php echo e(route($entity.'.edit', [str_singular($entity) => $id])); ?>" class="btn btn-xs btn-info">
        <i class="fa fa-edit"></i> Edit</a>
<?php endif; ?>

