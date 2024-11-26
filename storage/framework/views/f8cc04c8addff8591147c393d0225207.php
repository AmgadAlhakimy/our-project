<?php $__env->startSection('content'); ?>
    <main class="main ">
        <section class="section ">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <!-- Start personal info  -->
            <h3 class="container-title"><?php echo e(__('Teacher.teachers info')); ?></h3>
            <form method="post" action="<?php echo e(route('teachers.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12  ">
                            <label for="teacher-name-a"><?php echo e(__('Teacher.teachers name in english')); ?></label>
                            <input type="text" class="form-control " id='teacher-name-a' name="name"
                                   placeholder="in english" value="<?php echo e(old('name')); ?>">
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
                        <div class="box col-lg-6 col-md-12">
                            <label for="teacher-name-e"><?php echo e(__('Teacher.teachers name in arabic')); ?></label>
                            <input type="text" class="form-control " id='teacher-name-e' name="name_ar"
                                   placeholder="in arabic" value="<?php echo e(old('name_ar')); ?>">
                            <?php $__errorArgs = ['name_ar'];
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
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="photo"><?php echo e(__('Teacher.photo')); ?></label>
                            <input type="file" class="form-control"
                                   id="photo" name="photo" value="<?php echo e(old('photo')); ?>">
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
                        <!-- 3 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="sex"><?php echo e(__('public.sex')); ?></label>
                            <select class="col form-select form-control" id="sex" name="sex">
                                <option  value="<?php echo e(__('public.male')); ?>"><?php echo e(__('public.male')); ?></option>
                                <option value="<?php echo e(__('public.female')); ?>"><?php echo e(__('public.female')); ?></option>
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
                        <!-- 4 -->
                        <div class="box ">
                            <label for="t-numbers"><?php echo e(__('Teacher.contact')); ?></label>
                            <div class="row">
                                <input type="number" class="col form-control ms-2 me-2" id='t-numbers'
                                       placeholder="only numbers" name="contact" value="<?php echo e(old('contact')); ?>">
                                <?php $__errorArgs = ['contact'];
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
                        <!-- 5 -->
                        <div class="box row">
                            <label for="t-address"><?php echo e(__('Teacher.address in english')); ?></label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                   name="address" value="<?php echo e(old('address')); ?>">
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
                        <div class="box row">
                            <label for="t-address"><?php echo e(__('Teacher.address in arabic')); ?></label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address_ar'
                                   name="address_ar" value="<?php echo e(old('address_ar')); ?>">
                            <?php $__errorArgs = ['address_ar'];
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
                <!-- Start functional info  -->
                <h3 class="container-title"><?php echo e(__('Teacher.functional data')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="t-qualification"><?php echo e(__('Teacher.qualification')); ?></label>
                            <select class="col form-select form-control" id="t-qualification" name="qualification">
                                <option value="<?php echo e(__('Teacher.high school')); ?>"><?php echo e(__('Teacher.high school')); ?></option>
                                <option value="<?php echo e(__('Teacher.diploma')); ?>"><?php echo e(__('Teacher.diploma')); ?></option>
                                <option value="<?php echo e(__('Teacher.bachelor')); ?>"><?php echo e(__('Teacher.bachelor')); ?></option>
                            </select>
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
                        <!-- 2 -->

                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-salary"><?php echo e(__('Teacher.salary')); ?></label>
                            <input type="number" class="form-control" id='t-salary' name="salary"
                                   placeholder="in dollars $" value="<?php echo e(old('salary')); ?>">
                            <?php $__errorArgs = ['salary'];
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
                        <!-- 3 -->
                        <div class="box row">
                            <label for="t-address"><?php echo e(__('Teacher.major in english')); ?></label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address' name="major"
                                   value="<?php echo e(old('major')); ?>">
                            <?php $__errorArgs = ['major'];
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
                        <div class="box row">
                            <label for="t-address"><?php echo e(__('Teacher.major in arabic')); ?></label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                   name="major_ar" value="<?php echo e(old('major_ar')); ?>">
                            <?php $__errorArgs = ['major_ar'];
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
                <!-- End functional info  -->
                <!-- Start final box -->
                <h3 class="container-title"><?php echo e(__('Teacher.other info')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="notes col-lg-12 col-md-12">
                            <label class="form-label" for="st_dNote"><?php echo e(__('public.note')); ?></label>
                            <textarea name="note" class="form-control" id="st_dNote" cols="50"
                                      rows="5"><?php echo e(old('note')); ?></textarea>
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
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button " type="submit" value="<?php echo e(__('public.save')); ?>">
                        </div>
                        <div class="box  col">
                            <input class="clear-button " type="reset" value="<?php echo e(__('public.clear')); ?>">
                        </div>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/employees-affairs/teachers/create_student.blade.php ENDPATH**/ ?>
