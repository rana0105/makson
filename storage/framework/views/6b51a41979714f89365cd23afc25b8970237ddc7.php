<?php echo Form::model( $package, ['route' => ['package.update', $package], 'files' => true, 'method' => 'POST']); ?>

  <?php echo e(csrf_field()); ?>

    <div class="form-group row">
        <label class="col-4 col-form-label">Package Name</label>
        <div class="col-8">
            <input class="form-control" type="text" name="package_name" value="<?php echo e($package->package_name); ?>">
        </div>
    </div>
    <button type="submit" class="btn">Update</button>
<?php echo Form::close(); ?>