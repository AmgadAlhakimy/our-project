<!DOCTYPE html>

<html lang="">
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
    <link href="<?php echo e(URL::asset('css/cards_info.css')); ?>" rel="stylesheet">
    <!-- box icons -->
    <!-- box icons -->
    <!-- styles -->
    <!-- styles -->
</head>
<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>


<!-- Start head  -->
<!-- Start content  -->
<div class="content">
    <div class="head " dir="ltr">
        
        <div class="search p-relative">
            <label for="rtl"></label> <input class="search1" type="search" placeholder="<?php echo e(__('sidebar.search')); ?>" id="rtl" />
        </div>
        <div class="icons">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-fw"></i>
                    </span>
            <img src="<?php echo e(URL::asset('assets/images/layouts/skills-02.jpg')); ?>" alt="skills"/>
        </div>
        
        <div class="dropDownLang">
            <div class="select">
                <span class="selected"><?php echo e(__('sidebar.Lang')); ?></span>
                <div class="caret"></div>
            </div>

            <ul class="menuLang">

                <?php $__currentLoopData = LaravelLocalization::getSupportedLocales(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $localeCode => $properties): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a rel="alternate" hreflang="<?php echo e($localeCode); ?>" href="<?php echo e(LaravelLocalization::getLocalizedURL($localeCode, null, [], true)); ?>">
                            <?php echo e($properties['native']); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
            <a class="cards_info_style me-1 ms-1 card-info " aria-current="page" href='/'>  <i class="h2 icon-1 fa-solid fa-home-lg-alt"></i></a>


    </div>
