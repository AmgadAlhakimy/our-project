<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section ">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
                <h3 class="container-title"><?php echo e(__('CreateStudent.update CreateStudent: ').$student->name); ?></h3>
                <form method="post" action="<?php echo e(route('students.update', $student->id)); ?>" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <!-- Start personal info  -->
                <h3 class="container-title"><?php echo e(__('CreateStudent.CreateStudent info')); ?></h3>
                <div class="container containers-style ">
                    <div class="row">

                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                            for="english-name"><?php echo e(__("CreateStudent.CreateStudent's name in arabic")); ?></label>
                            <input type="text" class="form-control " id='english-name' name="name_ar" value="<?php echo e($student->getTranslation('name','ar')); ?>">
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
                                for="arab-name"><?php echo e(__("CreateStudent.CreateStudent's name in english")); ?></label>
                            <input type="text" class="form-control " id='arab-name' name="name"  value="<?php echo e($student->getTranslation('name','en')); ?>">
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

                        <div class="box row me-2 mb-3 col-lg-6 col-md-12 ">
                            <label class="" for="photo"><?php echo e(__('change students photo')); ?></label>
                            <input type="file" class="form-control col-8" id="photo" name="photo" value="<?php echo e($student->photo); ?>">
                            <img src="<?php echo e(asset($student->photo)); ?>"
                                 class="student-img col-4" alt="no photo">
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
                            <label for="address"><?php echo e(__('CreateStudent.addresses')); ?></label>
                            <div class="col-lg-6 col-md-6">
                                <span class=" text-center title-3 "><?php echo e(__("CreateStudent.CreateStudent's address in arabic")); ?></span>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar"  value="<?php echo e($student->getTranslation('address','ar')); ?>">
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
                                    class=" text-center title-3 "><?php echo e(__("CreateStudent.CreateStudent's address in english")); ?></span>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address"  value="<?php echo e($student->getTranslation('address','en')); ?>">
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
                            <label for="gender"><?php echo e(__('CreateStudent.gender')); ?></label>
                            <select class="col form-select form-control" id="gender" name="gender">
                                <option class="text-center"
                                        value="<?php echo e(__('CreateStudent.male')); ?>" <?php if($student->getTranslation('gender','en') == 'male'): ?> selected <?php endif; ?>>
                                    <?php echo e(__('CreateStudent.male')); ?></option>
                                <option class="text-center"
                                        value="<?php echo e(__('CreateStudent.female')); ?>"  <?php if($student->getTranslation('gender','en') == 'female'): ?> selected <?php endif; ?>>
                                    <?php echo e(__('CreateStudent.female')); ?></option>
                            </select>
                            <?php $__errorArgs = ['gender'];
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
                            <label for="age"><?php echo e(__('CreateStudent.birthdate')); ?></label>
                            <input type="date" class="form-control" id="age" name="birthdate" value="<?php echo e($student->birthdate); ?>">
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
                            <label for="english-birth-place"><?php echo e(__('CreateStudent.place of birth in arabic')); ?></label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar"
                                   value="<?php echo e($student->getTranslation('place_of_birth','ar')); ?>">
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
                            <label for="arabic-birth-place"><?php echo e(__('CreateStudent.place of birth in english')); ?></label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth"
                                   value="<?php echo e($student->getTranslation('place_of_birth','en')); ?>">
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
                            <label for="className " class="form-label"><?php echo e(__('CreateStudent.class')); ?></label>
                            <select id="className " class="form-control" name="classroom_id">
                                <?php $__currentLoopData = $classrooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $classroom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-center" value="<?php echo e($classroom->id); ?>"
                                    <?php if($classroom->id == $student->classroom_id): ?> selected <?php endif; ?>>
                                        <?php echo e($classroom->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['classroom_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="form-text text-danger"><?php echo e($message); ?></small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            <input type="text" value="<?php echo e($student->relative->id); ?>" name="relative_id">
                        </div>

                    </div>
                </div>
                <!-- End personal info  -->

                <!-- Start health info  -->
                <h3 class="container-title"><?php echo e(__('CreateStudent.health info')); ?></h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-2"><?php echo e(__('CreateStudent.does the CreateStudent')); ?></h4>
                            <label class="mt-3"><?php echo e(__('CreateStudent.take any medicine ?')); ?></label>
                            <div class="input-group mt-2 mb-2">
                                <input type="text" name="medicine_desc" id="std_medicine_desc" class="form-control"
                                    aria-label="Text input with radio button"  value="<?php echo e($student->getTranslation('medicine_desc','en')); ?>">
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

                                <input type="text" name="medicine_desc_ar" id="std_medicine_desc" class="form-control" value="<?php echo e($student->getTranslation('medicine_desc','ar')); ?>"
                                    aria-label="Text input with radio button">
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
                            <label class="mt-3"><?php echo e(__('CreateStudent.have an allergy ?')); ?></label>
                            <div class="input-group mt-2 mb-2">
                                <input type="text" name="allergy_desc" id="std_medicine_desc" class="form-control" value="<?php echo e($student->getTranslation('allergy_desc','en')); ?>"
                                    aria-label="Text input with radio button" >
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

                                <input type="text" name="allergy_desc_ar" id="std_medicine_desc" class="form-control" value="<?php echo e($student->getTranslation('allergy_desc','ar')); ?>"
                                    aria-label="Text input with radio button" >
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
                            <label class="mt-3"><?php echo e(__('CreateStudent.have any health problem ?')); ?></label>
                            <div class="input-group mt-2 mb-2">

                                <input type="text" name="health_problem_desc" id="std_medicine_desc"
                                    class="form-control" value="<?php echo e($student->getTranslation('health_problem_desc','en')); ?>"
                                    aria-label="Text input with radio button" >
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
                                    class="form-control" value="<?php echo e($student->getTranslation('health_problem_desc','ar')); ?>"
                                    aria-label="Text input with radio button">
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
                <h3 class="container-title"><?php echo e(__('CreateStudent.other info')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note"><?php echo e(__('CreateStudent.note')); ?></label>
                            <textarea name="note" class="form-control" id="std_Note" cols="50" rows="5"><?php echo e($student->note); ?></textarea>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="<?php echo e(__('public.update')); ?>">
                    </div>
                    <div class="box  col">
                        <a href="<?php echo e(route('students.index')); ?>" class="btn clear-button"><i
                                class="fa-solid fa-ban"></i> <?php echo e(__('public.cancel')); ?></a>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
    <script>

    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students-affairs/students/edit_student.blade.php ENDPATH**/ ?>
