<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    

    @include('layouts.header')
<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>

    @include('layouts.sidebar_header')

<div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>
    <div class="sidebar my-scroll">

        <!-- ============= LIST ============== -->
        <div class="sidebar-nav ">
            <ul class="list-ul ">
                
                @include('layouts.academic_department.academic_department')
                @include('layouts.control_department.control_department')
                @include('layouts.teachers.teachers')
                @include('layouts.parents.parents')
                @include('layouts.personnel_affairs.personnel_affairs')
                @include('layouts.students_affairs.students_affairs')
            </ul>
        </div>
    </div>
    <div class="section-home">
        <div id="my_toggle" class="toggle-sidebar">
           {{ $slot }}
        </div>
    </div>
    <!-- ====================== -->
</div>
@include('layouts.js_links')

</body>
</html>
