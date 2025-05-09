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
                {{-- the serch form shows only with phone style --}}
                <div class="search p-relative ph-search_m">
                    <input class="search1 ms-2 me-2 " type="search" placeholder="{{__('sidebar.search')}}" id="rtl"/>
                </div>
                <hr class="ph-search_m">
                @include('layouts.personnel-affairs.personnel-affairs')
                @include('layouts.academic-department.academic-department')
                @livewire('students-affairs.student.students-display-sidebar')
                @livewire('FollowUp.follow-up')
                @include('layouts.parents.parents')
            </ul>
        </div>
    </div>
</div>
<div class="section-home mt-5">
    <div id="my_toggle" class="">
        <div id="myDive" class="toggle-sidebar">
            {{$slot}}
        </div>
    </div>
</div>
<!-- ====================== -->

@livewire('users.user-time')
@include('layouts.js_links')

</body>
</html>
