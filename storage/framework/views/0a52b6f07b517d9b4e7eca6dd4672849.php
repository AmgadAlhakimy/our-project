<?php $__env->startSection('content'); ?>
    <div class="my-table">

        
        
        
        <div class="table-header">
            
            <div class="row first-card ">
                <h4 class="col container-title mt-2"><?php echo e(__('teacher.absent children')); ?></h4>
                <div class="row first-card mt-4">
                    <form method="post" action="<?php echo e(route('students.search')); ?>">
                        <?php echo method_field('GET'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <label class="col-10">
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
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
        </div>
        
        <!-- table-hover table-striped -->
        <div class=" table-section ">
            <div class="card table-section ">
            <table class=" " >
                <thead>
                    <tr class="">
                        <th class="th-head-1"><?php echo e(__('public.id')); ?></th>
                        <th class="th-head-1"><?php echo e(__('public.name')); ?></th>
                        <th class="th-head-1"><?php echo e(__('public.photo')); ?></th>
                        <th class="th-head-1 "><?php echo e(__('public.absent')); ?></th>
                        <th class="th-head-1"><?php echo e(__('teacher.absent reason')); ?></th>
                        <th class="th-head-1"><?php echo e(__('teacher.departure time')); ?></th>
                        

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bolder">130</td>
                        <td>mohanad naser mansour</td>
                        <td><img class="student-img" src="../../../public/assets/images/layouts/skills-01.jpg" alt=""></td>
                        <td>
                            <div class=" mt-3">
                                <input class="chick_style mb-3" type="checkbox" name="have_health_problem"  id="healthProblem" value="<?php echo e(old('have_health_problem')); ?>" onchange="toggleInput()"  >
                                <label class="form-label  " for="healthProblem" id="healthProblem"></label>
                            </div>
                        </td>
                        <td><input type="text" class="form-control"></td>
                        <td>
                            <div class=" mt-3">
                                <input class="chick_style mb-3" type="checkbox" name="have_health_problem"  id="healthProblem" value="<?php echo e(old('have_health_problem')); ?>" onchange="toggleInput()"  >
                                <label class="form-label  " for="healthProblem" id="healthProblem"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        
        <div class=" mt-5 row">
            <div class="box col ">
                <input class="save-button me-5 ms-5 " type="submit" value="<?php echo e(__('public.save')); ?>">
                <input class="clear-button me-5 ms-5 " type="reset" value="<?php echo e(__('public.clear')); ?>">
            </div>
        </div>
        
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/teachers_affairs/absence/absent_student_class.blade.php ENDPATH**/ ?>