
<?php echo e(Form::model($subdepartment, ['route' => ['subdepartment.update', $subdepartment->id], 'method' => 'PUT'])); ?>

<div class="modal-body">

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('branch_id', __('Select Branch*'), ['class' => 'form-label'])); ?>

                <div class="form-icon-user">
                    <?php echo e(Form::select('branch_id', $branch, null, ['class' => 'form-control branch_id', 'required' => 'required', 'id' => 'branch_id'])); ?>

                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <div class="form-icon-user" id="department_id">
                    <?php echo e(Form::label('department_id', __('Department*'), ['class' => 'form-label'])); ?>

                    <div class="form-icon-user">
                        <?php echo e(Form::select('department_id', $department, null, ['class' => 'form-control branch_id', 'required' => 'required', 'id' => 'department_id'])); ?>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="form-group">
                <?php echo e(Form::label('name', __('Name SubDepartment'), ['class' => 'form-label'])); ?><span class="text-danger pl-1">*</span>
                <div class="form-icon-user">
                    <?php echo e(Form::text('name', $subdepartment->name, ['class' => 'form-control', 'required' => 'required', 'placeholder' => __('Enter Subdepartment Name')])); ?>

                </div>
                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="invalid-name" role="alert">
                        <strong class="text-danger"><?php echo e($message); ?></strong>
                    </span>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>

    </div>
</div>
<div class="modal-footer">
    <input type="button" value="Cancel" class="btn btn-light" data-bs-dismiss="modal">
    <input type="submit" value="<?php echo e(__('Update')); ?>" class="btn btn-primary">
</div>
<?php echo e(Form::close()); ?>



<?php /**PATH /home/ix8ccsto9l8d/public_html/f100.com.mx/nomina/resources/views/subdepartment/edit.blade.php ENDPATH**/ ?>