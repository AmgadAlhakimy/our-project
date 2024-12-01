<?php $__env->startSection('content'); ?>
    <div class="my-table">



        <div class="table-header">

            <div class="row first-card  ">
                <h4 class="col container-title mt-2"><?php echo e(__('teacher.Absence and Daily Book')); ?></h4>
                <div class="row first-card mt-4">
                    <form method="post" action="<?php echo e(route('students.search')); ?>">
                        <?php echo method_field('GET'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row ">
                            <label class="col-9">
                                <input type="text" required class="form-control "  name="search" value="<?php echo e(isset($search) ? $search : ''); ?>">
                            </label>
                            <button type="submit" class="col save-button "><?php echo e(__('public.search')); ?></button>
                        </div>
                    </form>
                </div>
            </div>


            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center">frist grade</h4>
                    <h4 class=" Names"> MATH</h4>
                </div>

                <a class="card-info card-info_2  col  save-button"
                    href='/children'>
                    <h4 class="text-center"><?php echo e(__('teacher.For All Class')); ?></h4>
                    <h4 class=" Names"> MATH</h4>
                </a>

                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>


            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="<?php echo e(old('sex')); ?>">
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
        </div>

        <!-- table-hover table-striped -->

        <form method="post" action="<?php echo e(route('students.search')); ?>">
            <?php echo method_field('GET'); ?>
            <?php echo csrf_field(); ?>
            <div class="table-header mt-3">

                <h4 class="col container-title "><?php echo e(__('teacher.For All Students')); ?> </h4>

                <div class="box row me-2 ms-2 mb-1 ">
                    <div class="notes col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                        <input class="form-control shadow" placeholder="<?php echo e(__('teacher.TO TAKE HOME')); ?>" id="" ></input>
                    </div>
                    <div class="notes col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                        <input class="form-control shadow" placeholder="<?php echo e(__('teacher.TO BRING TO SCHOOL')); ?>"  id="" ></input>
                    </div>
                    <div class="notes col-lg-12 col-md-12 col-sm-12 mt-1 mb-1">
                        <input placeholder="<?php echo e(__('teacher.NOTE')); ?>"class="form-control shadow"  ></input>
                    </div>
                </div>
            </div>

            <div class=" table-header mt-3">
                <div class="row">
                    <div class="cards_info_style col-lg-4 col-md-6 col-sm-12 mb-2">

                        <div class="row ">
                            <div class="box mb-1 mt-2 col">
                                <img  class=" cards_img" src="<?php echo e(URL::asset('assets/images/layouts/skills-02.jpg')); ?>" alt="skills"/>
                            </div>
                            <div class="text-center col row center_y_x me-1 ms-1">
                                <label class="col-12 cards_title mt-1 mb-1"> Emad nasr mansour </label>
                                <label class="col-12 cards_sup_title mt-1 mb-1">i7676</label>
                            </div>
                        </div>

                        <hr class=" ms-2 me-2 shadow">

                        <div class="box row me-2 ms-2 mb-1 ">
                            <div class="notes col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="<?php echo e(__('teacher.TO TAKE HOME')); ?>" id="" ></input>
                            </div>
                            <div class="notes col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="<?php echo e(__('teacher.TO BRING TO SCHOOL')); ?>"  id="" ></input>
                            </div>
                            <div class="notes col-lg-12 col-md-12 col-sm-12 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="<?php echo e(__('teacher.NOTE')); ?>" ></input>
                            </div>
                        </div>

                        <hr class=" ms-2 me-2 shadow">

                        <div class=" row me-4 ms-2 mb-1">
                            <div class="notes col-2 center_y_x">
                                <input class=" " type="checkbox" name="have_health_problem"  id="healthProblem" value="<?php echo e(old('have_health_problem')); ?>" onchange="toggleInput()" checked >
                                <label class="form-label  " for="healthProblem" id="healthProblem"></label>
                            </div>
                            <div class="notes col">
                                <input class="form-control shadow mb-1" placeholder=" <?php echo e(__('teacher.ABSENCE REASON')); ?>"  id="" ></input>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </form>








    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/teachers-affairs/daily/show_students.blade.php ENDPATH**/ ?>
