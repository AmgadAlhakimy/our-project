<!DOCTYPE html>

<html lang="">
@include('layouts.header')
<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>


    @include('layouts.sidebar_header')
<!-- start sidebar -->

    <div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>
        <div class="sidebar my-scroll">

            <!-- ============= LIST ============== -->
            <div class="sidebar-nav ">
                    <ul class="list-ul ">
                        <!--  dropdown list item عنوان القسم-->
                            <p class="title">{{__('sidebar.academic department')}}<i class="ms-1 me-1 fa-solid fa-school"></i></p>
                        {{-- القسم الأكاديمي --}}
                        {{-- اضافة الاقسام الأكاديمية --}}
                        <li class="dropdown">
                            <!-- ========== 1 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-school"></i>
                                    <span class="menu-name"> {{__('sidebar.addition')}} </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a id="" href="{{route('educational_levels.create')}}" class="li-link ">{{__('sidebar.add educational Level')}}</a>
                                    <a id="" href="{{route('classrooms.create')}}" class="li-link">{{__('sidebar.add a class')}}</a>
                                    <a href="{{route('subjects.create')}}" class="li-link">{{__('sidebar.add Subject')}}</a>
                                    <a href="{{route('activities.create')}}" class="li-link">{{__('sidebar.add Activity')}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 2 ============ -->
                        {{-- عرض الاقسام الأكاديمية --}}
                        <li class="dropdown">
                            <!-- ========== 2 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-clipboard-list"></i>
                                    <span class="menu-name"> {{__('sidebar.academic department review')}} </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="{{route('educational_levels.index')}}" class="li-link">{{__('sidebar.review of educational Level')}}</a>
                                    <a href="{{route('classrooms.index')}}" class="li-link">{{__('sidebar.review of classrooms')}}</a>
                                    <a href="{{route('subjects.index')}}" class="li-link"> {{__('sidebar.review of subjects')}}</a>
                                    <a href="{{route('activities.index')}}" class="li-link">{{__('sidebar.review activities')}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 3 ============ -->
                        {{-- سلة المهملات --}}
                        <li class="dropdown">
                            <!-- ========== 3 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-trash-can"></i>
                                    <span class="menu-name">{{__('sidebar.trash')}} </span>
                                    <i class="icon-1 fa-solid fa-chevron-up"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="{{route('educational_levels.show','deleted')}}" class="li-link">{{__('sidebar.deleted educational Level')}}</a>
                                    <a href="{{route('classrooms.show','deleted')}}" class="li-link">{{__('sidebar.deleted classrooms')}}</a>
                                    <a href="{{route('subjects.show','deleted')}}" class="li-link">{{__('sidebar.deleted subjects')}}</a>
                                    <a href="{{route('activities.show','deleted')}}" class="li-link">{{__('sidebar.deleted activities')}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 4 ============ -->
                        {{--  عرض التقارير --}}
                        <li class="dropdown">
                            <!-- ========== 4 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-newspaper"></i>
                                    <span class="menu-name">{{__('sidebar.view records')}} </span>
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
                        {{--  الربط والعلاقات  --}}
                        <li class="dropdown">
                            <!-- ========== 4 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-timeline"></i>
                                    <span class="menu-name">{{__('sidebar.relationships')}} </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href='{{route('classroom_subject.create')}}' class="li-link">{{__('sidebar.subjects - classes')}}</a>
                                    <a href="{{route('classroom_teacher.create')}}" class="li-link">{{__('sidebar.teachers - classes')}}</a>
                                    <a href='{{route('subject_teacher.create')}}' class="li-link">{{__('sidebar.teachers - subjects')}}</a>
                                    <a href='{{route('activity_classroom.create')}}' class="li-link">{{__('sidebar.classes - activities')}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 6 ============ -->
                        {{-- عرض الربط والعلاقات  --}}
                        <li class="dropdown">
                            <!-- ========== 4 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i
                                        class="icon-1 fa-solid fa-code-merge"
                                    ></i>
                                    <span class="menu-name">{{__('sidebar.display relationships')}} </span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="{{route('classroom_subject.index')}}" class="li-link">{{__('sidebar.display subjects - classes')}}</a>
                                    <a href="{{route('classroom_teacher.index')}}" class="li-link">{{__('sidebar.display classes -  teacher')}}</a>
                                    <a href="{{route('subject_teacher.index')}}" class="li-link">{{__('sidebar.display subjects - teachers')}}</a>
                                    <a href="{{route('activity_classroom.index')}}" class="li-link">{{__('sidebar.display classes - activities')}}</a>
                                </div>
                            </div>
                        </li>
                        <!-- ========== 5 ============ -->
                        <p class="title">{{__('sidebar.control section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
                        <div class="control_section" >
                                    {{-- ---قسم الكنترول--- --}}
                            <!-- ======================== control ========================== -->
                            <!-- المحصلة الشهريه الشهر الأول -->
                            <li class="dropdown">
                            <!-- ========== 1 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name">{{__('sidebar.monthly income')}}1</span>
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
                                        <span class="menu-name">{{__('sidebar.monthly income')}} 2</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        {{-- <a href='/#' class="li-link"> اول </a> --}}
                                    </div>
                                </div>
                            </li>
                            <!-- المحصلة الشهرية الشهر الثالث -->
                            <li class="dropdown">
                            <!-- ========== 3 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name">{{__('sidebar.monthly income')}} 3</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        {{-- <a href='/#' class="li-link"> اول </a> --}}
                                    </div>
                                </div>
                            </li>
                            <!-- الشهادة الختامية نصف السنة -->
                            <li class="dropdown">
                            <!-- ========== 3 ============ -->
                                <div class="sidebar-title">
                                    <a href='#' class="li-link title-4">
                                        <i class="icon-1 fa-solid fa-children"></i>
                                        <span class="menu-name">{{__('sidebar.first term income')}}</span>
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
                                        <span class="menu-name">{{__('sidebar.second term income')}}</span>
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
                                        <span class="menu-name">{{__('sidebar.the first students')}}</span>
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
                            <p class="title">{{__('sidebar.teacher section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
                                {{-- ---المعلمين--- --}}
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
                                    {{-- <a href="{{route('follow_up_children.displayAllChildren',1)}}" class="li-link">{{__('sidebar.عرض دفتر المابعة (الروضة)')}}</a> --}}
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
                                    <a href="{{route('follow_up_children.writingFollowUp',1)}}" class="li-link">KG1</a>
                                    <a href="{{route('follow_up_children.displayAllChildren',1)}}" class="li-link">{{__('sidebar.عرض دفتر المابعة (الروضة)')}}</a>
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
                                    {{-- <a href="{{route('marks.insertMarks',2)}}" class="li-link">رياضيات \ ثالث</a> --}}
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
                                    <a href='/absence_class' class="li-link">{{__('sidebar.تحضير طلاب الروضة')}}</a>
                                    <a href='/index_absence' class="li-link">{{__('sidebar.عرض غياب طلاب الروضة')}}</a>
                                    <a href='#' class="li-link">ثالث</a>
                                    <a href='#' class="li-link">رابع</a>
                                    <a href='#' class="li-link">تقارير الغياب</a>
                                </div>
                            </div>
                        </li>
                        {{-- ---الآباء--- --}}
                        <!-- ======================== PARENTS ========================== -->
                        <p class="title">{{__('sidebar.parent section')}}<i class="ms-1 me-1 fa-solid fa-people-roof"></i></p>
                        <li class="dropdown">
                            <!-- ========== 2 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i
                                    class="icon-1 fa-solid fa-person-half-dress"
                                    ></i>
                                    <span class="menu-name">{{__('sidebar.parent')}}</span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href='/student_info' class="li-link">{{__('sidebar.son info')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.daily follow up ')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.absent info')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.monthly marks')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.final marks')}}</a>
                                </div>
                            </div>
                        </li>
                        {{-- ---شؤون الموظفين--- --}}
                        <!-- ======================== EMB ========================== -->
                                <p class="title">{{__('sidebar.personnel affairs section')}}<i class="ms-1 me-1 fa-solid fa-users-between-lines"></i></p>
                        <li class="dropdown">
                            <!-- ========== 2 ============ -->
                            <div class="sidebar-title">
                                <a href="#" class="li-link title-4">
                                    <i class="icon-1 fa-solid fa-user-tie"></i>
                                    <span class="menu-name">{{__('sidebar.personnel affairs')}}</span>
                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                </a>
                            </div>
                            <div class="submenu">
                                <div class="line-black">
                                    <a href="{{route('teachers.create')}}" class="li-link">{{__('sidebar.add new teacher')}}</a>
                                    <a href="{{route('teachers.index')}}" class="li-link">{{__('sidebar.view teachers')}}</a>
                                    <a href="{{route('teachers.show','deleted')}}" class="li-link">{{__('sidebar.deleted teachers')}}</a>
                                    <a href='/add-emp' class="li-link">{{__('sidebar.add new emb')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.view emb')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.deleted emb')}}</a>
                                    <a href="#" class="li-link">{{__('sidebar.emb and teachers absent')}}</a>
                                </div>
                            </div>
                        </li>
                                {{-- -------------شؤون الطلاب---------------  --}}
                        <!-- ======================== STUDENTS ========================== -->
                        <p class="title">{{__('sidebar.students affairs')}}<i class="ms-1 me-1 fa-solid fa-marker"></i></p>
                        <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">{{__('sidebar.students affairs')}}</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                {{-- Add Student --}}
                                <a href='{{route('students.create')}}' class="li-link">{{__('sidebar.add a Student')}}</a>
                                <a href='{{route('createStudent')}}' class="li-link">{{__('add a Student with livewire')}}</a>
                                {{-- review students --}}
                                <a href="{{route('students.index')}}" class="li-link">{{__('sidebar.review students')}}</a>
                                <a href="{{route('students.show','deleted')}}" class="li-link">{{__('sidebar.deleted Student')}}</a>
                                {{-- deleted students --}}
                                {{-- Student avsence --}}
                                <a href='/absence' class="li-link">{{__('sidebar.Student absence')}}</a>
                                <a href='/student_form' class="li-link">معلومات الطلاب</a>
                                <a href="#" class="li-link">الطلاب الأوائل</a>

                                {{-- START THE SECOND DROPDOWN --}}
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
                                    </ul>  {{-- END THE SECOND DROPDOWN --}}
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
                                    <a href="{{route('subject_teacher.index')}}" class="li-link">relationship</a>
                                    <span href='#' class="li-link">2</span>
                                    <a href='#' class="li-link">3</a>
                                </div>
                            </div>
                        </li>
                        {{-- ------------------------------ --}}
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
        {{-- start toggle section --}}
        <div class="section-home mt-5">
            <div id="my_toggle" class=" ">
                <div id="myDive" class="toggle-sidebar">
                    @yield('content')
                </div>
            </div>
        </div>
        {{-- end toggle section --}}
    </div>
    <!-- end sidebar -->
    <!-- ====================== -->
    <!-- ====================== -->


<!-- start link js -->
    @include('layouts.js_links')
    
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
