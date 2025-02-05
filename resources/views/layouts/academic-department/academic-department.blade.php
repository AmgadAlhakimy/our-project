{{--                             academic department                                  --}}
@can('ACADEMIC DEPARTMENT')
<p class="title">{{__('sidebar.academic department')}}<i class="ms-1 me-1 fa-solid fa-school"></i></p>
{{-- القسم الأكاديمي --}}
{{-- اضافة الاقسام الأكاديمية --}}

@can('academic addition')
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
                @can('create educational-level')
                    <a id="" href="{{route('educational-levels.create')}}"
                       class="li-link "> {{__('sidebar.new educational level')}}</a>
                @endcan
                @can('create classroom')
                    <a id="" href="{{route('classrooms.create')}}" class="li-link">{{__('sidebar.new classroom')}}</a>
                @endcan
                @can('create subject')
                    <a href="{{route('subjects.create')}}" class="li-link">{{__('sidebar.new subject')}}</a>
                @endcan
                @can('create activity')
                    <a href="{{route('activities.create')}}" class="li-link">{{__('sidebar.new activity')}}</a>
                @endcan
            </div>
        </div>
    </li>
@endcan
<!-- ========== 2 ============ -->

@can('academic display')
    <li class="dropdown">
        <!-- ========== 2 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-clipboard-list"></i>
                <span class="menu-name"> {{__('sidebar.display')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                @can('display educational-levels')
                    <a href="{{route('display-levels')}}"
                       class="li-link">{{__('sidebar.display educational levels')}}</a>
                @endcan
                @can('display classrooms')
                    <a href="{{route('display-classrooms')}}" class="li-link">{{__('sidebar.display classrooms')}}</a>
                @endcan
                @can('display subjects')
                    <a href="{{route('display-subjects')}}" class="li-link"> {{__('sidebar.display subjects')}}</a>
                @endcan
                @can('display activities')
                    <a href="{{route('display-activities')}}" class="li-link">{{__('sidebar.display activities')}}</a>
                @endcan
            </div>
        </div>
    </li>
@endcan
<!-- ========== 3 ============ -->
{{-- سلة المهملات --}}
@can('academic trash')
    <li class="dropdown">
        <!-- ========== 3 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-trash-can"></i>
                <span class="menu-name">{{__('sidebar.recycle bin')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                @can('display deleted educational-levels')
                    <a href="{{route('educational-levels.show','deleted')}}"
                       class="li-link">{{__('sidebar.deleted educational levels')}}</a>
                @endcan
                @can('display deleted classrooms')
                    <a href="{{route('classrooms.show','deleted')}}"
                       class="li-link">{{__('sidebar.deleted classrooms')}}</a>
                @endcan
                @can('display deleted subjects')
                    <a href="{{route('subjects.show','deleted')}}"
                       class="li-link">{{__('sidebar.deleted subjects')}}</a>
                @endcan
                @can('display deleted activities')
                    <a href="{{route('activities.show','deleted')}}"
                       class="li-link">{{__('sidebar.deleted activities')}}</a>
                @endcan
            </div>
        </div>
    </li>
@endcan
<!-- ========== 4 ============ -->
@can('teachers')
    <li class="dropdown">
        <!-- ========== 2 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-user-tie"></i>
                <span class="menu-name">{{__('personnel-affairs.teachers')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                @can('create teacher')
                    <a href="{{route('teachers.create')}}" class="li-link">{{__('teacher.new teacher')}}</a>
                @endcan
                @can('display teachers')
                    <a href="{{route('display-teachers')}}" class="li-link">{{__('teacher.display teachers')}}</a>
                @endcan
                @can('display deleted teachers')
                    <a href="{{route('teachers.show','deleted')}}"
                       class="li-link">{{__('teacher.deleted teachers')}}</a>
                @endcan
            </div>
        </div>
    </li>
@endcan
<!-- ========== 5 ============ -->
{{--  الربط والعلاقات  --}}
@can('academic distribution management')
    <li class="dropdown">
        <!-- ========== 4 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-timeline"></i>
                <span class="menu-name">{{__('sidebar.academic distribution management')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                @can('create subjects-classes')
                    <a href='{{route('class-subjects.create')}}'
                       class="li-link">{{__('sidebar.subjects - classes')}}</a>
                @endcan
                @can('create teachers-classes')
                    <a href="{{route('class-teachers.create')}}"
                       class="li-link">{{__('sidebar.teachers - classes')}}</a>
                @endcan
                @can('create teachers-subjects')
                    <a href='{{route('subject-teachers.create')}}'
                       class="li-link">{{__('sidebar.teachers - subjects')}}</a>
                @endcan
                @can('create classes-activities')
                    <a href='{{route('activity-classrooms.create')}}'
                       class="li-link">{{__('sidebar.classes - activities')}}</a>
                @endcan
            </div>
        </div>
    </li>
@endcan
<!-- ========== 6 ============ -->
{{-- عرض الربط والعلاقات  --}}
@can('display academic distribution')
    <li class="dropdown">
        <!-- ========== 4 ============ -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-code-merge"></i>
                <span class="menu-name">{{__('sidebar.display academic distribution')}} </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                @can('display subjects-classes')
                    <a href="{{route('display-class-subjects')}}"
                       class="li-link">{{__('sidebar.display subjects - classes')}}</a>
                @endcan
                @can('display teachers-classes')
                    <a href="{{route('display-class-teachers')}}"
                       class="li-link">{{__('sidebar.display classes -  teacher')}}</a>
                @endcan
                @can('display teachers-subjects')
                    <a href="{{route('display-subject-teachers')}}"
                       class="li-link">{{__('sidebar.display subjects - teachers')}}</a>
                @endcan
                @can('display classes-activities')
                    <a href="{{route('display-activity-classrooms')}}"
                       class="li-link">{{__('sidebar.display classes - activities')}}</a>
                @endcan
            </div>
        </div>
    </li>
@endcan
@endcan


