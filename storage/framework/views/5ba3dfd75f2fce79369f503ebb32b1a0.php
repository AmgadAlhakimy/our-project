<?php $__env->startSection('content'); ?>
    <section class="section card-body">
        <?php if(Session::has('success')): ?>
            <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('success')); ?>

            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo e(route('follow_up_children.store')); ?>">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="student_id" value="<?php echo e($student->id); ?>">

            <!-- Start personal info  -->

            <div class="container containers-style mb-3   head-name">
                <div class="test-2  col-lg-8 col-md-8 col-sm-9 ">
                    <h1 class="topic-name cardinfo  pt-3"><?php echo e($student->name); ?></h1>
                    <h3 class="topic-title cardinfo  pb-3"><?php echo e($student->classroom->name); ?></h3>
                </div>

                <div class=" ">
                    <img class=" student-img " src="<?php echo e($student->photo); ?>" alt="">
                    <h3 class=" topic-name  row-center"><?php echo e($student->id); ?></h3>
                </div>
            </div>
            <h3 class="container-title">HOMEWORK - ASSIGNMENT</h3>

                <div class="container containers-style">

                <div class="row">
                    <!-- 5 -->
                    <div class="box row">
                        <!-- 1 -->
                        <?php $__currentLoopData = $student->classroom->subjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 ">
                                <input type="text"  class="form-control ms-2 me-2" name="subject[]"
                                    value="<?php echo e($subject->name); ?>">
                                <?php $__errorArgs = ['subject'];
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
                            <div class="col-lg-8 col-md-8 col-sm-8 ">
                                <input type="text" class=" form-control ms-2 me-2" name="comment[]">
                                <?php $__errorArgs = ['comment'];
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            <!-- End personal info  -->
            <!-- Start functional info  -->
            <h3 class="container-title">Food and bathroom</h3>
            <div class="container containers-style">
                <div class="row ">
                    <!-- 1 -->
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5  ">
                        <img class=" student-img h-100 w-50" src="../../../public/assets/icons/food-2.jpg" alt="">
                        <select class="col form-select form-control" name="bath">
                            <option value="<?php echo e(__('public.all')); ?>"><?php echo e(__('public.all')); ?></option>
                            <option value="<?php echo e(__('public.some')); ?>"><?php echo e(__('public.some')); ?></option>
                            <option value="<?php echo e(__('public.none')); ?>"><?php echo e(__('public.none')); ?></option>
                        </select>
                        <?php $__errorArgs = ['bath'];
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
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5 ">
                        <img class=" student-img h-100 w-50" src="../../../public/assets/icons/food-1.jpg" alt="">
                        <select class="col form-select form-control" name="snack">
                            <option value="<?php echo e(__('public.all')); ?>"><?php echo e(__('public.all')); ?></option>
                            <option value="<?php echo e(__('public.some')); ?>"><?php echo e(__('public.some')); ?></option>
                            <option value="<?php echo e(__('public.none')); ?>"><?php echo e(__('public.none')); ?></option>
                        </select>
                        <?php $__errorArgs = ['snack'];
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
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5">
                        <img class=" student-img h-100 w-50" src="../../../public/assets/icons/toilet.jpg" alt="">

                        <select class="col form-select form-control" name="food">
                            <option value="<?php echo e(__('public.all')); ?>"><?php echo e(__('public.all')); ?></option>
                            <option value="<?php echo e(__('public.some')); ?>"><?php echo e(__('public.some')); ?></option>
                            <option value="<?php echo e(__('public.none')); ?>"><?php echo e(__('public.none')); ?></option>
                        </select>
                        <?php $__errorArgs = ['food'];
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
                    <!-- 3 -->
                </div>
            </div>
            <!-- End functional info  -->
            <!-- Start final box -->
            <h3 class="container-title">Add Info</h3>
            <div class="container containers-style">
                <div class="box row">
                    <div class="notes col-lg-12 col-md-12">
                        <label class="form-label " for="st_dNote">NOTE</label>
                        <textarea class="form-control" name="note" cols="50" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="box ">
                    <input class="save-button " type="submit" value="Save">
                    <input class="clear-button " type="reset" value="clear">
                </div>
            </div>
            <!-- End final box -->
        </form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/teachers_affairs/daily/follow_up_child.blade.php ENDPATH**/ ?>
