<?php $__env->startSection('content'); ?>
    <div class="my-table mt-5">
        <div class="table-header">

            
            <div class="table-header">

                
                <div class="row first-card ">
                    <h4 class="col container-title mt-2"><?php echo e(__('DELETED EDUCATIONAL LEVELS')); ?></h4>
                    <div class="row col ">
                        <input class="col search2" placeholder="<?php echo e(__('public.search')); ?>">
                        <button class="col-1 save-button search-button "><?php echo e(__('public.search')); ?></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section">
                <table class=" ">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1"><?php echo e(__('public.id')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-3"><?php echo e(__('public.name')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-3"><?php echo e(__('public.created at')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-3"><?php echo e(__('public.updated at')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-2"><?php echo e(__('public.processes')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-3"></div>
                        </th>
                        <th>
                            <div class="th-head-1"></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($level->id); ?></td>
                            <td><?php echo e($level->name); ?></td>
                            <td><?php echo e($level->created_at); ?></td>
                            <td><?php echo e($level->updated_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('educational_levels.restore',$level->id)); ?>"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> <?php echo e(__('public.restore')); ?> </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete<?php echo e($level->id); ?>">
                                    <i class="fa-solid fa-trash"></i> <?php echo e(__('public.force delete')); ?>

                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?php echo e($level->id); ?>"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('public.delete')); ?></h5>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo e(__('public.are you sure you want to delete').$level->name); ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <?php echo e(__('public.cancel')); ?></button>
                                                <form method="post"
                                                      action="<?php echo e(route('educational_levels.forceDelete',$level->id)); ?>">
                                                    <?php echo method_field('get'); ?>
                                                    <?php echo csrf_field(); ?>.
                                                    <button type="submit"
                                                            class="btn btn-primary"><?php echo e(__('public.ok')); ?></button>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic_dep/educational_levels/deleted_education_levels.blade.php ENDPATH**/ ?>