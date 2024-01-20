<?php $__env->startSection('content'); ?>
    <main class="main">
        <section class="section">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <h3 class="container-title"><?php echo e(__('class.create new class')); ?></h3>
            <form method="post" action="<?php echo e(route('classes.store')); ?>">
                <?php echo csrf_field(); ?>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name_ar"><?php echo e(__('class.class name in arabic')); ?></label>
                            <input type="text" id="c-name_ar" class="form-control" name="name_ar"
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
                        
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name"><?php echo e(__('class.class name in english')); ?></label>
                            <input type="text" id="c-name" class="form-control " name="name" value="<?php echo e(old('name')); ?>">
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
                            <label for="level"><?php echo e(__('class.educational level')); ?></label>
                            <select class="form-control" id="level" name="level">
                                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-center" value="<?php echo e($level->id); ?>"><?php echo e($level->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['level'];
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
                        
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="cost"><?php echo e(__('class.class cost')); ?></label>
                            <input type="number" id="cost" class="form-control" name="cost" minlength="0"
                                    placeholder="$"
                                    value="<?php echo e(old('cost')); ?>">
                            <?php $__errorArgs = ['cost'];
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
                            <input class="save-button " type="submit" value="<?php echo e(__('public.save')); ?>">
                        </div>
                        <div class="box  col">
                            <input class="clear-button " type="reset" value="<?php echo e(__('public.clear')); ?>">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic_dep/classes/create_classes.blade.php ENDPATH**/ ?>