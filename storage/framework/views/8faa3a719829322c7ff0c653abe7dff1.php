<!DOCTYPE html>

<html lang="">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>


    <?php echo $__env->make('layouts.sidebar_header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- start sidebar -->

    <div class="side-container" <?php if(LaravelLocalization::setLocale()=='ar'): ?> dir="rtl" <?php endif; ?>>
        <div class="sidebar my-scroll">

            <!-- ============= LIST ============== -->
            <div class="sidebar-nav ">
                    <ul class="list-ul ">
                        <!--  dropdown list item عنوان القسم-->
                            <p class="title"><?php echo e(__('sidebar.academic department')); ?><i class="ms-1 me-1 fa-solid fa-school"></i></p>
                        
                        
                        <li class="dropdown">
                            <!-- ========== 1 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-school"></i>
                                    <span class="menu-name"> <?php echo e(__('sidebar.addition')); ?> </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a id="" href="<?php echo e(route('educational_levels.create')); ?>" class="li-link "><?php echo e(__('sidebar.add educational Level')); ?></a>
                                    <a id="" href="<?php echo e(route('classrooms.create')); ?>" class="li-link"><?php echo e(__('sidebar.add a class')); ?></a>
                                    <a href="<?php echo e(route('subjects.create')); ?>" class="li-link"><?php echo e(__('sidebar.add Subject')); ?></a>
                                    <a href="<?php echo e(route('activities.create')); ?>" class="li-link"><?php echo e(__('sidebar.add Activity')); ?></a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 2 ============ -->
                        
                        <li class="dropdown">
                            <!-- ========== 2 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-clipboard-list"></i>
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
                                    <i class="icon-1 fa-solid fa-trash-can"></i>
                                    <span class="menu-name"><?php echo e(__('sidebar.trash')); ?> </span>
                                    <i class="icon-1 fa-solid fa-chevron-up"></i>
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
                                    <i class="icon-1 fa-solid fa-newspaper"></i>
                                    <span class="menu-name"><?php echo e(__('sidebar.view records')); ?> </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="#" class="li-link">1</a>
                                    <a href="#" class="li-link">1</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 5 ============ -->
                        
                        <li class="dropdown">
                            <!-- ========== 4 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-timeline"></i>
                                    <span class="menu-name"><?php echo e(__('sidebar.relationships')); ?> </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href='<?php echo e(route('classroom_subject.create')); ?>' class="li-link"><?php echo e(__('sidebar.subjects - classes')); ?></a>
                                    <a href="<?php echo e(route('classroom_teacher.create')); ?>" class="li-link"><?php echo e(__('sidebar.teachers - classes')); ?></a>
                                    <a href='<?php echo e(route('subject_teacher.create')); ?>' class="li-link"><?php echo e(__('sidebar.teachers - subjects')); ?></a>
                                    <a href='<?php echo e(route('activity_classroom.create')); ?>' class="li-link"><?php echo e(__('sidebar.classes - activities')); ?></a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 6 ============ -->
                        
                        <li class="dropdown">
                            <!-- ========== 4 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i
                                        class="icon-1 fa-solid fa-code-merge"
                                    ></i>
                                    <span class="menu-name"><?php echo e(__('sidebar.display relationships')); ?> </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="<?php echo e(route('classroom_subject.index')); ?>" class="li-link"><?php echo e(__('sidebar.display subjects - classes')); ?></a>
                                    <a href="<?php echo e(route('classroom_teacher.index')); ?>" class="li-link"><?php echo e(__('sidebar.display classes -  teacher')); ?></a>
                                    <a href="<?php echo e(route('subject_teacher.index')); ?>" class="li-link"><?php echo e(__('sidebar.display subjects - teachers')); ?></a>
                                    <a href="<?php echo e(route('activity_classroom.index')); ?>" class="li-link"><?php echo e(__('sidebar.display classes - activities')); ?></a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 5 ============ -->
                        <p class="title"><?php echo e(__('sidebar.control section')); ?><i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
                        <div class="control_section" >
                                    
                            <!-- ======================== control ========================== -->
                            <!-- المحصلة الشهريه الشهر الأول -->
                            <li class="dropdown">
                            <!-- ========== 1 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name"><?php echo e(__('sidebar.monthly income')); ?>1</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href='/m_marks' class="li-link">ثاني</a>
                                        <a href='/#' class="li-link"> ثالث </a>
                                        <a href='/#' class="li-link"> رابع </a>
                                        <a href='/#' class="li-link"> خامس </a>
                                        <a href='/#' class="li-link"> سادس </a>
                                    </div>
                                </div>
                            </li>
                            <!-- المحصلة الشهريه الشهر الثاني -->
                            <li class="dropdown">
                            <!-- ========== 2 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name"><?php echo e(__('sidebar.monthly income')); ?> 2</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        
                                    </div>
                                </div>
                            </li>
                            <!-- المحصلة الشهرية الشهر الثالث -->
                            <li class="dropdown">
                            <!-- ========== 3 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name"><?php echo e(__('sidebar.monthly income')); ?> 3</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        
                                    </div>
                                </div>
                            </li>
                            <!-- الشهادة الختامية نصف السنة -->
                            <li class="dropdown">
                            <!-- ========== 3 ============ -->
                                <div class="sidebar-title">
                                    <a href='#' class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name"><?php echo e(__('sidebar.first term income')); ?></span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href='/first_term_income' class="li-link"> اول </a>
                                    </div>
                                </div>
                            </li>
                            <!-- الشهادة الختامية اخر السنة -->
                            <li class="dropdown">
                            <!-- ========== 3 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name"><?php echo e(__('sidebar.second term income')); ?></span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href='/#' class="li-link"> عربي </a>
                                    </div>
                                </div>
                            </li>
                            <!--ترتيب الطلاب الأوالئل-->
                            <li class="dropdown">
                            <!-- ========== 3 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name"><?php echo e(__('sidebar.the first students')); ?></span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href='/#' class="li-link"> اول </a>
                                    </div>
                                </div>
                            </li>
                        </div>

                        <!-- ========== 5 ============ -->
                            <p class="title"><?php echo e(__('sidebar.teacher section')); ?><i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
                                
                        <!-- ======================== TEACHERS ========================== -->
                        <li class="dropdown">
                        <!-- ========== 1 ============ -->
                        <!-- دفتر المتابعة المدرسة -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-children"></i>
                                    <span class="menu-name">دفتر متابعة مدرسة</span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href='/school' class="li-link">علوم \ سادس </a>
                                    <a href='/students_view' class="li-link"> عرض \ علوم \ سادس </a>
                                    
                                    <a href='#' class="li-link">تقارير دفتر المتابعة</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <!-- دفتر المتابعة الروضة -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-baby"></i>
                                    <span class="menu-name">دفتر متابعة روضة</span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="<?php echo e(route('follow_up_children.writingFollowUp',1)); ?>" class="li-link">KG1</a>
                                    <a href="<?php echo e(route('follow_up_children.displayAllChildren',1)); ?>" class="li-link"><?php echo e(__('sidebar.عرض دفتر المابعة (الروضة)')); ?></a>
                                    <a href='#' class="li-link"> تقارير دفتر المتابعة</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 2 ============ -->
                        <!-- اضافة درجات / المحصلة -->
                            <li class="dropdown">
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-marker"></i>
                                    <span class="menu-name"> اضافة الدرجات </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    
                                    <a href='#' class="li-link">علوم الحاسوب \ اول</a>
                                    <a href='#' class="li-link">علوم الحاسوب \ ثاني</a>
                                    <a href='#' class="li-link">علوم الحاسوب \ ثالث</a>
                                    <a href="#" class="li-link"> تقارير </a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 3 ============ -->
                        <!-- التحضير والغياب -->
                        <li class="dropdown">
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-list-check"></i>
                                    <span class="menu-name"> التحضير والغياب  </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href='/absence_class' class="li-link"><?php echo e(__('sidebar.تحضير طلاب الروضة')); ?></a>
                                    <a href='/index_absence' class="li-link"><?php echo e(__('sidebar.عرض غياب طلاب الروضة')); ?></a>
                                    <a href='#' class="li-link">ثالث</a>
                                    <a href='#' class="li-link">رابع</a>
                                    <a href='#' class="li-link">تقارير الغياب</a>
                                </div>
                            </div>
                        </li>
                        
                        <!-- ======================== PARENTS ========================== -->
                        <p class="title"><?php echo e(__('sidebar.parent section')); ?><i class="ms-1 me-1 fa-solid fa-people-roof"></i></p>
                        <li class="dropdown">
                            <!-- ========== 2 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i
                                    class="icon-1 fa-solid fa-person-half-dress"
                                    ></i>
                                    <span class="menu-name"><?php echo e(__('sidebar.parent')); ?></span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href='/student_info' class="li-link"><?php echo e(__('sidebar.son info')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.daily follow up ')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.absent info')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.monthly marks')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.final marks')); ?></a>
                                </div>
                            </div>
                        </li>
                        
                        <!-- ======================== EMB ========================== -->
                                <p class="title"><?php echo e(__('sidebar.personnel affairs section')); ?><i class="ms-1 me-1 fa-solid fa-users-between-lines"></i></p>
                        <li class="dropdown">
                            <!-- ========== 2 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-user-tie"></i>
                                    <span class="menu-name"><?php echo e(__('sidebar.personnel affairs')); ?></span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="<?php echo e(route('teachers.create')); ?>" class="li-link"><?php echo e(__('sidebar.add new teacher')); ?></a>
                                    <a href="<?php echo e(route('teachers.index')); ?>" class="li-link"><?php echo e(__('sidebar.view teachers')); ?></a>
                                    <a href="<?php echo e(route('teachers.show','deleted')); ?>" class="li-link"><?php echo e(__('sidebar.deleted teachers')); ?></a>
                                    <a href='/add-emp' class="li-link"><?php echo e(__('sidebar.add new emb')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.view emb')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.deleted emb')); ?></a>
                                    <a href="#" class="li-link"><?php echo e(__('sidebar.emb and teachers absent')); ?></a>
                                </div>
                            </div>
                        </li>
                                
                        <!-- ======================== STUDENTS ========================== -->
                        <p class="title"><?php echo e(__('sidebar.students affairs')); ?><i class="ms-1 me-1 fa-solid fa-marker"></i></p>
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
                                <a href='<?php echo e(route('createStudent')); ?>' class="li-link"><?php echo e(__('add a Student with livewire')); ?></a>
                                
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
                                    <a href="<?php echo e(route('subject_teacher.index')); ?>" class="li-link">relationship</a>
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
                        <!-- ====================== -->
                        </div>
                        </li>

                    </ul>
            </div>
        </div>
        
        <div class="section-home mt-5">
            <div id="my_toggle" class=" ">
                <div id="myDive" class="toggle-sidebar">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end sidebar -->
    <!-- ====================== -->
    <!-- ====================== -->


<!-- start link js -->
    <?php echo $__env->make('layouts.js_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<script type="text/javascript">
	VanillaTilt.init(document.querySelector(".containers-style"), {
		max: 5,
		speed: 30
	});
	
	//It also supports NodeList
	VanillaTilt.init(document.querySelectorAll(".containers-style"));
</script>

<!-- end link js -->
</body>
</html>
<?php /**PATH E:\My-Github\our-project\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>