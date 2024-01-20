

<?php $__env->startSection('content'); ?>
    <div class="my-table">

        
        
        <div class="table-header">
            
            <div class="row frist-card ">
                <h4 class="col container-title mt-2">Student class</h4>
                <div class="row col ">
                    <input class="col search2" placeholder="<?php echo e(__('public.search')); ?>">
                    <button class="col-1 save-button search-button "><?php echo e(__('public.search')); ?></button>
                </div>
            </div>
            
            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="<?php echo e(old('sex')); ?>">
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
            

            <div class="cards-container  third-card">
                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Techer</h4>
                    <h4 class=" Names">mohammad mohsen</h4>
                </div>

                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Month</h4>
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
                        <th ><div class="th-head-1 " >id</div></th>
                        <th ><div class="th-head-3" >Name</div></th>
                        <th ><div class="th-head-2" >photo</div></th>
                        <th ><div class="th-head-3" >student info </div></th>
                        <th ><div class="th-head-3" >Daily follow-up</div></th>
                        <th ><div class="th-head-1" ></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bolder">130</td>
                        <td>mohanad naser mansour</td>
                        <td><img class="student-img" src="../../../public/assets/images/layouts/skills-01.jpg" alt=""></td>
                        <td><button class="save-button btn-light w-100">Student info <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="btn save-button btn-light me-5 w-100">Follow-up notbook<i class="ms-3 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/teatchers/daily/student-list.blade.php ENDPATH**/ ?>