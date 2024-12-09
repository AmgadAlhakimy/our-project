<p class="title">{{__('sidebar.students affairs')}}<i class="ms-1 me-1 fa-solid fa-marker"></i></p>
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
        <a href='{{route("create-student")}}' class="li-link">{{__('sidebar.add a Student')}}</a>
        {{-- review students --}}
        <a href="{{route('display-students')}}" class="li-link">{{__('sidebar.review students')}}</a>
        <a href="{{route('students.show','deleted')}}" class="li-link">{{__('sidebar.deleted Student')}}</a>
        {{-- deleted students --}}
        {{-- Student avsence --}}
        <a href='/absence' class="li-link">{{__('sidebar.Student absence')}}</a>
        <a href='/student_form' class="li-link">معلومات الطلاب</a>
        <a href="#" class="li-link">الطلاب الأوائل</a>
    </div>
</div>
</li>
