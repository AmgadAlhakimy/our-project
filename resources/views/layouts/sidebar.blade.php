<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>sidevar</title>
        {{--
            <link rel="stylesheet" href="../../../public/css/check.css" />
            --}}

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

        <!-- start sidebar -->
        <!-- Start head  -->
        <!-- Start content  -->
        <div class="content">
            <div class="head ">
                <div class="search p-relative">
                    <input type="search" placeholder="Search" id="" />
                </div>
                <div class="icons">
                    <span class="notification p-relative">
                        <i class="fa-regular fa-bell fa-fw"></i>
                    </span>
                    <img src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}"/>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
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
                        <ul>
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="{{__('public.search')}}" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">{{__('public.search')}}</button>
                    </form>
                </div>

            </div>
        </div>
        <!-- end head  -->
        <!-- End content  -->
        <div class="side-container">
            <div class="sidebar">
                <!-- ============= logo ============================ -->
                <div class="my-head">
                    <div class="my-menu-btn">
                        <!-- <img src="images/logo2.png" class="logo-img-1" alt="">
                    <img src="images/logo2.png" class="logo-img-2" alt=""> -->
                        <img src="{{URL::asset('assets/images/layouts/logo2.png')}}" class="logo-img" alt="" />
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
                            <p class="title">Admin</p>
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
                                        <a href="{{route('educational_levels.create')}}" class="li-link">اضافة مرحلة دراسية</a>
                                        <a href="{{route('classes.create')}}"class="li-link">اضافة فصل دراسي</a>
                                        <a href="{{route('subjects.create')}}"class="li-link">اضافة مواد</a>
                                        <a href="{{route('activities.create')}}"class="li-link" >اضافة نشاط</a>
                                        <a href='/relations-page' class="li-link">الربط بين العلاقات</a>                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
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
                            </li>
                            <div>
                                <p class="title">test</p>
                            </div>
                            <li class="dropdown">
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
                                            >اضافة الدرجات الشهرية</a
                                        >
                                        <a href="#" class="li-link"
                                            >جاول الغياب</a
                                        >
                                        <a href="#" class="li-link">المحصلة</a>
                                        <a href="#" class="li-link">تقارير</a>
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
                                        <span class="menu-name">الاباء</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href="#" class="li-link"
                                            >معلومات اولياء الامور</a
                                        >
                                        <a href="#" class="li-link">2</a>
                                        <a href="#" class="li-link">3</a>
                                        <a href="#" class="li-link">4</a>
                                        <a href="#" class="li-link">5</a>
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
                                        <span class="menu-name"
                                            >شؤون الموظفين</span
                                        >
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href="#" class="li-link"
                                            >اضافة مدرس</a
                                        >
                                        <a href="#" class="li-link"
                                            >اضافة موظف</a
                                        >
                                        <a href="#" class="li-link"
                                            >جدول الغياب</a
                                        >
                                        <a href="#" class="li-link">1</a>
                                        <a href="#" class="li-link">2</a>
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
                            </li>
                            <li class="dropdown">
                                <!-- ========== 2 ============ -->
                                <div class="sidebar-title">
                                    <a href="#" class="li-link title-4">
                                        <i
                                            class="icon-1 fa-solid fa-window-restore"
                                        ></i>
                                        <span class="menu-name"
                                            >شؤون الطلاب</span
                                        >
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href="#" class="li-link"
                                            >اضافة طالب</a
                                        >
                                        <a href='/class_activ' class="li-link">2</a>
                                        <a href="#" class="li-link">3</a>
                                        <a href="#" class="li-link">4</a>
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
                                        <span class="menu-name"> المعلمين</span>
                                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                                    </a>
                                </div>
                                <div class="submenu">
                                    <div class="line-black">
                                        <a href="#" class="li-link"
                                            >دفتر المتابعة</a
                                        >
                                        <a href="/marks" class="li-link">Marks</a>
                                        <a href="#" class="li-link">3</a>
                                        <a href="#" class="li-link">4</a>
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
                                        <a href="#" class="li-link">1</a>                                
                                        <a href="#" class="li-link">2</a>
                                        <a href="#" class="li-link">3</a>
                                        <a href="#" class="li-link">4</a>
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
                                        <a href="#" class="li-link">5</a>
                                        <a href="#" class="li-link">6</a>
                                        <a href="#" class="li-link">7</a>
                                        <a href="#" class="li-link">8</a>
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
                            </li>
                            <li class="dropdown">
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
                                    </div>
                                </div>
                            </li>
                            <!-- ====================== -->
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
                        </li> --}}
                        <!-- ====================== -->
                    </ul>
                </div>
            </div>
        </div>

        <!-- Start head  -->
        <!-- Start content  -->
        <!-- <div class="content "  >
        <div class="head " >
            <div class="search p-relative">
                <input
                class="p-10 border-1s rad-10" type="search"
                placeholder="type A keyowrd" id=""/>
            </div>
            <div class="icons ">
                <span class="notification p-relative">
                <i class="fa-regular fa-bell fa-fw"></i>
                </span>
                <img src="images/skills-02.jpg" alt="" />
            </div>
        </div>
    </div> -->
        <!-- end head  -->
        <!-- End content  -->

        <!-- ============= home section ================= -->
        <section class="section-home">
            <div class="toggle-sidebar">
                {{-- <i class="fa-solid fa-list"></i>
                <div class="t-text">Lorem ipsum ea.</div>  --}}
            </div>
        </section>

        <!-- link js -->

    @yield('content')

    <script src="{{URL::asset('js/all.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/bootsstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    <script src="{{URL::asset('js/script.js')}}"></script>
    </body>
</html>
