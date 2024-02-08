<!DOCTYPE html>

<html lang="">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> sidebar </title>


    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/framework.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/sidebar-style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/tables.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/normalize.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/sidebar-header.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/sidebar-style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/sidebar-bottuns.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/cards_info.css')}}" rel="stylesheet">
    <!-- box icons -->
    <!-- box icons -->
    <!-- styles -->
    <!-- styles -->
</head>
<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>


<!-- Start head  -->
<!-- Start content  -->
<div class="content">
    <div class="head " dir="ltr">
        {{-- THE MAIN SEARCH OF SIDEBAR --}}
        <div class="search p-relative">
            <label for="rtl"></label> <input class="search1" type="search"
                                             placeholder="{{__('sidebar.search')}}" id="rtl" />
        </div>
        <div class="icons">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-fw"></i>
                    </span>
            <img src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills"/>
        </div>
        {{-- THE DROPDOWN LUNGUAGE --}}
        <div class="dropDownLang">
            <div class="select">
                <span class="selected">{{__('sidebar.Lang')}}</span>
                <div class="caret"></div>
            </div>

            <ul class="menuLang">

                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
            <a class="cards_info_style me-1 ms-1 card-info " aria-current="page" href='/'>  <i class="h2 icon-1 fa-solid fa-home-lg-alt"></i></a>


    </div>
