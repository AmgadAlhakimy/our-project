{{--                             academic department                                  --}}

    <p class="title">{{__('sidebar.academic department')}}<i class="ms-1 me-1 fa-solid fa-school"></i></p>
    {{-- القسم الأكاديمي --}}
    {{-- اضافة الاقسام الأكاديمية --}}
    <li class="dropdown">
        <!-- ========== 1 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-school"></i>
                <span class="menu-name"> {{__('sidebar.addition')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a id="" href="{{route('educational_levels.create')}}" class="li-link ">{{__('sidebar.add educational Level')}}</a>
                <a id="" href="{{route('classrooms.create')}}" class="li-link">{{__('sidebar.add a class')}}</a>
                <a href="{{route('subjects.create')}}" class="li-link">{{__('sidebar.add Subject')}}</a>
                <a href="{{route('activities.create')}}" class="li-link">{{__('sidebar.add Activity')}}</a>
            </div>
        </div>
    </li>
    <!-- ========== 2 ============ -->
    {{-- عرض الاقسام الأكاديمية --}}
    <li class="dropdown">
        <!-- ========== 2 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-clipboard-list"></i>
                <span class="menu-name"> {{__('sidebar.academic department review')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href="{{route('show-levels')}}" class="li-link">{{__('sidebar.review of educational Level')}}</a>
                <a href="{{route('classrooms.index')}}" class="li-link">{{__('sidebar.review of classrooms')}}</a>
                <a href="{{route('subjects.index')}}" class="li-link"> {{__('sidebar.review of subjects')}}</a>
                <a href="{{route('activities.index')}}" class="li-link">{{__('sidebar.review activities')}}</a>
            </div>
        </div>
    </li>
    <!-- ========== 3 ============ -->
    {{-- سلة المهملات --}}
    <li class="dropdown">
        <!-- ========== 3 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-trash-can"></i>
                <span class="menu-name">{{__('sidebar.trash')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href="{{route('educational_levels.show','deleted')}}" class="li-link">{{__('sidebar.deleted educational Level')}}</a>
                <a href="{{route('classrooms.show','deleted')}}" class="li-link">{{__('sidebar.deleted classrooms')}}</a>
                <a href="{{route('subjects.show','deleted')}}" class="li-link">{{__('sidebar.deleted subjects')}}</a>
                <a href="{{route('activities.show','deleted')}}" class="li-link">{{__('sidebar.deleted activities')}}</a>
            </div>
        </div>
    </li>
    <!-- ========== 4 ============ -->
    {{--  عرض التقارير --}}
    <li class="dropdown">
        <!-- ========== 4 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-newspaper"></i>
                <span class="menu-name">{{__('sidebar.view records')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href="#" class="li-link">1</a>
                <a href="#" class="li-link">1</a>
            </div>
        </div>
    </li>
    <!-- ========== 5 ============ -->
    {{--  الربط والعلاقات  --}}
    <li class="dropdown">
        <!-- ========== 4 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-timeline"></i>
                <span class="menu-name">{{__('sidebar.relationships')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href='{{route('classroom_subject.create')}}' class="li-link">{{__('sidebar.subjects - classes')}}</a>
                <a href="{{route('classroom_teacher.create')}}" class="li-link">{{__('sidebar.teachers - classes')}}</a>
                <a href='{{route('subject_teacher.create')}}' class="li-link">{{__('sidebar.teachers - subjects')}}</a>
                <a href='{{route('activity_classroom.create')}}' class="li-link">{{__('sidebar.classes - activities')}}</a>
            </div>
        </div>
    </li>
    <!-- ========== 6 ============ -->
    {{-- عرض الربط والعلاقات  --}}
    <li class="dropdown">
        <!-- ========== 4 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-code-merge" ></i>
                <span class="menu-name">{{__('sidebar.display relationships')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href="{{route('classroom_subject.index')}}" class="li-link">{{__('sidebar.display subjects - classes')}}</a>
                <a href="{{route('classroom_teacher.index')}}" class="li-link">{{__('sidebar.display classes -  teacher')}}</a>
                <a href="{{route('subject_teacher.index')}}" class="li-link">{{__('sidebar.display subjects - teachers')}}</a>
                <a href="{{route('activity_classroom.index')}}" class="li-link">{{__('sidebar.display classes - activities')}}</a>
            </div>
        </div>
    </li>


