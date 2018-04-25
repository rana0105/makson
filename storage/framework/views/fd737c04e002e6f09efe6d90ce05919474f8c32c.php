<?php echo Form::model( $billman, ['route' => ['billman.update', $billman->id], 'files' => true, 'method' => 'POST']); ?>

  <?php echo e(csrf_field()); ?>

    <div class="form-group row">
        <label class="col-3 col-form-label">Name</label>
        <div class="col-9">
            <input class="form-control" type="text" name="name" value="<?php echo e($billman->name); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Phone</label>
        <div class="col-9">
            <input class="form-control" type="text" name="phone" value="<?php echo e($billman->phone); ?>">
        </div>
    </div>
    <button type="submit" class="btn">Update</button>
<?php echo Form::close(); ?>