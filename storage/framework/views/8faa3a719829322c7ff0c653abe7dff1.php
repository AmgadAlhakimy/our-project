<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>

<?php echo $__env->make('layouts.sidebar-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="side-container" <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>
    <div class="sidebar my-scroll">

        <!-- ============= LIST ============== -->
        <div class="sidebar-nav">
            <ul class="list-ul">

                
                <div class="search p-relative ph-search_m">
                    <input class="search1 ms-2 me-2 " type="search"
                    placeholder="<?php echo e(__('sidebar.search')); ?>" id="rtl" />
                </div>
                <hr class="ph-search_m">

                   <?php echo $__env->make('layouts.academic-department.academic-department', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                   <?php echo $__env->make('layouts.students-affairs.students', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- ========== 5 ============ -->
                    
                <!-- ========== 5 ============ -->
                   <?php echo $__env->make('layouts.teachers.teachers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('follow-up');

$__html = app('livewire')->mount($__name, $__params, 'lw-3043576435-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                <!-- ======================== PARENTS ========================== -->
                    <?php echo $__env->make('layouts.parents.parents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                
                <!-- ======================== EMB ========================== -->
                    <?php echo $__env->make('layouts.personnel-affairs.personnel-affairs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        </div>
    </div>
</div>
<div class="section-home mt-5">
    <div id="my_toggle" class="">
        <div id="myDive" class="toggle-sidebar">
            <?php echo $__env->make('layouts.toggle-section.toggle-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>
<?php echo $__env->make('layouts.js_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH E:\My-Github\our-project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>