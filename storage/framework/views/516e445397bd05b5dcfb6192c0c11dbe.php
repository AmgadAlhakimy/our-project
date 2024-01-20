<?php $__env->startSection('content'); ?>
    <div class="my-table">
        
        <div class="table-header">
            
            <div class="row frist-card ">
                <h4 class="col container-title mt-2">Student Information</h4>
                <div class="row col ">
                    <input class=" col   search2" placeholder="SEARCH">
                    <button class="col-1 save-button search-button">Search</button>
                </div>
            </div>
            
            <div class="card-info second-card mb-4 mt-4 ms-2 me-2 ">
                <h3 class="fw-bolder  Names">Quran Karem</h3>
            </div>
            
            <div class="cards-container  third-card">
                <div class="card-info col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Techer</h4>
                    <h4 class=" Names">mohammad mohsen</h4>
                </div>
                <div class="card-info  col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Month</h4>
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
                        <th scope="col"><div class="th-head-1  " >id</div></th>
                        <th scope="col"><div class="th-head-3" >Name</div></th>
                        <th scope="col"><div class="th-head-2" >photo</div></th>
                        <th scope="col"><div class="th-head-4" >address</div></th>
                        <th scope="col"><div class="th-head-1" >sex</div></th>
                        <th scope="col"><div class="th-head-2" >birth date</div></th>
                        <th scope="col"><div class="th-head-3 " >place of birth</div></th>
                        <th scope="col"><div class="th-head-3" >take medicine</div></th>
                        <th scope="col"><div class="th-head-3" >medicine description</div></th>
                        <th scope="col"><div class="th-head-3" >have allergy</div></th>
                        <th scope="col"><div class="th-head-3" >allergy description</div></th>
                        <th scope="col"><div class="th-head-3" >health problem</div></th>
                        <th scope="col"><div class="th-head-4 ">health problem description</div> </th>
                        <th scope="col"><div class="th-head-2" >class</div></th>
                        <th scope="col"><div class="th-head-4" >note</div></th>
                        <th scope="col"><div class="th-head-3" >Created at</div></th>
                        <th scope="col"><div class="th-head-3" >Updated at</div></th>
                        <th scope="col"><div class="th-head-2" >processes</div></th>
                        <th scope="col"><div class="th-head-1" ></div></th>
                        <th scope="col"><div class="th-head-1" ></div></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($student->id); ?></td>
                            <td><?php echo e($student->name); ?></td>
                            <td><img src="<?php echo e(asset($student->photo)); ?>"
                                     width="50" height="50" alt="student's photo"></td>
                            <td><?php echo e($student->address); ?></td>
                            <td><?php echo e($student->sex); ?></td>
                            <td><?php echo e($student->birthdate); ?></td>
                            <td><?php echo e($student->place_of_birth); ?></td>
                            <td><?php echo e($student->take_medicine); ?></td>
                            <td><?php echo e($student->medicine_desc); ?></td>
                            <td><?php echo e($student->have_allergy); ?></td>
                            <td><?php echo e($student->allergy_desc); ?></td>
                            <td><?php echo e($student->have_health_problem); ?></td>
                            <td><?php echo e($student->health_problem_desc); ?></td>
                            <td><?php echo e($student->class_id); ?></td>
                            <td><?php echo e($student->note); ?></td>
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
                            <td></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students_affairs/students/show_students.blade.php ENDPATH**/ ?>