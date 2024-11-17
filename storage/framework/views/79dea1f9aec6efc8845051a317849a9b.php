<?php $__env->startSection('content'); ?>
    <main class="main ">
        <section class="section">
            <?php if(Session::has('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>
            <h3 class="container-title"><?php echo e(__('class.update class').$class->name); ?></h3>
                <form method="post" action="<?php echo e(route('classrooms.update',$class->id)); ?>">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name"><?php echo e(__('class.class name in english')); ?></label>
                            <input type="text" id="c-name" class="form-control " name="name" value="<?php echo e($class->getTranslation('name','en')); ?>">
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
                            <label for="c-name_ar"><?php echo e(__('class.class name in arabic')); ?></label>
                            <input type="text" id="c-name_ar" class="form-control" name="name_ar"
                                   value="<?php echo e($class->getTranslation('name','ar')); ?>">
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
                            <label for="level"><?php echo e(__('class.educational Level')); ?></label>
                            <select class="form-control" id="level" name="level">
                                <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option class="text-center" value="<?php echo e($level->id); ?>"
                                    <?php if($level->id==$class->edu_id): ?> selected <?php endif; ?>>
                                        <?php echo e($level->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php $__errorArgs = ['levels'];
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
                            <input type="number" id="cost" class="form-control" name="cost" minlength="0" placeholder="$"
                                   value="<?php echo e($class->cost); ?>">
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
                        <div class="row mt-2">
                            <div class=" row">
                                <div class="box col ">
                                    <input class="save-button" type="submit" value="<?php echo e(__('public.update')); ?>">
                                </div>
                                <div class="box  col">
                                    <a href="<?php echo e(route('classrooms.index')); ?>" class="btn clear-button"><i
                                            class="fa-solid fa-ban"></i> <?php echo e(__('public.cancel')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic-dep/classrooms/edit-classroom.blade.php ENDPATH**/ ?>
