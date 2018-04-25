<!-- Name Form Input -->
<div class="form-group <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
    <?php echo Form::label('name', 'Name'); ?>

    <?php echo Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']); ?>

    <?php if($errors->has('name')): ?> <p class="help-block"><?php echo e($errors->first('name')); ?></p> <?php endif; ?>
</div>



<!-- email Form Input -->
<div class="form-group <?php if($errors->has('email')): ?> has-error <?php endif; ?>">
    <?php echo Form::label('email', 'Email'); ?>

    <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']); ?>

    <?php if($errors->has('email')): ?> <p class="help-block"><?php echo e($errors->first('email')); ?></p> <?php endif; ?>
</div>

<!-- password Form Input -->
<div class="form-group <?php if($errors->has('password')): ?> has-error <?php endif; ?>">
    <?php echo Form::label('password', 'Password'); ?>

    <?php echo Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>

    <?php if($errors->has('password')): ?> <p class="help-block"><?php echo e($errors->first('password')); ?></p> <?php endif; ?>
</div>

<!-- Permissions -->
