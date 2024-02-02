<?php $__env->startSection('content'); ?>
    <?php $counter = 1 ?>
        <!--    --><?php //$month = "2024-01-31" ?><!---->
    <?php $__currentLoopData = $marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $month = $mark->created_at->format('F') ?>
            <?php $subject = $mark->subject->name ?>
            <?php $classroom = $mark->classroom ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="my-table">
        
        
        <div class="table-header">
            
            <div class="row first-card ">
                <h4 class="col container-title mt-2"> Outcome for the month</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="<?php echo e(route('marks.search')); ?>">
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

            
            <form method="post" action="<?php echo e(route('marks.update',$classroom->id)); ?>">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="cards-container  third-card">
                    <div class="card-info card-info_2 col ">
                        <h4 class=" Names"> <?php echo e($classroom->name); ?></h4>
                        <h4 class=" text-center"><?php echo e($subject); ?></h4>
                    </div>

                    <div class="card-info card-info_2 col ">
                        <h4 class=" text-center">Month</h4>
                        <h4 class=" Names"><?php echo e($month); ?></h4>
                    </div>
                </div>

                
                <!-- table-hover table-striped -->
                <div class=" table-section ">
                    <div class="card table-section ">
                        <table class=" ">
                            <thead>
                            <tr class="">
                                <th>
                                    <div class="th-head-1 ">id</div>
                                    <div></div>
                                </th>
                                
                                <th>
                                    <div class="th-head-2">Name</div>
                                </th>
                                <th>
                                    <div class="th-head-1">photo</div>
                                </th>
                                <th>
                                    <div class="th-head-1">Exam</div>
                                    <div>60</div>
                                </th>
                                <th>
                                    <div class="th-head-1">H.W</div>
                                    <div></div>
                                    20
                                </th>
                                <th>
                                    <div class="th-head-1">Oral.E</div>
                                    <div>10</div>
                                </th>
                                <th>
                                    <div class="th-head-1">سلوك</div>
                                    <div>10</div>
                                </th>
                                <th>
                                    <div class="th-head-1 ">Total</div>
                                    <div>100</div>
                                </th>
                                <th>
                                    <div class="th-head-1">محصلة</div>
                                    <div>20</div>
                                </th>
                                <th>
                                    <div class="th-head-1">Percent</div>
                                    <div>100%</div>
                                </th>
                                <th>
                                    <div class="th-head-1"></div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $marks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mark): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    
                                    
                                    <td><?php echo e($mark->student->id); ?></td>
                                    <td><?php echo e($mark->student->name); ?></td>
                                    <td><img src="<?php echo e($mark->student->photo); ?>" class="student-img" alt=""></td>
                                    <td><input type="number" value="<?php echo e($mark->exam); ?>" name="exam[]" class=" form-control "
                                               id='Exam-Mark' placeholder="_" min="0" max="60">
                                        <?php $__errorArgs = ['exam'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="form-text text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                                    <td><input type="number" value="<?php echo e($mark->homework); ?>" name="homework[]"
                                               class=" form-control "
                                               id='HW-Mark' placeholder="_" min="0" max="20">
                                        <?php $__errorArgs = ['homework'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="form-text text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                                    <td><input type="number" value="<?php echo e($mark->oral); ?>" name="oral[]" class=" form-control "
                                               id='Oral-Mark' placeholder="_" min="0" max="10">
                                        <?php $__errorArgs = ['oral'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="form-text text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                                    <td><input type="number" value="<?php echo e($mark->behavior); ?>" name="behavior[]"
                                               class=" form-control "
                                               id='behavior-Mark' placeholder="_" min="0" max="10">
                                        <?php $__errorArgs = ['behavior'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <small class="form-text text-danger"><?php echo e($message); ?></small>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></td>
                                    <td><label for="">90</label></td>
                                    <td><label for="">18</label></td>
                                    <td><label for="">90%</label></td>
                                </tr>
                                    <?php $counter++ ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>

                    </div>
                </div>

                <div class=" box row mt-5">
                    <div class=" col mt-1 ">
                        
                        <input class="save-button  " type="" value="<?php echo e(__('public.ترحيل')); ?>">
                    </div>
                    <div class=" col mt-1">
                        
                        <input class="save-button " type="submit" value="<?php echo e(__('public.save')); ?>">
                    </div>
                    <div class="  col mt-1">
                        <input class="clear-button " type="reset" value="<?php echo e(__('public.clear')); ?>">
                    </div>
                </div>
            </form>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/teachers_affairs/marks/insert_marks.blade.php ENDPATH**/ ?>