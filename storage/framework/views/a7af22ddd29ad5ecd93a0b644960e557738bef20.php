<?php echo Form::model( $expenseType, ['route' => ['expense.update', $expenseType->id], 'files' => true, 'method' => 'POST']); ?>

  <?php echo e(csrf_field()); ?>

    <div class="form-group row">
        <label class="col-3 col-form-label">Expense Type</label>
        <div class="col-9">
            <input class="form-control" type="text" name="expense_type" value="<?php echo e($expenseType->expense_type); ?>">
        </div>
    </div>
    <button type="submit" class="btn">Update</button>
<?php echo Form::close(); ?>