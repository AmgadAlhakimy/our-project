@canany([
     'create user',
                'display users',
                'edit user',
                'change users password',
                'display deleted users',
                'delete user',
                'restore user',
                'forceDelete user',
                'roles',
                'create role',
                'display roles',
                'edit role',
                'display role permissions',
                'delete role',
                'who did this',
])
    <p class="title">{{__('user.users and roles')}}<i class="ms-1 me-1 fa-solid fa-users-between-lines"></i></p>

    @canany([
                    'create role',
                    'display roles',
                    'edit role',
                    'display role permissions',
                    'delete role',
    ])
        <li class="dropdown">
            <!-- ========== 1 ============ -->
            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    {{-- <i class="icon-1 fa-solid fa-school"></i> --}}
                    <i class="icon-1 fas fa-key"></i>
                    <span class="menu-name"> {{__('role.roles')}} </span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    @can('create role')

                        <a id="" href="{{route('create-role')}}" class="li-link ">{{__('role.new role')}}</a>
                    @endcan
                    @can('display roles')
                        <a id="" href="{{route('display-roles')}}" class="li-link ">{{__('role.display roles')}}</a>
                    @endcan
                </div>
            </div>
        </li>
    @endcanany
    @canany([
         'create user',
                    'display users',
                    'edit user',
                    'change users password',
                    'display deleted users',
                    'delete user',
                    'restore user',
                    'forceDelete user',
    ])
        <li class="dropdown">
            <!-- ========== 1 ============ -->
            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    <i class="icon-1 fa-solid fa-users"></i>
                    <span class="menu-name"> {{__('user.users')}} </span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    @can('create user')
                        <a id="" href="{{route('create-user')}}" class="li-link ">{{__('user.new user')}}</a>
                    @endcan
                    @can('display users')
                        <a id="" href="{{route('display-users')}}" class="li-link ">{{__('user.display users')}}</a>
                    @endcan
                    @can('display deleted users')
                        <a id="" href="{{route('users.show','deleted')}}"
                           class="li-link ">{{__('user.deleted users')}}</a>
                    @endcan

                </div>
            </div>
        </li>
    @endcan
@endcanany
{{--@can('promote students')--}}
{{--    <li class="dropdown">--}}
{{--        <div class="sidebar-title">--}}
{{--            <a href="{{route("promote-students")}}" class="li-link title-4">--}}
{{--                <i class="icon-1 fa-solid fa-graduation-cap"></i>--}}
{{--                <span class="menu-name">--}}
{{--                    {{__('student.student deportation')}}--}}
{{--                </span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--    </li>--}}
{{--@endcan--}}

