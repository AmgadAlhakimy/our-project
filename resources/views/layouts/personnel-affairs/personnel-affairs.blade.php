<p class="title">{{__('sidebar.personnel affairs section')}}<i class="ms-1 me-1 fa-solid fa-users-between-lines"></i></p>
<li class="dropdown">
    <!-- ========== 1 ============ -->
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-school"></i>
            <span class="menu-name"> {{__('user.users')}} </span>
            <i class="icon-1 fa-solid fa-chevron-down"></i>
        </a>
    </div>
    <div class="submenu">
        <div class="line-black">
            <a id="" href="{{route('create-user')}}" class="li-link ">{{__('user.new user')}}</a>
            <a id="" href="{{route('display-users')}}" class="li-link ">{{__('user.display users')}}</a>
            <a id="" href="{{route('users.show','deleted')}}" class="li-link ">{{__('user.deleted users')}}</a>

        </div>
    </div>
</li>
<li class="dropdown">
    <!-- ========== 1 ============ -->
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-school"></i>
            <span class="menu-name"> {{__('role.roles')}} </span>
            <i class="icon-1 fa-solid fa-chevron-down"></i>
        </a>
    </div>
    <div class="submenu">
        <div class="line-black">
            <a id="" href="{{route('create-role')}}" class="li-link ">{{__('role.new role')}}</a>
            <a id="" href="{{route('display-roles')}}" class="li-link ">{{__('role.display roles')}}</a>
        </div>
    </div>
</li>
<li></li>
<!-- ========== MAJOR ============ -->
{{-- <li class="dropdown">
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-user-tie"></i>
            <span class="menu-name">{{__('personnel-affairs.majors')}}</span>
            <i class="icon-1 fa-solid fa-chevron-down"></i>
        </a>
    </div>
    <div class="submenu">
        <div class="line-black">
            <a href="{{route('majors.create')}}" class="li-link">{{__('sidebar.add new major')}}</a>
            <a href="{{route('display-majors')}}" class="li-link">{{__('sidebar.view majors')}}</a>
            <a href="{{route('majors.show','deleted')}}" class="li-link">{{__('sidebar.deleted majors')}}</a>
        </div>
    </div>
</li> --}}
<!-- ========== EMPLOYEE ============ -->
{{-- <li class="dropdown">
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-user-tie"></i>
            <span class="menu-name">{{__('personnel-affairs.employee affairs')}}</span>
            <i class="icon-1 fa-solid fa-chevron-down"></i>
        </a>
    </div>
    <div class="submenu">
        <div class="line-black">
            <a href="{{route('employees.create')}}" class="li-link">{{__('sidebar.add new emb')}}</a>
            <a href="#" class="li-link">{{__('sidebar.view emb')}}</a>
            <a href="#" class="li-link">{{__('sidebar.deleted emb')}}</a>
        </div>
    </div>
</li> --}}
<!-- ========== EMPLOYEES AND TEACHERS RECORDS ============ -->
{{-- <li class="dropdown">
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-user-tie"></i>
            <span class="menu-name">{{__('personnel-affairs.records and absent')}}</span>
            <i class="icon-1 fa-solid fa-chevron-down"></i>
        </a>
    </div>
    <div class="submenu">
        <div class="line-black">
            <a href="#" class="li-link">{{__('sidebar.emb and teachers absent')}}</a>
            <a href="#" class="li-link">{{__('personnel-affairs.personnel records')}}</a>
        </div>
    </div>
</li> --}}
