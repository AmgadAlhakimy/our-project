<?php $__env->startSection('content'); ?>
    <main class="main ">
        <section class="section card-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
                <form method="post" action="<?php echo e(route('educational-levels.update',$level->id)); ?>">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <h3 class="container-title"><?php echo e(__('eduLevel.update educational Level')); ?></h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="row mt-2">
                            <div class=" col-md-1"></div>
                            <div class="box col-lg-12 col-md-12">
                                <label for="edu_name"
                                       for="c-name"><?php echo e(__('eduLevel.educational Level name in english')); ?></label>
                                <input type="text" id="edu_name" class="form-control" name="name"
                                       value="<?php echo e($level->getTranslation('name','en')); ?>">
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
                            <div class="col-md-1"></div>
                            <div class="box col-lg-12 col-md-12">
                                <label for="edu_name_ar"><?php echo e(__('eduLevel.educational Level name in arabic')); ?></label>
                                <input type="text" id="edu_name_ar" class="form-control" name="name_ar"
                                       value="<?php echo e($level->getTranslation('name','ar')); ?>">
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
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button" type="submit" value="<?php echo e(__('public.update')); ?>">
                        </div>
                        <div class="box  col">
                            <a href="<?php echo e(route('educational-levels.index')); ?>" class="btn clear-button"><i
                                    class="fa-solid fa-ban"></i> <?php echo e(__('public.cancel')); ?></a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic-dep/educational-levels/edit-edu-level.blade.php ENDPATH**/ ?>
