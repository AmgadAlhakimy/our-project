


<?php $__env->startSection('content'); ?>
    <div class="my-table">



        <div class="table-header">

            <div class="row first-card  ">
                <h4 class="col container-title mt-2"><?php echo e(__('teacher.Absence and Daily Book')); ?></h4>
                <div class="row first-card mt-4">
                    <form method="post" action="">
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
        <div class="table-section">
            <div class="card table-section ">
                <table class=" " >
                    <thead>
                    <tr class="">
                        <th ><div class="th-head-1" ><?php echo e(__('public.id')); ?></div></th>
                        <th ><div class="th-head-3" ><?php echo e(__('public.name')); ?></div></th>
                        <th ><div class="th-head-1" ><?php echo e(__('public.photo')); ?></div></th>
                        <th ><div class="th-head-2" ><?php echo e(__('student.Daily Follow-Up')); ?></div></th>
                        <th ><div class="th-head-1" ></div></th>
                    </tr>
                    </thead>
                    <tbody>
<<<<<<< HEAD




                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="fw-bolder"><?php echo e($student->id); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><img class="student-img" src="<?php echo e($student->photo); ?>" alt=""></td>
=======

                    <tbody>
                        <tr class="test_1">
                            <td>77</td>
                            <td>kj;lk;l</td>
                            <td><img src=""
                                class="student-img" alt="photo"></td>
>>>>>>> refs/remotes/origin/main
                            <td>
                                <a href="<?php echo e(route('follow_up_students.createNote', $student->id)); ?>" class="btn save-button btn-light me-5 w-100">
                                    <?php echo e(__('student.Daily Follow-Up')); ?> (icon)<i class="ms-3 fa-solid fab-pen"></i></a></td>
                            <td></td>
                        </tr>
<<<<<<< HEAD
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
=======






>>>>>>> refs/remotes/origin/main
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/teachers-affairs/daily/show_children.blade.php ENDPATH**/ ?>
