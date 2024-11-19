<?php $__env->startSection('content'); ?>
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="table-header">

            <div class="row first-card ">
                <h4 class="col container-title mt-2"><?php echo e(__('DELETED ACTIVITIES')); ?> </h4>
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
        </div>
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <label for="" class=" n_rect">
                                <?php echo e(__('public.num')); ?>

                            </label>
                        </th>
                        <th class="th-head-1">
                            <button id="arrowButton" wire:click="ordering('id')" class="th-head-1 form-label ">
                                <?php echo e(__('public.id')); ?>

                                <?php if($arrow and $showArrow === 'id'): ?>
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                <?php elseif(!$arrow and $showArrow === 'id'): ?>
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                <?php endif; ?>
                            </button>
                        </th>
                        <th class="th-head-3">
                            <?php echo e(__('public.name')); ?>

                        </th>
                        <th class="th-head-2">
                            <?php echo e(__('public.location')); ?>

                        </th>
                        <th class="th-head-2">
                            <?php echo e(__('public.contact')); ?>

                        </th>
                        <th class="th-head-2">
                            <?php echo e(__('public.date')); ?>

                        </th>
                        <th class="th-head-3">
                            <?php echo e(__('public.note')); ?>

                        </th>
                        <th class="th-head-2">
                            <?php echo e(__('public.created at')); ?>

                        </th>
                        <th class="th-head-2">
                            <?php echo e(__('public.updated at')); ?>

                        </th>
                        <th colspan="2">
                            <div class="th-head-4"><?php echo e(__('public.processes')); ?></div>
                        </th>
                    </tr>
                    </thead>
                    <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
<<<<<<< HEAD

                            <td>
                                <div class="td_rect">
                                1
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->id); ?>

                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->name); ?>

                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->location); ?>

                                </div>
                            </td>
                            <td >
                                <div class="td_rect">
                                <?php echo e($activity->contact); ?>

                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->date); ?>

                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->note); ?>

                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->created_at); ?>

                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                <?php echo e($activity->updated_at); ?>

                                </div>
                            </td>
=======

                            <td><?php echo e($activity->id); ?></td>
                            <td><?php echo e($activity->name); ?></td>
                            <td><?php echo e($activity->location); ?></td>
                            <td ><?php echo e($activity->contact); ?> </td>
                            <td><?php echo e($activity->date); ?></td>
                            <td><?php echo e($activity->note); ?> </td>
                            <td><?php echo e($activity->created_at); ?></td>
                            <td><?php echo e($activity->updated_at); ?></td>
>>>>>>> 525501179e44f41411f81fc1c5f34bf9756c093b
                            <td>
                                <a href="<?php echo e(route('activities.restore',$activity->id)); ?>"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> <?php echo e(__('public.restore')); ?> </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete<?php echo e($activity->id); ?>">
                                    <i class="fa-solid fa-trash"></i> <?php echo e(__('public.force delete')); ?>

                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?php echo e($activity->id); ?>"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('public.force delete')); ?></h5>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo e(__('public.are you sure you want to delete').$activity->name); ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <?php echo e(__('public.cancel')); ?></button>
                                                <form method="post" action="<?php echo e(route('activities.forceDelete',$activity->id)); ?>">
                                                    <?php echo method_field('get'); ?>
                                                    <?php echo csrf_field(); ?>
                                                    <button type="submit" class="btn btn-primary"><?php echo e(__('public.ok')); ?></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic-dep/activities/deleted-activities.blade.php ENDPATH**/ ?>