</div>
<!-- end head  -->
<!-- End content  -->
<!-- start sidebar -->
<div class="side-container" <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>
    <div class="sidebar">
        <!-- ============= logo ================== -->
        <div class="my-head">
            <div class="my-menu-btn">
                
                <img src="<?php echo e(URL::asset('assets/images/layouts/logo2.png')); ?>" class="logo-img" alt="" />
                <div class="sidebar-icon">
                    <i class="logo-text fa-solid fa-caret-left"></i>
                    <i class="logo-text-1 fa-solid fa-list"></i>
                </div>
            </div>
        </div>
        <!-- ============= LIST ============== -->
            <div class="sidebar-nav">
                <ul class="list-ul my-scroll">
                    <!--  dropdown list item عنوان القسم-->
                    <p class="title"><?php echo e(__('sidebar.academic department')); ?></p>
                    
                    
                    <li class="dropdown">
                        <!-- ========== 1 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> <?php echo e(__('sidebar.addition')); ?> </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a id="" href="<?php echo e(route('educational_levels.create')); ?>" class="li-link_2 "><?php echo e(__('sidebar.add educational Level')); ?></a>
                                <a id="" href="<?php echo e(route('classrooms.create')); ?>" class="li-link_2">  <?php echo e(__('sidebar.add a class')); ?></a>
                                <a href="<?php echo e(route('subjects.create')); ?>" class="li-link_2"> <?php echo e(__('sidebar.add Subject')); ?></a>
                                <a href="<?php echo e(route('activities.create')); ?>" class="li-link_2" > <?php echo e(__('sidebar.add Activity')); ?></a>
                            </div>
                        </div>
                    </li>
                    <!-- ========== 2 ============ -->
                    
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> <?php echo e(__('sidebar.academic department review')); ?> </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="<?php echo e(route('educational_levels.index')); ?>" class="li-link"><?php echo e(__('sidebar.review of educational Level')); ?></a>
                                <a href="<?php echo e(route('classrooms.index')); ?>" class="li-link"><?php echo e(__('sidebar.review of classrooms')); ?></a>
                                <a href="<?php echo e(route('subjects.index')); ?>" class="li-link"> <?php echo e(__('sidebar.review of subjects')); ?></a>
                                <a href="<?php echo e(route('activities.index')); ?>" class="li-link"><?php echo e(__('sidebar.review activities')); ?></a>
                            </div>
                        </div>
                    </li>
                    <!-- ========== 3 ============ -->
                    
                    <li class="dropdown">
                        <!-- ========== 3 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"><?php echo e(__('sidebar.trash')); ?> </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="<?php echo e(route('educational_levels.show','deleted')); ?>" class="li-link"><?php echo e(__('sidebar.deleted educational Level')); ?></a>
                                <a href="<?php echo e(route('classrooms.show','deleted')); ?>" class="li-link"><?php echo e(__('sidebar.deleted classrooms')); ?></a>
                                <a href="<?php echo e(route('subjects.show','deleted')); ?>" class="li-link"><?php echo e(__('sidebar.deleted subjects')); ?></a>
                                <a href="<?php echo e(route('activities.show','deleted')); ?>" class="li-link"><?php echo e(__('sidebar.deleted activities')); ?></a>
                            </div>
                        </div>
                    </li>
                    <!-- ========== 4 ============ -->
                    
                    <li class="dropdown">
                        <!-- ========== 4 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"><?php echo e(__('عرض التقارير')); ?> </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">1</a>
                            </div>
                        </div>
                    </li>
                    <!-- ========== 5 ============ -->
                    
                    <!-- ======================== ACOUNTENT ========================== -->
                    
                    

                        <p class="title">قسم المعلمين</p>
                            
                    <!-- ======================== TEACHERS ========================== -->
                    <li class="dropdown">
                    <!-- ========== 1 ============ -->
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i class="icon-1 fa-solid fa-window-restore"></i>
                            <span class="menu-name"> دفتر المتابعة</span>
                            <i class="icon-1 fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="submenu">
                        <div class="line-black">
                            <a href='/school' class="li-link">علوم \ سادس </a>
                            <a href="<?php echo e(route('follow_up_children.showChildren',['id1'=>1,'id2'=>2])); ?>" class="li-link">quran \ KG1 </a>
                            <a href='#' class="li-link"> تقارير دفتر المتابعة</a>
                        </div>
                    </div>
                </li>
                        <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i class="icon-1 fa-solid fa-window-restore"></i>
                                <span class="menu-name"> اضافة الدرجات </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="<?php echo e(route('marks.insertMarks',1)); ?>" class="li-link">رياضيات \ ثالث</a>
                                <a href='#' class="li-link">علوم الحاسوب \ اول</a>
                                <a href='#' class="li-link">علوم الحاسوب \ ثاني</a>
                                <a href='#' class="li-link">علوم الحاسوب \ ثالث</a>
                                <a href="#" class="li-link"> تقارير </a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <!-- ========== 3 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i class="icon-1 fa-solid fa-window-restore"></i>
                                <span class="menu-name"> التحضير والغياب  </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href='/absence_class' class="li-link">اول</a>
                                <a href='#' class="li-link">ثاني</a>
                                <a href='#' class="li-link">ثالث</a>
                                <a href='#' class="li-link">رابع</a>
                                <a href='#' class="li-link">تقارير الغياب</a>
                            </div>
                        </div>
                    </li>






                        <p class="title">قسم الكنترول</p>

                    
                    
                    <!-- ======================== CONTROLE ========================== -->
                    

                    
                    <!-- ======================== PARENTS ========================== -->
                    <p class="title">قسم اولياء الأمور</p>

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
                                <a href="<?php echo e(route('teachers.create')); ?>" class="li-link">اضافة مدرس</a>
                                <a href="<?php echo e(route('teachers.index')); ?>" class="li-link">عرض المدرسين</a>
                                <a href="<?php echo e(route('teachers.show','deleted')); ?>" class="li-link">عرض المدرسين المحذوفين</a>
                                <a href='/add-emp' class="li-link">اضافة موظف</a>
                                <a href="#" class="li-link">جدول الغياب</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">2</a>
                            </div>
                        </div>
                    </li>
                            
                    <!-- ======================== STUDENTS ========================== -->
                    <p class="title"><?php echo e(__('sidebar.students affairs')); ?></p>

                    <li class="dropdown">
                    <!-- ========== 2 ============ -->
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i
                                class="icon-1 fa-solid fa-window-restore"
                            ></i>
                            <span class="menu-name"><?php echo e(__('sidebar.students affairs')); ?></span>
                            <i class="icon-1 fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="submenu">
                        <div class="line-black">
                            
                            <a href='<?php echo e(route('students.create')); ?>' class="li-link"><?php echo e(__('sidebar.add a Student')); ?></a>
                            
                            <a href="<?php echo e(route('students.index')); ?>" class="li-link"><?php echo e(__('sidebar.review students')); ?></a>
                            <a href="<?php echo e(route('students.show','deleted')); ?>" class="li-link"><?php echo e(__('sidebar.deleted Student')); ?></a>
                            
                            
                            <a href='/absence' class="li-link"><?php echo e(__('sidebar.Student absence')); ?></a>
                            <a href='/student_form' class="li-link">معلومات الطلاب</a>
                            <a href="#" class="li-link">الطلاب الأوائل</a>

                            
                            <div class="dropDownLang my-element" onclick="cancelclick(event)">
                                <div class="select">
                                    <span class="selected">Lang</span>
                                    <div class="caret"></div>
                                </div>
                                <ul class="menuLang">
                                    <a href="#" class="li-link_2">1</a>
                                    <a href="#" class="li-link_2">2</a>
                                    <a href="#" class="li-link_2">3</a>
                                    <a href='#' class="li-link_2">4</a>
                                    <a href="#" class="li-link_2">5</a>
                                </ul>  
                            </div>
                        </div>

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
                                <div href='#' class="li-link">1</div>
                                <span href='#' class="li-link">2</span>
                                <a href='#' class="li-link">3</a>
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
                    </div>
                    </li>
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
</html>




                                
<?php /**PATH E:\My-Github\our-project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>