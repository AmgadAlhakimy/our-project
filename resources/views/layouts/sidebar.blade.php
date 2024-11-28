<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header')
<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>

@include('layouts.sidebar-header')

<div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="" @endif>
    <div class="sidebar my-scroll">

        <!-- ============= LIST ============== -->
        <div class="sidebar-nav">
            <ul class="list-ul">


                {{-- academic department --}}
{{--                @include('layouts.academic-department.academic-department')--}}
                <!-- ========== 5 ============ -->
{{--                @include('layouts.control-department.control-department')--}}
                <!-- ========== 5 ============ -->
{{--                @include('layouts.teachers.teachers')--}}

                <!-- ======================== PARENTS ========================== -->
{{--                @include('layouts.parents.parents')--}}

                {{-- ---شؤون الموظفين--- --}}
                <!-- ======================== EMB ========================== -->
                @include('layouts.personnel-affairs.personnel-affairs')

                {{-- -------------شؤون الطلاب---------------  --}}
                <!-- ======================== STUDENTS ========================== -->
                @include('layouts.students-affairs.students-affairs')

            </ul>
        </div>
    </div>
</div>
    @include('layouts.toggle-section.toggle-section')


    {{-- start toggle section --}}

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
