<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section ">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('students.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <!-- Start personal info  -->
                <h3 class="container-title"><?php echo e(__('student.student info')); ?></h3>
                <div class="container containers-style ">
                    <div class="row">
                        
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                            for="english-name"><?php echo e(__("student.student's name in arabic")); ?></label>
                            <input type="text" class="form-control " id='english-name' name="name_ar">
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
                        
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                for="arab-name"><?php echo e(__("student.student's name in english")); ?></label>
                            <input type="text" class="form-control " id='arab-name' name="name" value="<?php echo e(old('name')); ?>">
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
                        

                        <div class="box col">
                            <label class="" for="photo"><?php echo e(__('student.photo')); ?></label>
                            <input type="file" class="form-control " id="photo" name="photo" value="<?php echo e(old('photo')); ?>">
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
                        
                        <div class="box row">
                            <label for="address"><?php echo e(__('student.addresses')); ?></label>
                            <div class="col-lg-6 col-md-6">
                                <span class=" text-center title-3 "><?php echo e(__("student.student's address in arabic")); ?></span>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar">
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
                            
                            <div class="col-lg-6 col-md-6 ">
                                <span
                                    class=" text-center title-3 "><?php echo e(__("student.student's address in english")); ?></span>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address" value="<?php echo e(old('address')); ?>">
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
                        
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="sex"><?php echo e(__('student.sex')); ?></label>
                            <select class="col form-select form-control" id="sex" name="sex" value="<?php echo e(old('sex')); ?>">
                                <option class="text-center"
                                        value="<?php echo e(__('student.male')); ?>"><?php echo e(__('student.male')); ?></option>
                                <option class="text-center"
                                        value="<?php echo e(__('student.female')); ?>"><?php echo e(__('student.female')); ?></option>
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
                        
                        <div class="box col-lg-6 col-md-6">
                            <label for="age"><?php echo e(__('student.birthdate')); ?></label>
                            <input type="date" class="form-control" id="age" name="birthdate" value="<?php echo e(old('birthdate')); ?>">
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
                        
                        <div class="box col-lg-6 col-md-6">
                            <label for="english-birth-place"><?php echo e(__('student.place of birth in arabic')); ?></label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar" value="<?php echo e(old('place_of_birth_ar')); ?>">
                            <?php $__errorArgs = ['place_of_birth_ar'];
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
                            <label for="arabic-birth-place"><?php echo e(__('student.place of birth in english')); ?></label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth">
                            <?php $__errorArgs = ['place_of_birth'];
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
                        
                        <div class="box ">
                            <label for="className " class="form-label"><?php echo e(__('student.class')); ?></label>
                            <select id="className " class="form-control" name="class" value="<?php echo e(old('class')); ?>">
                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-center" value="<?php echo e($class->id); ?>"><?php echo e($class->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['class'];
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
                <h3 class="container-title"><?php echo e(__('student.parent info')); ?></h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="father"><?php echo e(__("student.father's name in english")); ?></label>
                            <input type="text" class="form-control" id='father' name="father" value="<?php echo e(old('father')); ?>">
                            <?php $__errorArgs = ['father'];
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
                            <label for="father_ar"><?php echo e(__("student.father's name in arabic")); ?></label>
                            <input type="text" class="form-control" id='father_ar' name="father_ar" value="<?php echo e(old('father_ar')); ?>">
                            <?php $__errorArgs = ['father_ar'];
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
                            <label for="father_work"><?php echo e(__("student.father's work in english")); ?></label>
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
                            <label for="father_work_ar"><?php echo e(__("student.father's work in arabic")); ?></label>
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
                            <label for="f-numbers"><?php echo e(__("student.father's contacts")); ?></label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='f-numbers' name="father_num_1" value="<?php echo e(old('father_num_1')); ?>">
                                <?php $__errorArgs = ['father_num_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <input type="number" class="col form-control me-2 ms-2" id='f-numbers' name="father_num_2" value="<?php echo e(old('father_num_2')); ?>">
                                <?php $__errorArgs = ['father_num_2'];
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
                            <label for="arab-mother-name"><?php echo e(__("student.mother's name in english")); ?></label>
                            <input type="text" class="form-control" id='arab-mother-name' name="mother" value="<?php echo e(old('mother')); ?>">
                            <?php $__errorArgs = ['mother'];
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
                            <label for="english-mother-name"><?php echo e(__("student.mother's name in arabic")); ?></label>
                            <input type="text" class="form-control" id='english-mother-name' name="mother_ar" value="<?php echo e(old('mother_ar')); ?>">
                            <?php $__errorArgs = ['mother_ar'];
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
                            <label for="arab-mother-work"><?php echo e(__("student.mother's work in english")); ?></label>
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
                            <label for="work"><?php echo e(__("student.mother's work in arabic")); ?></label>
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
                            <label for="m-numbers"><?php echo e(__("student.mother's contacts")); ?></label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers' name="mother_num_1" value="<?php echo e(old('mother_num_1')); ?>">
                                <?php $__errorArgs = ['mother_num_1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers' name="mother_num_2" value="<?php echo e(old('mother_num_2')); ?>">
                                <?php $__errorArgs = ['mother_num_2'];
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
                            <label for="name-a"><?php echo e(__('student.kin name in english')); ?></label>
                            <input type="text" class="form-control" id='name-a' name="kin"  value="<?php echo e(old('kin')); ?>">
                            <?php $__errorArgs = ['kin'];
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
                            <label for="name-e"><?php echo e(__('student.kin name in arabic')); ?></label>
                            <input type="text" class="form-control" id='name-e' name="kin_ar"  value="<?php echo e(old('kin_ar')); ?>">
                            <?php $__errorArgs = ['kin_ar'];
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
                            <label for="relation-a"><?php echo e(__('student.kin relationship in english')); ?></label>
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
                            <label for="relation-e"><?php echo e(__('student.kin relationship in arabic')); ?></label>
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
                            <label for="number"><?php echo e(__('student.kin contact')); ?></label>
                            <input type="number" class="form-control" id='number' name="kin_contact" value="<?php echo e(old('kin_contact')); ?>">
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
                <!-- End parent info  -->

                <!-- Start health info  -->
                <h3 class="container-title"><?php echo e(__('student.health info')); ?></h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-2"><?php echo e(__('student.does the student')); ?></h4>












































                            <label class="mt-3"><?php echo e(__('student.take any medicine ?')); ?></label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine" ><?php echo e(__('student.no')); ?></label>
                                    <input class="checkbox col" type="checkbox" name="take_medicine" id="takeMedicine" value="<?php echo e(old('take_medicine')); ?>" checked>
                                    <?php $__errorArgs = ['take_medicine'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="form-text text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <label class="form-label col ms-5" for="takeMedicine"><?php echo e(__('student.yes')); ?></label>
                                </div>
                                <input type="text" name="medicine_desc" id="std_medicine_desc" class="form-control"
                                    aria-label="Text input with radio button" placeholder="desc in english">
                                <?php $__errorArgs = ['medicine_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <input type="text" name="medicine_desc_ar" id="std_medicine_desc" class="form-control" value="<?php echo e(old('medicine_desc_ar')); ?>"
                                    aria-label="Text input with radio button" placeholder="desc in arabic">
                                <?php $__errorArgs = ['medicine_desc_ar'];
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
                            <label class="mt-3"><?php echo e(__('student.have an allergy ?')); ?></label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine "><?php echo e(__('student.no')); ?></label>
                                    <input class="checkbox col" checked type="checkbox" name="have_allergy" id="takeMedicine "  value="<?php echo e(old('have_allergy')); ?>">
                                    <?php $__errorArgs = ['have_allergy'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="form-text text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <label class="form-label col ms-5" for="takeMedicine"><?php echo e(__('student.yes')); ?></label>
                                </div>
                                <input type="text" name="allergy_desc" id="std_medicine_desc" class="form-control" value="<?php echo e(old('allergy_desc')); ?>"
                                    aria-label="Text input with radio button" placeholder="desc in english">
                                <?php $__errorArgs = ['allergy_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <input type="text" name="allergy_desc_ar" id="std_medicine_desc" class="form-control" value="<?php echo e(old('allergy_desc_ar')); ?>"
                                    aria-label="Text input with radio button" placeholder="desc in arabic">
                                <?php $__errorArgs = ['allergy_desc_ar'];
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
                            <label class="mt-3"><?php echo e(__('student.have any health problem ?')); ?></label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine "><?php echo e(__('student.no')); ?></label>
                                    <input class="checkbox col" type="checkbox" name="have_health_problem" checked
                                        id="takeMedicine" value="<?php echo e(old('have_health_problem')); ?>">
                                    <?php $__errorArgs = ['have_health_problem'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <small class="form-text text-danger"><?php echo e($message); ?></small>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <label class="form-label col ms-5" for="takeMedicine"><?php echo e(__('student.yes')); ?></label>
                                </div>
                                <input type="text" name="health_problem_desc" id="std_medicine_desc"
                                    class="form-control" value="<?php echo e(old('health_problem_desc')); ?>"
                                    aria-label="Text input with radio button" placeholder="desc in english">
                                <?php $__errorArgs = ['health_problem_desc'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                <input type="text" name="health_problem_desc_ar" id="std_medicine_desc"
                                    class="form-control" value="<?php echo e(old('health_problem_desc_ar')); ?>"
                                    aria-label="Text input with radio button" placeholder="desc in arabic">
                                <?php $__errorArgs = ['health_problem_desc_ar'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <small class="form-text text-danger"><?php echo e($message); ?></small>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
>>>>>>> 6ccd1e70704e27a92d759972606401f0dc718619:resources/views/students_affairs/students/create_student.blade.php
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End health info  -->
                <!-- Start final box -->
                <h3 class="container-title"><?php echo e(__('student.other info')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note"><?php echo e(__('student.note')); ?></label>
                            <textarea name="note" class="form-control" id="std_Note" cols="50" rows="5"><?php echo e(old('note')); ?></textarea>
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
                <!-- End final box -->
            </form>
        </section>
    </main>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students_affairs/students/create_student.blade.php ENDPATH**/ ?>