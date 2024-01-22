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
                            <input type="text" class="form-control " id='english-name' name="name_ar" value="<?php echo e(old('name_ar')); ?>">
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
                            <div class="col-lg-6 col-md-6">
                                <label for="address"><?php echo e(__("student.student's address in arabic")); ?></label>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar" value="<?php echo e(old('address_ar')); ?>">
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
                                <label for="address"><?php echo e(__("student.student's address in english")); ?></label>
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
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth" value="<?php echo e(old('place_of_birth')); ?>">
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
                            <select id="className " class="form-control" name="class_id" value="<?php echo e(old('class_id')); ?>">
                                <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-center" value="<?php echo e($class->id); ?>"><?php echo e($class->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['class_id'];
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

                
                <h3 class="container-title"><?php echo e(__('student.parent info')); ?></h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box ">
                            <label for="father"><?php echo e(__('student.parent info')); ?></label>
                            <div class="w-100 mt-5">
                                <a href="<?php echo e(route('relatives.create')); ?>" class=" save-button  w-full mt-3 p-3"><?php echo e(__('student.parent info')); ?></a>
                            </div>
                        </div>
                        <!-- garden number  -->
                    </div>
                </div>
                <!-- End parent info  -->
                <!-- Start health info  -->
                <h3 class="container-title "><?php echo e(__('student.health info')); ?></h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-1 "><?php echo e(__('student.does the student')); ?></h4>

                            
                            <label class="mt-4"><?php echo e(__('student.take any medicine ?')); ?></label>
                            
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" name="take_medicine" id="takeMedicineE" value="<?php echo e(old('take_medicine')); ?>" nochecked>
                                    <label class="form-label col rounded" for="takeMedicineE" ></label>
                                </div>
                                
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
                                
                                    <input type="  text" class=" form-control ms-1 me-1 col " name="medicine_desc" id="std_medicine_desc"
                                        aria-label="Text input with radio button" placeholder="desc in english" >
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
                                
                                <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc_ar" id="std_medicine_desc" value="<?php echo e(old('medicine_desc_ar')); ?>"
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
                            
                            
                            <label class="mt-4"><?php echo e(__('student.have an allergy ?')); ?></label>
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" name="have_allergy" id="haveAllergy" value="<?php echo e(old('have_allergy')); ?>" >
                                    <label class="form-label col rounded" for="haveAllergy" ></label>
                                </div>
                                
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
                                
                                <input type="text" class=" form-control ms-1 me-1 col" name="allergy_desc" id="std_medicine_desc"
                                    aria-label="Text input with radio button" value="<?php echo e(old('allergy_desc')); ?>" placeholder="desc in english">
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
                                
                                <input type="text" class=" form-control ms-1 me-1 col" name="allergy_desc_ar" id="std_medicine_desc" value="<?php echo e(old('allergy_desc_ar')); ?>"
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
                            
                            
                            <label class="mt-4"><?php echo e(__('student.have any health problem ?')); ?></label>
                            
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" name="have_health_problem"  id="healthProblem" value="<?php echo e(old('have_health_problem')); ?>" >
                                    <label class="form-label col rounded" for="healthProblem" id="healthProblem"></label>
                                </div>
                                
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
                                
                                <input type="text" class=" form-control ms-1 me-1 col" name="health_problem_desc" id="std_medicine_desc"
                                    aria-label="Text input with radio button" value="<?php echo e(old('health_problem_desc')); ?>" placeholder="desc in english">
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
                                
                                <input type="text" class=" form-control ms-1 me-1 col" name="health_problem_desc_ar" id="std_medicine_desc" value="<?php echo e(old('health_problem_desc_ar')); ?>"
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