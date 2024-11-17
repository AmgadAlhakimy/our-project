
<?php $__env->startSection('content'); ?>
<body>
    <main class="main ">
        <section class="section" >
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form action="">
                <h3 class="container-tilte">اضف المواد الخاصة بالمدرس</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">the teacher</label>
                                <select class="form-select form-control " id="level-class">
                                    <option  value="">امجد</option>
                                    <option  value="">خالد</option>
                                </select>
                            </div>
                            <hr>
                            <!-- 2 -->
                                <div class="box mb-1">
                                    <label class="" for="level-class">choose the subjects please</label>
                                </div>

                                <div class="box ">
                                    <div class="btn-container ">
                                        <!-- <div class="btn-menu "> -->
                                            <div class="btn-l-container  row">
                                                <!-- -------- start buttons  -->
                                                <label class="btn-l-label col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">قرآن</span>
                                                </label>
                                                <label class="btn-l-label col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">اسلامية</span>
                                                </label>
                                                <label class="btn-l-label col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">علوم</span>
                                                </label>
                                                <label class="btn-l-label col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">رياضة</span>
                                                </label>
                                                <label class="btn-l-label col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">رياضيات</span>
                                                </label>
                                                <label class="btn-l-label col">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text"> عربي</span>
                                                </label>
                                                <label class="btn-l-label col">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">انجليزي </span>
                                                </label>
                                                <label class="btn-l-label col">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btn-l-text">اجتماعيات</span>
                                                </label>

                                                <!-- -------- end buttons  -->
                                            </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>



                    </div>
                </div>
                <div class=" row">
                    <div class="box ">
                        <input class="save-button " type="submit" value="Save " >
                        <input class="clear-button " type="reset" value="clear" >
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic-dep/relationships/Teacher-subjects.blade.php ENDPATH**/ ?>
