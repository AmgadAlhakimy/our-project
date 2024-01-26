<?php $__env->startSection('content'); ?>
    <div class="my-table mt-5">
        <div class="table-header">

            
            <div class="row first-card ">
                <h4 class="col container-title mt-2"><?php echo e(__('DELETED CLASSES')); ?></h4>
                <div class="row col ">
                    <input class="col search2" placeholder="<?php echo e(__('public.search')); ?>">
                    <button class="col-1 save-button search-button "><?php echo e(__('public.search')); ?></button>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" ">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1"><?php echo e(__('public.id')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-2"><?php echo e(__('public.name')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-2"><?php echo e(__('public.cost')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-3"><?php echo e(__('public.educational level')); ?></div>
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
                    <?php $__currentLoopData = $classes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $class): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                        <tr>
                            <td><?php echo e($class->id); ?></td>
                            <td><?php echo e($class->name); ?></td>
                            <td><?php echo e($class->cost); ?></td>
                            <td><?php echo e(\App\Models\EducationalLevel::findorFail($class->edu_id)->name); ?></td>
                            <td><?php echo e($class->created_at); ?></td>
                            <td><?php echo e($class->updated_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('classes.restore',$class->id)); ?>" class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> <?php echo e(__('public.restore')); ?> </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete<?php echo e($class->id); ?>">
                                    <i class="fa-solid fa-trash"></i> <?php echo e(__('public.force delete')); ?>

                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?php echo e($class->id); ?>"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('public.force delete')); ?></h5>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo e(__('public.are you sure you want to delete').$class->name); ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <?php echo e(__('public.cancel')); ?></button>
                                                <form method="post" action="<?php echo e(route('classes.forceDelete',$class->id)); ?>">
                                                    <?php echo method_field('get'); ?>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic_dep/classes/deleted_classes.blade.php ENDPATH**/ ?>