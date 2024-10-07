<!DOCTYPE html>

<html lang="">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>


    <?php echo $__env->make('layouts.sidebar_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- start sidebar -->

    <div class="side-container" <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="" <?php endif; ?>>
        <div class="sidebar my-scroll">

            <!-- ============= LIST ============== -->
            <div class="sidebar-nav ">
                    <ul class="list-ul ">


                        
                        <?php echo $__env->make('layouts.academic_department.academic_department', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- ========== 5 ============ -->
                        <?php echo $__env->make('layouts.control_department.control_department', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- ========== 5 ============ -->
                        <?php echo $__env->make('layouts.teachers.teachers', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                        <!-- ======================== PARENTS ========================== -->
                        <?php echo $__env->make('layouts.parents.parents', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                        
                        <!-- ======================== EMB ========================== -->
                        <?php echo $__env->make('layouts.personnel_affairs.personnel_affairs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                        
                        
                        
                        
                        
                        
                        
                        <!-- ======================== STUDENTS ========================== -->
                        <?php echo $__env->make('layouts.students_affairs.students_affairs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                    </ul>
                </div>
            </div>
            
            <?php echo $__env->make('layouts.toggle_section.toggle_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            
        

    </div>
    <!-- end sidebar -->
    <!-- ====================== -->
    <!-- ====================== -->


<!-- start link js -->
    <?php echo $__env->make('layouts.js_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".container-title"), {
		max: 4,
		speed: 20
	});

	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".container-title"));
</script>
<!-- end link js -->
</body>
</html>
<?php /**PATH E:\My-Github\our-project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>