<p class="title">{{__('sidebar.students affairs')}}<i class="ms-1 me-1 fa-solid fa-marker"></i></p>
<li class="dropdown">
<!-- ========== 2 ============ -->
<div class="sidebar-title">
    <a href="#" class="li-link title-4">
        <i class="icon-1 fa-solid fa-children"></i>

        <span class="menu-name">{{__('sidebar.superior')}}</span>
        <i class="icon-1 fa-solid fa-chevron-down"></i>
    </a>
</div>
<div class="submenu">
    <div class="line-black">
        {{-- Add Student --}}
        <a href='{{route("create-parents")}}' class="li-link">{{__('sidebar.new superior')}}</a>
        {{-- review students --}}
        <a href="{{route('display-parents')}}" class="li-link">{{__('sidebar.display superiors')}}</a>
        <a href="{{route('parents.show','deleted')}}" class="li-link">{{__('sidebar.deleted superiors')}}</a>
    </div>
</div>
</li>
<li class="dropdown">
<!-- ========== 2 ============ -->
<div class="sidebar-title">
    <a href="#" class="li-link title-4">
        <i class="icon-1 fa-solid fa-graduation-cap"></i>
        <span class="menu-name">{{__('sidebar.student')}}</span>
        <i class="icon-1 fa-solid fa-chevron-down"></i>
    </a>
</div>
<div class="submenu">
    <div class="line-black">
        <a href='{{route("create-student")}}' class="li-link">{{__('sidebar.new student')}}</a>
        <a href="{{route('display-students')}}" class="li-link">{{__('sidebar.display students')}}</a>
        <a href="{{route('students.show','deleted')}}" class="li-link">{{__('sidebar.deleted students')}}</a>
    </div>
</div>
</li>
