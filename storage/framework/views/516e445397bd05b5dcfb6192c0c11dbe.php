<?php $__env->startSection('content'); ?>
    <div class="my-table">
        
        
        <div class="table-header">
            
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Student Information</h4>
                <div class="row frist-card mt-4 ">
                    <form method="get" action="/search">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <label class="col-10">
                                <input type= "text" required class="form-control "  name="search" value="<?php echo e(isset($search) ? $search : ''); ?>">
                            </label>
                            <button type="submit" class="col save-button "><?php echo e(__('public.search')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
            
                    <form method="get" action="<?php echo e(route('students.create')); ?>">
            <div class="box col-lg-12 col-md-12 ">
                <label for="sex"></label><select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" >
                        <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <button class="" type="submit">
                                <option class="text-center" value="<?php echo e($class->id); ?>"><?php echo e($class->name); ?>

                                </option>
                                    </button>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                </form>
            </div>
            

            <div class="cards-container  third-card">
                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2"><?php echo e(__('public.teacher')); ?></h4>
                    <h4 class=" Names">mohammad mohsen</h4>
                </div>

                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2"><?php echo e(__("public.month")); ?></h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
        </div>
        
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" " >
                    <thead>
                    <tr>
                        <th ><div class="th-head-1  " ><?php echo e(__('public.id')); ?></div></th>
                        <th ><div class="th-head-3" ><?php echo e(__('public.name')); ?></div></th>
                        <th ><div class="th-head-1" >photo</div></th>
                        <th ><div class="th-head-3" ><?php echo e(__('public.address')); ?></div></th>
                        <th ><div class="th-head-1" >sex</div></th>
                        <th ><div class="th-head-2" >birth date</div></th>
                        <th ><div class="th-head-2" >birth place</div></th>
                        <th ><div class="th-head-2" ><?php echo e(__('public.class')); ?></div></th>
                        <th ><div class="th-head-2" ><?php echo e(__('public.created at')); ?></div></th>
                        <th ><div class="th-head-2" ><?php echo e(__('public.updated at')); ?></div></th>
                        <th ><div class="th-head-3" ><?php echo e(__('student.parents')); ?></div></th>
                        <th colspan="2"><div class="th-head-4" ><?php echo e(__('public.processes')); ?></div></th>
                        <th ><div class="th-head-2" >more info</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student->id); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><img src="<?php echo e(asset($student->photo)); ?>"
                                class="student-img" alt="student's photo"></td>
                            <td><?php echo e($student->address); ?></td>
                            <td><?php echo e($student->sex); ?></td>
                            <td><?php echo e($student->birthdate); ?></td>
                            <td><?php echo e($student->place_of_birth); ?></td>
                            <td><?php echo e(App\Models\Classs::findorfail($student->class_id)->name); ?></td>
                            <td><?php echo e($student->created_at); ?></td>
                            <td><?php echo e($student->updated_at); ?></td>
                            <td><button class="btn save-button btn-info  w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td>

                            <td>
                                <a href="<?php echo e(route('students.edit',$student->id)); ?>"
                                    class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> <?php echo e(__('public.edit')); ?> </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete<?php echo e($student->id); ?>">
                                    <i class="fa-solid fa-trash"></i> <?php echo e(__('public.delete')); ?>

                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="delete<?php echo e($student->id); ?>"
                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('public.delete')); ?></h5>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo e(__('public.are you sure you want to delete').$student->name); ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <?php echo e(__('public.cancel')); ?></button>
                                                <form method="post" action="<?php echo e(route('students.destroy',$student->id)); ?>">
                                                    <?php echo method_field('DELETE'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('public.ok')); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            
                            <td>
                                <a href="<?php echo e(route('students.edit',$student->id)); ?>"
                                    class="btn save-button btn-info w-100">
                                    <i class="fa-solid fa-info-circle"></i> <?php echo e(__('public.edit')); ?> </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students_affairs/students/show_students.blade.php ENDPATH**/ ?>