<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <h1 class="p-relative title-1"><?php echo e(__('Activity.create new Activity')); ?></h1>
            <form action="<?php echo e(route('activities.store')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <h3 class="container-title"><?php echo e(__('Activity.Activity info')); ?></h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label class="form-text" for="activity-name-e"><?php echo e(__('Activity.Activity name in arabic')); ?></label>
                            <input type="text" class="form-control" id='activity-name-e' placeholder="<?php echo e(__('Activity.in arabic')); ?>"
                            name="name_ar" value="<?php echo e(old('name_ar')); ?>">
                            <?php $__errorArgs = ['name_ar'];
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

                        <div class="box col-lg-6 col-md-12">
                            <label class="" for="activity-name-a"><?php echo e(__('Activity.Activity name in english')); ?> </label>
                            <input type="text" class="form-control" id='activity-name-a' placeholder="<?php echo e(__('Activity.in english')); ?>"
                                        name="name" value="<?php echo e(old('name')); ?>">
                            <?php $__errorArgs = ['name'];
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
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12">
                            <label class="" for="area-name-e"><?php echo e(__('Activity.Activity location in arabic')); ?></label>
                            <input type="text" class="form-control " id='area-name-e' name="location_ar"
                            placeholder="<?php echo e(__('Activity.in arabic')); ?>" value="<?php echo e(old('location_ar')); ?>">
                            <?php $__errorArgs = ['location_ar'];
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

                        <div class="box col-lg-6 col-md-12">
                            <label class="" for="area-name-a"><?php echo e(__('Activity.Activity location in english')); ?></label>
                            <input type="text" class="form-control " id='area-name-a' name="location"
                                placeholder="<?php echo e(__('Activity.in english')); ?>" value="<?php echo e(old('location')); ?>">
                            <?php $__errorArgs = ['location'];
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

                        <div class="box col-lg-6 col-md-6">
                            <label class="" for="area-number"><?php echo e(__('Activity.Activity location contact')); ?></label>
                            <input type="number" class="form-control " id='area-number' name="contact" placeholder=""
                                value="<?php echo e(old('contact')); ?>">
                            <?php $__errorArgs = ['contact'];
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
                        <!-- 4 -->
                        <div class="box col-lg-6 col-md-6">
                            <label class="" for="date-activities"><?php echo e(__('Activity.date of Activity')); ?></label>
                            <input type="date" class="form-control " id='date-activities' name="date"
                            value="<?php echo e(old('date')); ?>">
                            <?php $__errorArgs = ['date'];
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
                    </div>
                </div>
                <!-- 5 -->
                <h3 class="container-title"><?php echo e(__('Activity.other info')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note"><?php echo e(__('public.note')); ?></label>
                            <textarea class="form-control" id="std_Note" cols="50" rows="5"
                                    name="note"><?php echo e(old('note')); ?></textarea>
                            <?php $__errorArgs = ['note'];
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
                    </div>
                </div>

                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="<?php echo e(__('public.save')); ?>">
                    </div>
                    <div class="box  col">
                        <input class="clear-button " type="reset" value="<?php echo e(__('public.clear')); ?>">
                    </div>
                </div>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic-dep/activities/create_activity.blade.php ENDPATH**/ ?>
