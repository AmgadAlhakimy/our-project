<?php $__env->startSection('content'); ?>
    <div class="my-table">


        <div class="table-header">

            <div class="row first-card ">
                <h4 class="col container-title mt-2">Students Information</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="<?php echo e(route('students.search')); ?>">
                        <?php echo method_field('GET'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <label class="col-10">
                                <input type="text" required class="form-control " name="search"
                                       value="<?php echo e(isset($search) ? $search : ''); ?>">
                            </label>
                            <button type="submit" class="col save-button "><?php echo e(__('public.search')); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()"
                    id="select_bt"><?php echo e(__('public.select')); ?></button>
            <button class="save-button btn-danger me-1 ms-1"><?php echo e(__('public.delete all')); ?></button>
        </div>
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>

                        <th class=" me-4 ms-4">
                            <input type="checkbox" id="select_all"
                                   style="display: none">
                        </th>
                        <th class="th-head-1  "><?php echo e(__('public.id')); ?></th>
                        <th class="th-head-3"><?php echo e(__('public.name')); ?></th>
                        <th class="th-head-1"><?php echo e(__('public.photo')); ?></th>
                        <th class="th-head-3"><?php echo e(__('public.address')); ?></th>
                        <th class="th-head-1"><?php echo e(__('student.gender')); ?></th>
                        <th class="th-head-2"><?php echo e(__('student.birth date')); ?></th>
                        <th class="th-head-2"><?php echo e(__('student.birth place')); ?></th>
                        <th class="th-head-2"><?php echo e(__('public.class')); ?></th>
                        <th class="th-head-2"><?php echo e(__('public.created at')); ?></th>
                        <th class="th-head-2"><?php echo e(__('public.updated at')); ?></th>
                        <th colspan="2">
                            <div class="th-head-4"><?php echo e(__('public.processes')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-2"><?php echo e(__('student.more info')); ?></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="test_1">
                            <td><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none">
                            </td>
                            <td><?php echo e($student->id); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><img src="<?php echo e(asset('storage/' . $student->photo)); ?>"
                                    class="student-img" alt="photo"></td>
                            <td><?php echo e($student->address); ?></td>
                            <td><?php echo e($student->gender); ?></td>
                            <td><?php echo e($student->birthdate); ?></td>
                            <td><?php echo e($student->place_of_birth); ?></td>
                            <td><?php echo e($student->classroom->name); ?></td>
                            <td><?php echo e($student->created_at); ?></td>
                            <td><?php echo e($student->updated_at); ?></td>

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
                                                <h5 class="modal-title"
                                                    id="exampleModalLabel"><?php echo e(__('public.delete')); ?></h5>
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
                                                    <button type="submit"
                                                            class="btn btn-primary"><?php echo e(__('public.ok')); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <a href="<?php echo e(route('students.more',$student->id)); ?>"
                                   class="btn save-button btn-info w-100">
                                    <i class="fa-solid fa-info-circle"></i> <?php echo e(__('CreateStudent.more info')); ?> </a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php echo e($students->links()); ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students-affairs/students/show_students.blade.php ENDPATH**/ ?>
