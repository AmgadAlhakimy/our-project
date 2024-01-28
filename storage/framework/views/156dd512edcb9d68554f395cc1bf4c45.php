<?php $__env->startSection('content'); ?>
    <main class="main ">
        <section class="section card-body">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('semesters.store')); ?>">
                <?php echo csrf_field(); ?>
                <h3 class="text-center"><?php echo e(__('Semester.create new Semester')); ?></h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class=" col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="c-name"><?php echo e(__('Semester.Semester name in english')); ?></label>
                            <input type="text" id="c-name" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
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
                        <div class="col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="cname"><?php echo e(__('Semester.Semester name in arabic')); ?></label>
                            <input type="text" id="cname" class="form-control" name="name_ar" value="<?php echo e(old('name_ar')); ?>">
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
                        <div class="box mb-3  ">
                            <input class="save-button" type="submit" value="<?php echo e(__('public.save')); ?> " name="add">
                            <input class="clear-button" type="reset" value="<?php echo e(__('public.clear')); ?>" name="add">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/semesters/create_student.blade.php ENDPATH**/ ?>
