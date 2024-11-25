<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


@include('layouts.header')
<body @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>

@include('layouts.sidebar-header')

<div class="side-container" @if(LaravelLocalization::setLocale()=='ar') dir="rtl" @endif>
    <div class="sidebar my-scroll">

        <!-- ============= LIST ============== -->
        <div class="sidebar-nav ">
            <ul class="list-ul ">

                @include('layouts.academic-department.academic-department')
                @include('layouts.control-department.control-department')
                @include('layouts.teachers.teachers')
                @include('layouts.parents.parents')
                @include('layouts.personnel-affairs.personnel-affairs')
                @include('layouts.students-affairs.students-affairs')
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
