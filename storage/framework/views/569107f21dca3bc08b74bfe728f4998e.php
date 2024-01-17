<?php $__env->startSection('content'); ?>
    <main class="main ">
        <section class="section card-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <form action="<?php echo e(route('employees.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <!-- Start personal info  -->
                <h3 class="text-center">CREATE NEW EMPLOYEE</h3>
                <div class="ms-5 me-5 container card section-color mb-5">
                    <div class="row">
                        <div class="box mb-3 col-lg-12 col-md-12">
                            <label for="name">name</label>
                            <input type="text" class="my-form-control" name="name" value="<?php echo e(old('name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-12 ">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" value="<?php echo e(old('photo')); ?>">
                            <?php $__errorArgs = ['photo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="sex">sex</label>
                            <select class="col form-select my-form-control" name="sex" id="sex">
                                <option class="text-center" value="male">male</option>
                                <option class="text-center" value="female">female</option>
                            </select>
                            <?php $__errorArgs = ['sex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="age">birthdate</label>
                            <input type="date" class="my-form-control" name="birthdate" value="<?php echo e(old('birthdate')); ?>">
                            <?php $__errorArgs = ['birthdate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-qualification">Qualification</label>
                            <input type="text" class="my-form-control" name="qualification"
                                   value="<?php echo e(old('qualification')); ?>">
                            <?php $__errorArgs = ['qualification'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-number">Contact 1</label>
                            <input type="number" class="col my-form-control ms-2 me-2" name="contact1"
                                   value="<?php echo e(old('contact1')); ?>">
                            <?php $__errorArgs = ['contact1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-number">Contact 2</label>
                            <input type="number" class="col my-form-control ms-2 me-2" name="contact2"
                                   value="<?php echo e(old('contact2')); ?>">
                            <?php $__errorArgs = ['contact2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="box mb-3  ">
                            <label for="e-address">address</label>
                            <input type="text" class="col my-form-control ms-2 me-2" name="address"
                                   value="<?php echo e(old('address')); ?>">
                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
                <!-- End personal info  -->
                <!-- Start parent info  -->
















































                <!-- End parent info  -->
                <!-- Start final box -->
                <h3 class="text-center">EXTRA NOTES</h3>
                <div class="container card card-header mb-5">
                    <div class="row">
                        <div class="box mb-3 col-lg-12 col-md-12">
                            <label class="form-label" for="stdNote">NOTE:</label>
                            <textarea class="my-form-control text-start" name="note" id="" cols="50"
                                      rows="5"></textarea>
                            <?php $__errorArgs = ['note'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>




                        <div class="box mb-3  ">
                            <button type="submit" class="my-save-button"><i class="fa-solid fa-floppy-disk"></i>
                                Save
                            </button>
                            <button class="my-clear-button" type="reset"><i class="fa-solid fa-broom"></i> Clear
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/employees/create_student.blade.php ENDPATH**/ ?>
