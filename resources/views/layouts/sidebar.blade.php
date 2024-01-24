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
            <label for="rtl"></label> <input class="search1" type="search" placeholder="{{__('sidebare.search')}}" id="rtl" />
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
<<<<<<< HEAD
=======

        {{-- <div class=""> --}}
            <a class=" me-2 ms-2 card-info" aria-current="page" href="#"><i class="fab-regular fa-home fa-fw"></i></a>
        {{-- </div> --}}
        {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto me-auto qmb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">{{__('public.home')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">{{__('public.link')}}</a>
                </li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="{{__('public.search')}}" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">{{__('public.search')}}</button>
            </form>
        </div> --}}
>>>>>>> 9fc40a64f7e161029c45f74a926fe81d35c316a1

        <div class="row">
            <i class="col-1 fab-regular fa-home fa-fw"></i>
            <a class="col me-2 ms-2 card-info" aria-current="page" href="#">home</a>
        </div>
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
        <div class="my-menu">
            <div class="sidebar-nav">
                <ul class="list-ul my-scroll">
                    <!--  dropdown list item -->
                    <p class="title">{{__('sidebar.Admin')}}</p>
                    <li class="dropdown">
                        <!-- ========== 1 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i class="icon-1 fa-solid fa-window-restore"></i>
                                <span class="menu-name">{{__('sidebar.academic department')}} </span>
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                {{-- -------------- --}}
                                {{-- START THE SECOND DROPDOWN --}}
                                <div class="dropDownLang my-element" onclick="cancelclick(event)" id="">
                                    <div class="select">
                                        <span class="selected"> {{__('sidebar.addition')}}</span>
                                        <div class="caret"></div>
                                    </div>
                                    {{-- onclick="propagateClick(event)" --}}
                                    <ul class="menuLang " id="childElement">
                                        <a id="" href="{{route('educational_levels.create')}}" class="li-link_2 ">{{__('sidebar.add educational level')}}</a>
                                        <a id="" href="{{route('classes.create')}}" class="li-link_2">  {{__('sidebar.add a class')}}</a>
                                        <a href="{{route('subjects.create')}}" class="li-link_2"> {{__('sidebar.add subject')}}</a>
                                        <a href="{{route('activities.create')}}" class="li-link_2" > {{__('sidebar.add activity')}}</a>
                                    </ul>
                                </div>
                                {{-- END THE SECOND DROPDOWN --}}
                                {{-- -------------- --}}
                                {{-- START THE SECOND DROPDOWN --}}
                                <div class="dropDownLang my-element" onclick="cancelclick(event)">
                                    <div class="select">
                                        <span class="selected"> {{__('sidebar.academic department review')}} </span>
                                        <div class="caret"></div>
                                    </div>
                                    <ul class="menuLang">
                                        <a href="{{route('educational_levels.index')}}" class="li-link_2">{{__('sidebar.review of educational level')}}</a>
                                        <a href="{{route('classes.index')}}" class="li-link_2">{{__('sidebar.review of classes')}}</a>
                                        <a href="{{route('subjects.index')}}" class="li-link_2"> {{__('sidebar.review of subjects')}}</a>
                                        <a href="{{route('activities.index')}}" class="li-link_2">{{__('sidebar.review activities')}}</a>
                                    </ul>
                                </div>
                                {{-- END THE SECOND DROPDOWN --}}
                                {{-- -------------- --}}
                                {{-- START THE SECOND DROPDOWN --}}
                                <div class="dropDownLang my-element" onclick="cancelclick(event)">
                                    <div class="select">
                                        <span class="selected">{{__('sidebar.trash')}}</span>
                                        <div class="caret"></div>
                                    </div>
<<<<<<< HEAD
                                    <ul class="menuLang">
                                        <a href="{{route('educational_levels.show',0)}}" class="li-link_2">{{__('sidebar.deleted educational level')}}</a>
                                        <a href="{{route('classes.show',0)}}" class="li-link_2">{{__('sidebar.deleted classes')}}</a>
                                        <a href="{{route('subjects.show',0)}}" class="li-link_2">{{__('sidebar.deleted subjects')}}</a>
                                        <a href="{{route('activities.show',0)}}" class="li-link_2">{{__('sidebar.deleted activites')}}</a>
