<?php echo Form::model( $expense, ['route' => ['expense.update', $expense->id], 'files' => true, 'method' => 'POST']); ?>

  <?php echo e(csrf_field()); ?>

    <div class="form-group row">
        <label class="col-3 col-form-label">Date:</label>
        <div class="col-9">
            <input type="date" id="newExpenditure" class="form-control hasDatepicker" name="date">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Purpose:</label>
        <div class="col-9">
            <?php echo e(Form::select('purpose', $exType , $expense->expense_types_id, ["class" => 'form-control'])); ?>

        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Amount:</label>
        <div class="col-9">
            <input type="number" name="amount" class="form-control" value="<?php echo e($expense->amount); ?>">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-3 col-form-label">Notes:</label>
        <div class="col-9">
            <textarea class="form-control" name="note" value="<?php echo e($expense->note); ?>"><?php echo e($expense->note); ?></textarea>
        </div>
    </div>
    <button type="submit" class="btn">Update</button>
<?php echo Form::close(); ?>

