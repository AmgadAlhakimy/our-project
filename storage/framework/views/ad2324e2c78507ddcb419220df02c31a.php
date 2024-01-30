<?php $__env->startSection('content'); ?>
    <div class="my-table mt-5">

        
        
        <div class="table-header">
            
            <h4 class="col container-title mt-2">Subject Information</h4>
            <div class="row first-card mt-4">
                <form method="post" action="<?php echo e(route('subjects.search')); ?>">
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
                            <div class="th-head-2"><?php echo e(__('public.created at')); ?></div>
                        </th>
                        <th>
                            <div class="th-head-2"><?php echo e(__('public.updated at')); ?></div>
                        </th>
                        <th colspan="2">
                            <div class="th-head-4"><?php echo e(__('public.processes')); ?></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($Subject->id); ?></td>
                            <td><?php echo e($Subject->name); ?></td>
                            <td><?php echo e($Subject->created_at); ?></td>
                            <td><?php echo e($Subject->updated_at); ?></td>
                            <td>
                                <a href="<?php echo e(route('subjects.edit',$Subject->id)); ?>"
                                class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> <?php echo e(__('public.edit')); ?> </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete<?php echo e($Subject->id); ?>">
                                    <i class="fa-solid fa-trash"></i> <?php echo e(__('public.delete')); ?>

                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete<?php echo e($Subject->id); ?>"
                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('public.delete')); ?></h5>
                                            </div>
                                            <div class="modal-body">
                                                <?php echo e(__('public.are you sure you want to delete').$Subject->name); ?>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <?php echo e(__('public.cancel')); ?></button>
                                                <form method="post" action="<?php echo e(route('subjects.destroy',$Subject->id)); ?>">
                                                    <?php echo method_field('DELETE'); ?>
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

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic_dep/subjects/index_subjects.blade.php ENDPATH**/ ?>