</div>
<!-- end head  -->
<!-- End content  -->
<!-- start sidebar -->
<div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>
    <div class="sidebar">
        <!-- ============= logo ================== -->
        <div class="my-head">
            <div class="my-menu-btn">
                {{-- ___________ the main logo in the sidebar --}}
                <img src="{{URL::asset('assets/images/layouts/logo2.png')}}" class="logo-img" alt="" />
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
                    <p class="title">{{__('sidebar.academic department')}}</p>
                    {{-- القسم الأكاديمي --}}
                    {{-- اضافة الاقسام الأكاديمية --}}
                    <li class="dropdown">
                        <!-- ========== 1 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> {{__('sidebar.addition')}} </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a id="" href="{{route('educational_levels.create')}}" class="li-link_2 ">{{__('sidebar.add educational Level')}}</a>
                                <a id="" href="{{route('classrooms.create')}}" class="li-link_2">  {{__('sidebar.add a class')}}</a>
                                <a href="{{route('subjects.create')}}" class="li-link_2"> {{__('sidebar.add Subject')}}</a>
                                <a href="{{route('activities.create')}}" class="li-link_2" > {{__('sidebar.add Activity')}}</a>
                            </div>
                        </div>
                    </li>
                    <!-- ========== 2 ============ -->
                    {{-- عرض الاقسام الأكاديمية --}}
                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
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
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">{{__('sidebar.trash')}} </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
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
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">{{__('sidebar.view records')}} </span>
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
                    {{--  الربط والعلاقات  --}}
                    <li class="dropdown">
                        <!-- ========== 4 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">{{__('sidebar.relations')}} </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href='{{route('subject_classrooms.create')}}' class="li-link">{{__('sidebar.subjects - classes')}}</a>
                                <a href='{{route('class_activity.create')}}' class="li-link">{{__('sidebar.classes - activities')}}</a>
                                <a href='{{route('teacher_subjects.create')}}' class="li-link">{{__('sidebar.teachers - subjects')}}</a>
                                <a href='/teacher_classes' class="li-link">{{__('sidebar.teachers - classes')}}</a>
                                <a href='' class="li-link">{{__('sidebar.relationship')}}</a>
                            </div>
                        </div>
                    </li>
                    <!-- ========== 5 ============ -->
                    {{-- ---الحسابات--- --}}
                    <!-- ======================== ACOUNTENT ========================== -->
                    {{-- <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">
                                    الحسابات
                                </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link">
                                    رسوم دراسية</a
                                >
                                <a href="#" class="li-link">
                                    رسوم تسجيل</a
                                >
                                <a href="#" class="li-link"
                                    >تقرير نصف السنة الحالي</a
                                >
                                <a href="#" class="li-link"
                                    >تقارير الرواتب
                                </a>
                                <a href="#" class="li-link"
                                    >تقارير السنة المالية
                                </a>
                            </div>
                        </div>
                    </li> --}}
                    {{--  START the second section --}}

                        <p class="title">{{__('sidebar.teacher section')}}</p>
                            {{-- ---المعلمين--- --}}
                    <!-- ======================== TEACHERS ========================== -->
                    <li class="dropdown">
                    <!-- ========== 1 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i class="icon-1 fa-solid fa-window-restore"></i>
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
                    <li class="dropdown">
                    <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i class="icon-1 fa-solid fa-window-restore"></i>
                                <span class="menu-name">دفتر متابعة روضة</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="{{route('follow_up_children.writingFollowUp',1)}}" class="li-link">quran \ KG1 </a>
                                <a href="{{route('follow_up_children.displayAllChildren',1)}}" class="li-link">{{__('sidebar.عرض دفتر المابعة (الروضة)')}}</a>
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
                                <a href="{{route('marks.insertMarks',2)}}" class="li-link">رياضيات \ ثالث</a>
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
                                <a href='/absence_class' class="li-link">{{__('sidebar.تحضير طلاب الروضة')}}</a>
                                <a href='/index_absence' class="li-link">{{__('sidebar.عرض غياب طلاب الروضة')}}</a>
                                <a href='#' class="li-link">ثالث</a>
                                <a href='#' class="li-link">رابع</a>
                                <a href='#' class="li-link">تقارير الغياب</a>
                            </div>
                        </div>
                    </li>






                        <p class="title">قسم الكنترول</p>

                    {{--  END the second section --}}
                    {{-- ---الكنترول--- --}}
                    <!-- ======================== CONTROLE ========================== -->
                    {{-- <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name">كنترول</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link"
                                >اضافة الدرجات الشهرية</a>
                                <a href="#" class="li-link"
                                >جاول الغياب</a>
                                <a href="#" class="li-link">المحصلة</a>
                                <a href="#" class="li-link">تقارير</a>
                            </div>
                        </div>
                    </li> --}}

                    {{-- ---الآباء--- --}}
                    <!-- ======================== PARENTS ========================== -->
                    <p class="title">{{__('sidebar.parent section')}}</p>

                    <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
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
                                <a href="{{route('teachers.create')}}" class="li-link">اضافة مدرس</a>
                                <a href="{{route('teachers.index')}}" class="li-link">عرض المدرسين</a>
                                <a href="{{route('teachers.show','deleted')}}" class="li-link">عرض المدرسين المحذوفين</a>
                                <a href='/add-emp' class="li-link">اضافة موظف</a>
                                <a href="#" class="li-link">جدول الغياب</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">2</a>
                            </div>
                        </div>
                    </li>
                            {{-- -------------شؤون الطلاب---------------  --}}
                    <!-- ======================== STUDENTS ========================== -->
                    <p class="title">{{__('sidebar.students affairs')}}</p>

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
                                <a href="{{route('teacher_subjects.index')}}" class="li-link">relationship</a>
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

                    {{-- ---قسم 3--- --}}
                    {{-- <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> قسم 3</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link">9</a>
                                <a href="#" class="li-link">10</a>
                                <a href="#" class="li-link">11</a>
                                <a href="#" class="li-link">12</a>
                            </div>
                        </div>
                    </li> --}}

                    {{-- ---قسم 4--- --}}
                    {{-- <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"> قسم 4</span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link">13</a>
                                <a href="#" class="li-link">14</a>
                                <a href="#" class="li-link">15</a>
                                <a href="#" class="li-link">16</a>
                            </div>
                        </div>
                    </li> --}}
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
        {{-- <div class="my-menu menu-footer">
            <ul class="list-ul">
                <!--  dropdown list item -->
                <p class="title">admin</p>
                <li class="dropdown">
                    <!-- ========== 1 ============ -->
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i
                                class="icon-1 fa-solid fa-window-restore"
                            ></i>
                            <span class="menu-name"> من نحن </span>
                        </a>
                    </div>
                </li>
                <li class="dropdown">
                    <!-- ========== 2 ============ -->
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i
                                class="icon-1 fa-solid fa-window-restore"
                            ></i>
                            <span class="menu-name"> خروج </span>
                        </a>
                    </div>
        </ul>
    </div>
                </li> --}}
        <!-- ====================== -->
</div>
</div>
<!-- ============= home section ================= -->
<section class="section-home">
    <div class="toggle-sidebar">
    </div>
</section>

<!-- link js -->

@yield('content')

<script src="{{URL::asset('js/all.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
<script src="{{URL::asset('js/script.js')}}"></script>
</body>
</html>


{{-- تصميم الدروبداون الثانوي --}}

                                {{-- <div class="dropDownLang my-element">
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

                                <div class="dropDownLang my-element" >
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
                                </div> --}}
