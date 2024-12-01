<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section ">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('students.store')); ?>">
                <?php echo csrf_field(); ?>
                <!-- Start personal info  -->
                <h3 class="container-title"><?php echo e(__('CreateStudent.CreateStudent info')); ?></h3>
                <div class="container containers-style ">
                    <div class="row">

                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                            for="english-name"><?php echo e(__("CreateStudent.CreateStudent's name in arabic")); ?></label>
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
                                for="arab-name"><?php echo e(__("CreateStudent.CreateStudent's name in english")); ?></label>
                            <input type="text" class="form-control " id='arab-name' name="name">
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
                            <label class="" for="photo"><?php echo e(__('CreateStudent.photo')); ?></label>
                            <input type="file" class="form-control " id="photo" name="photo">
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
                                    class=" text-center title-3 "><?php echo e(__("CreateStudent.CreateStudent's address in english")); ?></span>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address">
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
                            <label for="sex"><?php echo e(__('CreateStudent.sex')); ?></label>
                            <select class="col form-select form-control" id="sex" name="sex">
                                <option class="text-center"
                                        value="<?php echo e(__('CreateStudent.male')); ?>"><?php echo e(__('CreateStudent.male')); ?></option>
                                <option class="text-center"
                                        value="<?php echo e(__('CreateStudent.female')); ?>"><?php echo e(__('CreateStudent.female')); ?></option>
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
                            <label for="age"><?php echo e(__('CreateStudent.birthdate')); ?></label>
                            <input type="date" class="form-control" id="age" name="birthdate">
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
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar">
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
                            <label for="className " class="form-label"><?php echo e(__('CreateStudent.class')); ?></label>
                            <select id="className " class="form-control" name="class">

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
                <h3 class="container-title"><?php echo e(__('CreateStudent.parent info')); ?></h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-father"><?php echo e(__("CreateStudent.father's name in arabic")); ?></label>
                            <input type="text" class="form-control" id='arab-father'>
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="english-father"><?php echo e(__("CreateStudent.father's name in english")); ?></label>
                            <input type="text" class="form-control" id='english-father'>
                        </div>
                        <!-- father work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="arab-work"><?php echo e(__("CreateStudent.father's work in arabic")); ?></label>
                            <input type="text" class="form-control" id='arab-work'>
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="work"><?php echo e(__("CreateStudent.father's work in english")); ?></label>
                            <input type="text" class="form-control" id='work'>
                        </div>
                        <!-- father contacts  -->
                        <div class="box ">
                            <label for="f-numbers"><?php echo e(__("CreateStudent.father's contacts")); ?></label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='f-numbers'>
                                <input type="number" class="col form-control me-2 ms-2" id='f-numbers'>
                            </div>
                        </div>
                        <!-- mother name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-mother-name"><?php echo e(__("CreateStudent.mother's name in arabic")); ?></label>
                            <input type="text" class="form-control" id='arab-mother-name'>
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="english-mother-name"><?php echo e(__("CreateStudent.mother's name in english")); ?></label>
                            <input type="text" class="form-control" id='english-mother-name'>
                        </div>
                        <!-- mother work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="arab-mother-work"><?php echo e(__("CreateStudent.mother's work in arabic")); ?></label>
                            <input type="text" class="form-control" id='arab-mother-work'>
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="work"><?php echo e(__("CreateStudent.mother's work in english")); ?></label>
                            <input type="text" class="form-control" id='work'>
                        </div>
                        <!-- mother contacts  -->
                        <div class="box ">
                            <label for="m-numbers"><?php echo e(__("CreateStudent.mother's contacts")); ?></label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers'>
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers'>
                            </div>
                        </div>
                        <!-- garden name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-a"><?php echo e(__('CreateStudent.next to kin name in arabic')); ?></label>
                            <input type="text" class="form-control" id='name-a'>
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-e"><?php echo e(__('CreateStudent.next to kin name in english')); ?></label>
                            <input type="text" class="form-control" id='name-e'>
                        </div>
                        <!-- garden relationship -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-a"><?php echo e(__('CreateStudent.next to kin relationship in arabic')); ?></label>
                            <input type="text" class="form-control" id='relation-a'>
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-e"><?php echo e(__('CreateStudent.next to kin relationship in english')); ?></label>
                            <input type="text" class="form-control" id='relation-e'>
                        </div>
                        <!-- garden number  -->
                        <div class="box col">
                            <label for="number"><?php echo e(__('CreateStudent.next to kin contact')); ?></label>
                            <input type="number" class="form-control" id='number'>
                        </div>
                    </div>
                </div>
                <!-- End parent info  -->

                <!-- Start health info  -->
                <h3 class="container-title"><?php echo e(__('CreateStudent.health info')); ?></h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-2"><?php echo e(__('CreateStudent.does the CreateStudent')); ?></h4>
                            <label class="mt-4"><?php echo e(__('CreateStudent.take any medicine ?')); ?></label>


                                <div class="row ">
                                    <div class="col-lg-1 col-md-2 col-ms-1 mt-3 ">
                                        <input class=" col" type="checkbox" name="take_medicine" id="myCheckbox" onchange="toggleInput()">
                                        <label class="form-label col " for="takeMedicine"><?php echo e(__('CreateStudent.yes')); ?></label>
                                    </div>
                                    <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc" id=" myInput"
                                        placeholder="desc in english" >

                                    <input type="text" class=" form-control ms-3 me-3 col" name="medicine_desc_ar" id=" myInput"
                                        placeholder="desc in arabic"  >
                                </div>


                            <label class="mt-4"><?php echo e(__('CreateStudent.have an allergy ?')); ?></label>

                            <div class="row ">
                                <div class="col-lg-1 col-md-2 col-ms-1 mt-3 ">
                                    <input class=" col" type="checkbox" name="take_medicine" id="myCheckbox" onchange="toggleInput()">
                                    <label class="form-label col " for="takeMedicine"><?php echo e(__('CreateStudent.yes')); ?></label>
                                </div>
                                <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc" id=" myInput"
                                    placeholder="desc in english" >

                                <input type="text" class=" form-control ms-3 me-3 col" name="medicine_desc_ar" id=" myInput"
                                    placeholder="desc in arabic"  >
                            </div>

                            <label class="mt-4"><?php echo e(__('CreateStudent.have any health problem ?')); ?></label>

                            <div class="row ">
                                <div class="col-lg-1 col-md-2 col-ms-1 mt-3 ">
                                    <input class=" col" type="checkbox" name="take_medicine" id="myCheckbox" onchange="toggleInput()">
                                    <label class="form-label col " for="takeMedicine"><?php echo e(__('CreateStudent.yes')); ?></label>
                                </div>
                                <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc" id=" myInput"
                                    placeholder="desc in english" >

                                <input type="text" class=" form-control ms-3 me-3 col" name="medicine_desc_ar" id=" myInput"
                                    placeholder="desc in arabic"  >
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
                            <textarea name="note" class="form-control" id="std_Note" cols="50" rows="5"></textarea>
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

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students/create_student.blade.php ENDPATH**/ ?>
