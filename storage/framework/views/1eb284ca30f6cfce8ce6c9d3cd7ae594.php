<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section">
            <h1 class="p-relative title-1"><?php echo e(__(''). $activity->name); ?></h1>
            <form method="post" action="<?php echo e(route('activities.update',$activity->id)); ?>">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <h3 class="container-title"><?php echo e(__('Activity.update Activity')); ?></h3>
            <div class="container containers-style ">
                <div class="row">
                    <!-- 1 -->
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="activity-name-a"><?php echo e(__('Activity.Activity name in english')); ?> </label>
                        <input type="text" class="form-control" id='activity-name-a'  required  name="name" value="<?php echo e($activity->getTranslation('name','en')); ?>">
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
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="activity-name-e"><?php echo e(__('Activity.Activity name in arabic')); ?></label>
                        <input type="text" class="form-control " id='activity-name-e'  placeholder="in arabic"  name="name_ar"
                            value="<?php echo e($activity->getTranslation('name','ar')); ?>">
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
                    <!-- 2 -->
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="area-name-a"><?php echo e(__('Activity.Activity location in english')); ?></label>
                        <input type="text" class="form-control " id='area-name-a' name="location"  placeholder="in english"
                            value="<?php echo e($activity->getTranslation('location','en')); ?>">
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
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="area-name-e"><?php echo e(__('Activity.Activity location in arabic')); ?></label>
                        <input type="text" class="form-control " id='area-name-e' name="location_ar"  placeholder="in arabic"
                            value="<?php echo e($activity->getTranslation('location','ar')); ?>">
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
                    <div class="box col-lg-6 col-md-6">
                        <label class="" for="area-number"><?php echo e(__('Activity.Activity location contact')); ?></label>
                        <input type="number" class="form-control " id='area-number' value="<?php echo e($activity->contact); ?>" name="contact"  placeholder="">
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
                    <!-- 5 -->
                    <div class="box col-lg-6 col-md-6">
                        <label class="" for="date-activities"><?php echo e(__('Activity.date of Activity')); ?></label>
                        <input type="date" class="form-control " id='date-activities' value="<?php echo e($activity->date); ?>" name="date">
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
                <h3 class="container-title"><?php echo e(__('Activity.other info')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note"><?php echo e(__('Activity.note')); ?></label>
                    <textarea class="form-control" id="std_Note" cols="50" rows="5"  name="note"><?php echo e($activity->note); ?></textarea>
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
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button" type="submit" value="<?php echo e(__('public.update')); ?>">
                        </div>
                        <div class="box  col">
                            <a href="<?php echo e(route('activities.index')); ?>" class="btn clear-button"><i
                                    class="fa-solid fa-ban"></i> <?php echo e(__('public.cancel')); ?></a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic-dep/activities/edit-activity.blade.php ENDPATH**/ ?>
