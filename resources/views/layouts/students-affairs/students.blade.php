<div>
    <p class="title">{{__('sidebar.students affairs')}}<i class="ms-1 me-1 fa-solid fa-marker"></i></p>
    @can('superiors')
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
                    @can('create superior')
                        <a href='{{route("create-parents")}}' class="li-link">{{__('sidebar.new superior')}}</a>
                    @endcan
                    @can('display superiors')
                        <a href="{{route('display-parents')}}" class="li-link">{{__('sidebar.display superiors')}}</a>
                    @endcan
                    @can('display deleted superiors')
                        <a href="{{route('parents.show','deleted')}}"
                           class="li-link">{{__('sidebar.deleted superiors')}}</a>
                    @endcan
                </div>
            </div>
        </li>
    @endcan
    <!-- ========== new student ============ -->
    @can('create student')
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="{{route("create-student")}}" class="li-link title-4">
                <i class="icon-1 fa-solid fa-graduation-cap"></i>
                <span class="menu-name">
                    {{__('sidebar.new student')}}
                </span>
            </a>
        </div>
    </li>
    @endcan

    <!-- ========== display students ============ -->
    @can('display students')
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-graduation-cap"></i>
                <span class="menu-name">{{__('sidebar.display students')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                @foreach ($classrooms as $classroom)
                    <a href="{{route('display-students',$classroom->id)}}" class="li-link">{{$classroom->name}}</a>
                @endforeach
            </div>
        </div>
    </li>
    @endcan
    @can('display deleted students')
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="{{route('students.show','deleted')}}" class="li-link title-4">
                <i class="icon-1 fa-solid fa-trash"></i>
                <span class="menu-name">{{__('sidebar.deleted students')}}</span>
            </a>
        </div>
    </li>
    @endcan
</div>
