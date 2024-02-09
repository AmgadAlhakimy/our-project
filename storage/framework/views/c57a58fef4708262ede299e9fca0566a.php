<?php $__env->startSection('content'); ?>
    <body>
    <main class="main ">
        <section class="section ">
            <h1 data-text="" class="p-relative title-1">ربط العلاقات</h1>


            <!-- Start final box -->
            <h3 class="container-title">اختر العلاقة</h3>
            <div class="container containers-style">

                    <div class="notes col-lg-6 col-md-6 col-sm-12">

                        <a href="<?php echo e(route('subject_classrooms.create')); ?>" class="li-link">
                            <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                <div class="relation-title"> الفصول بالمواد الدراسية</div>
                            </button>
                        </a>
                    </div>

                    <div class="notes col-lg-6 col-md-6 col-sm-12">

                        <a href="<?php echo e(route('class_activity.create')); ?>" class="li-link">
                            <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                <div class="relation-title"> الفصل بالأنشطة</div>
                            </button>
                        </a>
                    </div>

                    <a href="/class-teacher" class="li-link">
                        <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                            <div class="relation-title"> المدرس بفصولة التدريسية</div>
                        </button>

                        <a href="/class-teacher" class="li-link">
                            <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                <div class="relation-title"> المدرس بفصولة التدريسية</div>
                            </button>
                        </a>

                        <div class="notes col-lg-12 col-md-12 col-sm-12">
                            <a  href="<?php echo e(route('teacher_subjects.create')); ?>" class="li-link">
                                <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                    <div class="relation-title">المدرس بالمواد الخاصة بة</div>
                                </button>
                            </a>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- End final box -->
    </main>
    </body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/academic_dep/relationships/relationships-page.blade.php ENDPATH**/ ?>
