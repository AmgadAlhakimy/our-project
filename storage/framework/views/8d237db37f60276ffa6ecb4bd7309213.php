<?php $__env->startSection('content'); ?>
    <main class="main ">
        <section class="section card-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('subjects.store')); ?>">
                <?php echo csrf_field(); ?>
                <h3 class="container-title"><?php echo e(__('Subject.create new Subject')); ?></h3>
                <div class="container containers-style">
                    <div class="row">

                            <div class="box col-lg-12 col-md-12">
                                <label for="edu_name"
                                    for="c-name"><?php echo e(__('Subject.Subject name in english')); ?></label>
                                <input type="text" id="edu_name" class="form-control" name="name"
                                    value="<?php echo e(old('name')); ?>">
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

                            <div class="box col-lg-12 col-md-12">
                                <label for="edu_name_ar"><?php echo e(__('Subject.Subject name in arabic')); ?></label>
                                <input type="text" id="edu_name_ar" class="form-control" name="name_ar"
                                    value="<?php echo e(old('name_ar')); ?>">
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

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic_dep/subjects/create_subject.blade.php ENDPATH**/ ?>
