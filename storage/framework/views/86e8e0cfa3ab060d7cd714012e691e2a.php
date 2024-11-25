<?php $__env->startSection('content'); ?>
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="card table-section">
            <div class="row first-card mt-4">
                <form method="post" action="<?php echo e(route('teachers.search')); ?>">
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
            <table class=" ">
                <thead>
                <tr>
                    <th><div class="th-head-1"><?php echo e(__('public.id')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.name')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.photo')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.contact')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.gender')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.address')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.qualification')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.salary')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.major')); ?></div></th>
                    <th><div class="th-head-3"><?php echo e(__('public.note')); ?></div></th>
                    <th><div class="th-head-3"><?php echo e(__('public.created at')); ?></div></th>
                    <th><div class="th-head-3"><?php echo e(__('public.updated at')); ?></div></th>
                    <th><div class="th-head-2"><?php echo e(__('public.processes')); ?></div></th>
                    <th><div class="th-head-2"></div></th>
                    <th><div class="th-head-1"></div></th>
                </tr>
                </thead>
                <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tbody>
                    <tr>
                        <td><?php echo e($teacher->id); ?></td>
                        <td><?php echo e($teacher->name); ?></td>
                        <td><img src="<?php echo e(asset($teacher->photo)); ?>"
                                 class="student-img" alt="photo"></td>
                        <td><?php echo e($teacher->contact); ?></td>
                        <td><?php echo e($teacher->gender); ?></td>
                        <td><?php echo e($teacher->address); ?></td>
                        <td><?php echo e($teacher->qualification); ?></td>
                        <td><?php echo e($teacher->salary); ?></td>
                        <td><?php echo e($teacher->major); ?></td>
                        <td><?php echo e($teacher->note); ?></td>
                        <td><?php echo e($teacher->created_at); ?></td>
                        <td><?php echo e($teacher->updated_at); ?></td>
                        <td>
                            <a href="<?php echo e(route('teachers.edit',$teacher->id)); ?>"
                               class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> <?php echo e(__('public.edit')); ?> </a>
                        </td>
                        <td>
                            <button class="btn my-clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete<?php echo e($teacher->id); ?>">
                                <i class="fa-solid fa-trash"></i> <?php echo e(__('public.delete')); ?>

                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete<?php echo e($teacher->id); ?>"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('public.delete')); ?></h5>
                                        </div>
                                        <div class="modal-body">
                                            <?php echo e(__('public.are you sure you want to delete').$teacher->name); ?>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                <?php echo e(__('public.cancel')); ?></button>
                                            <form method="post" action="<?php echo e(route('teachers.destroy',$teacher->id)); ?>">
                                                <?php echo method_field('DELETE'); ?>
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="btn btn-primary"><?php echo e(__('public.ok')); ?></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/employees_affairs/teachers/display-teachers.blade.php ENDPATH**/ ?>
