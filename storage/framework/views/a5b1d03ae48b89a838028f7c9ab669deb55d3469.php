<?php echo Form::model( $area, ['route' => ['setting.update', $area->id], 'files' => true, 'method' => 'PUT']); ?>

  <?php echo e(csrf_field()); ?>

    <div class="form-group row">
        <label class="col-3 col-form-label">Area Name</label>
        <div class="col-9">
            <input class="form-control" type="text" name="area_name" value="<?php echo e($area->area_name); ?>">
        </div>
    </div>
    <button type="submit" class="btn">Update</button>
<?php echo Form::close(); ?>