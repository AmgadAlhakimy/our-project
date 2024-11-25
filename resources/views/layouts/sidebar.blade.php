<!DOCTYPE html>
<html lang="">
@include('layouts.header')

<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>


    @include('layouts.sidebar_header')
<!-- start sidebar -->

    <div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="" @endif>
        <div class="sidebar my-scroll">

            <!-- ============= LIST ============== -->
            <div class="sidebar-nav ">
                    <ul class="list-ul ">


                        {{-- academic department --}}
                        @include('layouts.academic_department.academic_department')
                        <!-- ========== 5 ============ -->
                        @include('layouts.control_department.control_department')
                        <!-- ========== 5 ============ -->
                        @include('layouts.teachers.teachers')

                        <!-- ======================== PARENTS ========================== -->
                        @include('layouts.parents.parents')

                        {{-- ---شؤون الموظفين--- --}}
                        <!-- ======================== EMB ========================== -->
                        @include('layouts.personnel_affairs.personnel_affairs')

                        {{-- -------------شؤون الطلاب---------------  --}}
                        <!-- ======================== STUDENTS ========================== -->
                        @include('layouts.students_affairs.students_affairs')

                    </ul>
                </div>
            </div>

            @include('layouts.toggle_section.toggle_section')


        {{-- start toggle section --}}

    </div>
    <!-- end sidebar -->
    <!-- ====================== -->
    <!-- ====================== -->


<!-- start link js -->
    @include('layouts.js_links')

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
