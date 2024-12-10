<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.header')
<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>

@include('layouts.sidebar-header')

<div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>
    <div class="sidebar my-scroll">

        <!-- ============= LIST ============== -->
        <div class="sidebar-nav">
            <ul class="list-ul">

                @include('layouts.students-affairs.students')

                {{-- -------------شؤون الطلاب---------------  --}}
                <!-- ======================== STUDENTS ========================== -->

                {{-- academic department --}}
                @include('layouts.academic-department.academic-department')
                <!-- ========== 5 ============ -->
                @include('layouts.control-department.control-department')
                <!-- ========== 5 ============ -->
                @include('layouts.teachers.teachers')

                <!-- ======================== PARENTS ========================== -->
                @include('layouts.parents.parents')

                {{-- ---شؤون الموظفين--- --}}
                <!-- ======================== EMB ========================== -->
                @include('layouts.personnel-affairs.personnel-affairs')


            </ul>
        </div>
    </div>
</div>
<div class="section-home mt-5">
    <div id="my_toggle" class="">
        <div id="myDive" class="toggle-sidebar">
            @include('layouts.toggle-section.toggle-section')
        </div>
    </div>
</div>
@include('layouts.js_links')
</body>
</html>
