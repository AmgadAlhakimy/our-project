<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>

<!-- start sidebar -->
<!-- Start head  -->
<!-- Start content  -->
<div class="content">
    <div class="head ">
        <div class="search p-relative">
            <label for="rtl"></label> <input class="search1" type="search" placeholder="Search" id="rtl" />
        </div>
        <div class="icons">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-fw"></i>
                    </span>
            <img src="<?php echo e(URL::asset('assets/images/layouts/skills-02.jpg')); ?>" alt="skills"/>
        </div>
        
        <div class="dropdownlang">
            <div class="select">
                <span class="selected">Lang</span>
                <div class="caret"></div>
            </div>

            <ul class="menulang">

                <li class="active"><a class="" aria-current="page" href="#"><?php echo e(__('public.home')); ?></a></li>
                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                            <?php echo e($properties['native']); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        

    </div>
</div>
<!-- end head  -->
<!-- End content  -->
<div class="side-container" <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>
    <div class="sidebar">
        <!-- ============= logo ============================ -->
        <div class="my-head">
            <div class="my-menu-btn">
                
                <img src="<?php echo e(URL::asset('assets/images/layouts/logo2.png')); ?>" class="logo-img" alt="" />
                <div class="sidebar-icon">
                    <i class="logo-text fa-solid fa-caret-left"></i>
                    <i class="logo-text-1 fa-solid fa-list"></i>
                </div>
            </div>
        </div>
        <!-- ============= LIST ====================== -->
        <div class="my-menu">
            <div class="sidebar-nav">
                <ul class="list-ul my-scroll">
                    <!--  dropdown list item -->
                    <p class="title"><?php echo e(__('sidebar.Admin')); ?></p>
                    <li class="dropdown">
                        <!-- ========== 1 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">
                                            القسم الاكاديمي
                                        </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link"> سلة المهملات </a>
                                <a href="<?php echo e(route('educational_levels.create')); ?>" class="li-link">اضافة مرحلة دراسية</a>
                                <a href="<?php echo e(route('classes.create')); ?>" class="li-link">اضافة فصل دراسي</a>
                                <a href="<?php echo e(route('subjects.create')); ?>" class="li-link">اضافة مواد</a>
                                <a href="<?php echo e(route('activities.create')); ?>" class="li-link" >اضافة نشاط</a>
                                <a href='/relations-page' class="li-link">الربط بين العلاقات</a>
                                -----------------------
                                <a href="<?php echo e(route('educational_levels.index')); ?>" class="li-link">عرض المراحل الدراسية</a>
                                <a href="<?php echo e(route('classes.index')); ?>" class="li-link">عرض الفصول الدراسية</a>
                                <a href="<?php echo e(route('subjects.index')); ?>" class="li-link"> عرض المواد الدراسية</a>
                                <a href="<?php echo e(route('activities.index')); ?>" class="li-link">عرض الأنشطة الدراسية</a>
                                ------------------------
                                <a href="<?php echo e(route('educational_levels.show',0)); ?>" class="li-link">عرض المراحل الدراسية المحذوفة</a>
                                <a href="<?php echo e(route('classes.show',0)); ?>" class="li-link">عرض الفصول الدراسية المحذوفة</a>
                                <a href="<?php echo e(route('subjects.show',0)); ?>" class="li-link"> عرض المواد الدراسية المحذوفة</a>
                                <a href="<?php echo e(route('activities.show',0)); ?>" class="li-link">عرض الأنشطة الدراسية المحذوفة</a>

                            </div>
                        </div>
                    </li>

                    
                    <!-- ======================== ACOUNTENT ========================== -->
                    
                    
                    <div>
                        <p class="title">test</p>
                    </div>
                    


                    
                    <!-- ======================== CONTROLE ========================== -->
                    

                    
                    <!-- ======================== PARENTS ========================== -->
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">الاباء</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link">معلومات اولياء الامور</a>
                                <a href="#" class="li-link">2</a>
                                <a href="#" class="li-link">3</a>
                                <a href="#" class="li-link">4</a>
                                <a href="#" class="li-link">5</a>
                            </div>
                        </div>
                    </li>

                    
                    <!-- ======================== EMB ========================== -->
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i class="icon-1 fa-solid fa-window-restore"></i>
                                <span class="menu-name">شؤون الموظفين</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href='/add-teacher' class="li-link">اضافة مدرس</a>
                                <a href='/add-emp' class="li-link">اضافة موظف</a>
                                <a href="#" class="li-link">جدول الغياب</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">2</a>
                            </div>
                        </div>
                    </li>

                    
                    <!-- ======================== SECURTARY ========================== -->
                    
                            
                    <!-- ======================== STUDENTS ========================== -->
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">شؤون الطلاب</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href='/student-info' class="li-link">اضافة طالب</a>
                                <a href="/students-info" class="li-link">عرض الطلاب</a>
                                <a href="#" class="li-link"> عرض المحذوف</a>
                                <a href="#" class="li-link">تعديل الطالب </a>
                                <a href='/absence' class="li-link">الغياب</a>
                                <a href="#" class="li-link">2</a>
                                
                                
                                
                            </div>
                        </div>
                    </li>

                    
                    <!-- ======================== TEACHERS ========================== -->
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> المعلمين</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href='/add-marks' class="li-link">الدرجات</a>
                                <a href='/follow-up_nersory' class="li-link"> دفتر المتابعة الروضة</a>
                                <a href='/follow-up_school' class="li-link">دفتر المتابعة المدرسة</a>
                                <a href='/follow-up_schoo' class="li-link">قائمة بطلاب الفصل الفلاني</a>
                                <a href="#" class="li-link"> 5 </a>
                            </div>
                        </div>
                    </li>


                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"></i>
                                <span class="menu-name"> قسم 1</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">

                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> قسم 2</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">

                            </div>
                        </div>
                    </li>

                    
                    

                    
                    
                    <li class=" ">
                        <!-- ========== 2 ============ -->
                        <!-- <div class="sidebar-title"> -->
                        <!-- <a href="#" class="li-link title-4">
                            <i class="icon-1 fa-solid fa-window-restore"></i>
                            <span class="menu-name"> من نحن</span>
                            <i class=" fa-solid fa-chevron-down"></i>
                    </a> -->
                        <!-- </div> -->
                        <div class="submenu">
                            <div class="">
                                <a href="#" class="li-link">100000</a>
                                <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">400000</a>
                                <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">100000</a>
                                <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">400000</a>
                                <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">100000</a>
                                
                            </div>
                        </div>
                    </li>
                    <!-- ====================== -->
                </ul>
            </div>
        </div>

        <!-- ========== THE LAST MENU ============ -->
        
        <!-- ====================== -->
</div>
</div>
<!-- ============= home section ================= -->
<section class="section-home">
    <div class="toggle-sidebar">
    </div>
</section>

<!-- link js -->

<?php echo $__env->yieldContent('content'); ?>

<script src="<?php echo e(URL::asset('js/all.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/jquery.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/main.js')); ?>"></script>
<script src="<?php echo e(URL::asset('js/script.js')); ?>"></script>
</body>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> sidebar </title>

    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/framework.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/sidebar-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/tables.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/normalize.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/sidebar-header.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/sidebar-style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(URL::asset('css/sidebar-bottuns.css')); ?>" rel="stylesheet">
        <!-- box icons -->
        <!-- box icons -->
        <!-- styles -->
        <!-- styles -->
    </head>
</html>









































































































































































































<?php /**PATH E:\My-Github\our-project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>