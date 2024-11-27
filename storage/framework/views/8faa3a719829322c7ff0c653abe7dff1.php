<!DOCTYPE html>
<html lang="">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>

<?php echo $__env->make('layouts.sidebar-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- start sidebar -->

<div class="side-container" <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="" <?php endif; ?>>
    <div class="sidebar my-scroll">

        <!-- ============= LIST ============== -->
        <div class="sidebar-nv ">
            <ul class="list-ul ">


                

                <!-- ========== 5 ============ -->

                <!-- ========== 5 ============ -->


                <!-- ======================== PARENTS ========================== -->


                
                <!-- ======================== EMB ========================== -->
                <?php echo $__env->make('layouts.personnel-affairs.personnel-affairs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                
                <!-- ======================== STUDENTS ========================== -->
                <?php echo $__env->make('layouts.students-affairs.students-affairs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </ul>
        </div>
    </div>

    <?php echo $__env->make('layouts.toggle-section.toggle-section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    

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