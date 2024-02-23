<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section ">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('relatives.store')); ?>">
                <?php echo csrf_field(); ?>

                
                <h3 class="container-title"><?php echo e(__('Student.parent info')); ?></h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="father"><?php echo e(__("Student.father's name in english")); ?></label>
                            <input type="text" class="form-control" id='father' name="father_name" value="<?php echo e(old('father_name')); ?>">
                            <?php $__errorArgs = ['father_name'];
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
                            <label for="father_ar"><?php echo e(__("Student.father's name in arabic")); ?></label>
                            <input type="text" class="form-control" id='father_ar' name="father_name_ar" value="<?php echo e(old('father_name_ar')); ?>">
                            <?php $__errorArgs = ['father_name_ar'];
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
                        <!-- father work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work"><?php echo e(__("Student.father's work in english")); ?></label>
                            <input type="text" class="form-control" id='father_work' name="father_work" value="<?php echo e(old('father_work')); ?>">
                            <?php $__errorArgs = ['father_work'];
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
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work_ar"><?php echo e(__("Student.father's work in arabic")); ?></label>
                            <input type="text" class="form-control" id='father_work_ar' name="father_work_ar" value="<?php echo e(old('father_work_ar')); ?>">
                            <?php $__errorArgs = ['father_work_ar'];
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
                        <!-- father contacts  -->
                        <div class="box ">
                            <label for="f-numbers"><?php echo e(__("Student.father's contacts")); ?></label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='f-numbers' name="father_contact1" value="<?php echo e(old('father_contact1')); ?>">
                                <?php $__errorArgs = ['father_contact1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <input type="number" class="col form-control me-2 ms-2" id='f-numbers' name="father_contact2" value="<?php echo e(old('father_contact2')); ?>">
                                <?php $__errorArgs = ['father_contact2'];
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
                        <!-- mother name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-mother-name"><?php echo e(__("Student.mother's name in english")); ?></label>
                            <input type="text" class="form-control" id='arab-mother-name' name="mother_name" value="<?php echo e(old('mother_name')); ?>">
                            <?php $__errorArgs = ['mother_name'];
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
                            <label for="english-mother-name"><?php echo e(__("Student.mother's name in arabic")); ?></label>
                            <input type="text" class="form-control" id='english-mother-name' name="mother_name_ar" value="<?php echo e(old('mother_name_ar')); ?>">
                            <?php $__errorArgs = ['mother_name_ar'];
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
                        <!-- mother work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="arab-mother-work"><?php echo e(__("Student.mother's work in english")); ?></label>
                            <input type="text" class="form-control" id='arab-mother-work' name="mother_work" value="<?php echo e(old('mother_work')); ?>">
                            <?php $__errorArgs = ['mother_work'];
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
                        <div class="box col-lg-6 col-md-6">
                            <label for="work"><?php echo e(__("Student.mother's work in arabic")); ?></label>
                            <input type="text" class="form-control" id='work' name="mother_work_ar" value="<?php echo e(old('mother_work_ar')); ?>">
                            <?php $__errorArgs = ['mother_work_ar'];
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
                        <!-- mother contacts  -->
                        <div class="box ">
                            <label for="m-numbers"><?php echo e(__("Student.mother's contacts")); ?></label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers' name="mother_contact1" value="<?php echo e(old('mother_contact1')); ?>">
                                <?php $__errorArgs = ['mother_contact1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers' name="mother_contact2" value="<?php echo e(old('mother_contact2')); ?>">
                                <?php $__errorArgs = ['mother_contact2'];
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
                        <!-- garden name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-a"><?php echo e(__('Student.kin name in english')); ?></label>
                            <input type="text" class="form-control" id='name-a' name="kin_name"  value="<?php echo e(old('kin_name')); ?>">
                            <?php $__errorArgs = ['kin_name'];
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
                            <label for="name-e"><?php echo e(__('Student.kin name in arabic')); ?></label>
                            <input type="text" class="form-control" id='name-e' name="kin_name_ar"  value="<?php echo e(old('kin_name_ar')); ?>">
                            <?php $__errorArgs = ['kin_name_ar'];
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
                        <!-- garden relationship -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-a"><?php echo e(__('Student.kin relationship in english')); ?></label>
                            <input type="text" class="form-control" id='relation-a' name="kin_relationship" value="<?php echo e(old('kin_relationship')); ?>">
                            <?php $__errorArgs = ['kin_relationship'];
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
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-e"><?php echo e(__('Student.kin relationship in arabic')); ?></label>
                            <input type="text" class="form-control" id='relation-e' name="kin_relationship_ar" value="<?php echo e(old('kin_relationship_ar')); ?>">
                            <?php $__errorArgs = ['kin_relationship_ar'];
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
                        <!-- garden number  -->
                        <div class="box col">
                            <label for="number"><?php echo e(__('Student.kin contact')); ?></label>
                            <input type="number" class="form-control " id='number' name="kin_contact" value="<?php echo e(old('kin_contact')); ?>">
                            <?php $__errorArgs = ['kin_contact'];
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
                

                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="<?php echo e(__('public.save')); ?>">
                    </div>
                    <div class="box  col">
                        <input class="clear-button " type="reset" value="<?php echo e(__('public.clear')); ?>">
                    </div>
                </div>
                
                <!-- End parent info  -->
            </form>
        </section>
    </main>
    <script>

    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students_affairs/relatives/create_relative.blade.php ENDPATH**/ ?>