=======
                                    <ul class="menulang">
                                        <a href="{{route('educational_levels.show','deleted')}}" class="li-link_2">{{__('sidebar.deleted educational level')}}</a>
                                        <a href="{{route('classes.show','deleted')}}" class="li-link_2">{{__('sidebar.deleted classes')}}</a>
                                        <a href="{{route('subjects.show','deleted')}}" class="li-link_2">{{__('sidebar.deleted subjects')}}</a>
                                        <a href="{{route('activities.show','deleted')}}" class="li-link_2">{{__('sidebar.deleted activities')}}</a>
>>>>>>> 9fc40a64f7e161029c45f74a926fe81d35c316a1
                                        {{-- <a href="#" class="li-link_2">1</a> --}}
                                    </ul>
                                </div>
                                {{-- END THE SECOND DROPDOWN --}}

                                <a href='/relations-page' class="li-link">الربط بين العلاقات</a>
                            </div>
                        </div>
                    </li>

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
                    <div>
                        <p class="title">test</p>
                    </div>
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
                                {{-- START THE SECOND DROPDOWN --}}
                                <div class="dropDownLang my-element">
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
                                {{-- END THE SECOND DROPDOWN --}}
                                {{-- START THE SECOND DROPDOWN --}}
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
                                </div>
                                {{-- END THE SECOND DROPDOWN --}}
                                <a href="#" class="li-link">3</a>
                                <a href="#" class="li-link">4</a>
                                <a href="#" class="li-link">5</a>
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
                                <a href='/add-teacher' class="li-link">اضافة مدرس</a>
                                <a href='/add-emp' class="li-link">اضافة موظف</a>
                                <a href="#" class="li-link">جدول الغياب</a>
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">2</a>
                            </div>
                        </div>
                    </li>

                    {{-- ---السكرتارية--- --}}
                    <!-- ======================== SECURTARY ========================== -->
                    {{-- <li class="dropdown">
                        <!-- ========== 2 ============ -->
                        <div class="sidebar-title">
                            <a href="#" class="li-link title-4">
                                <i
                                    class="icon-1 fa-solid fa-window-restore"
                                ></i>
                                <span class="menu-name"
                                    >السكرتارية</span
                                >
                                <i class="icon-1 fa-solid fa-chevron-down"></i>
                            </a>
                        </div>
                        <div class="submenu">
                            <div class="line-black">
                                <a href="#" class="li-link">1</a>
                                <a href="#" class="li-link">2</a>
                                <a href="#" class="li-link">3</a>
                                <a href="#" class="li-link">4</a>
                            </div>
                        </div>
                    </li> --}}
                            {{-- -------------شؤون الطلاب---------------  --}}
                    <!-- ======================== STUDENTS ========================== -->
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
                            <a href='{{route('students.create')}}' class="li-link">{{__('sidebar.add a student')}}</a>
                            <a href="{{route('students.index')}}" class="li-link">{{__('sidebar.review students')}}</a>
                            <a href="#" class="li-link">{{__('sidebar.deleted student')}}</a>
                            <a href='/absence' class="li-link">{{__('sidebar.student absence')}}</a>
                            <a href="#" class="li-link">2</a>
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
                                </ul>
                                {{-- تجربة --}}
                                {{-- <a href="#" class="">
                                    <ul class="list-ul">
                                        <li class="dropdown">
                                            <div class="sidebar-title">
                                                <a href="#" class="li-link title-4">

                                                    <span class="menu-name">تجربـــــه </span>
                                                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                                                </a>
                                            </div>
                                            <div class="submenu">
                                                <div class="line-black">
                                                    <a href="#" class="li-link">1</a>
                                                    <a href="#" class="li-link">2</a>
                                                    <a href="#" class="li-link">3</a>
                                                </div>
                                            </div>

                                        </li>
                                    </ul>
                                </div>
                                {{-- END THE SECOND DROPDOWN --}}
                            </div>
                        </div>

                        {{-- ---المعلمين--- --}}
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
                                <a href='/marks' class="li-link">الدرجات</a>
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
                                <div href='#' class="li-link">1</div>
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
                                {{-- <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">400000</a>
                                <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">100000</a>
                                <a href="#" class="li-link">200000</a>
                                <a href="#" class="li-link">400000</a>
                                <a href="#" class="li-link">200000</a> --}}
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
{{--<script src="https://code.jquery.com/jquery-3.5.1min.js"></script>--}}
</body>
</html>
