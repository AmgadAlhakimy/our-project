
{{--      personnel affairs     --}}


<p class="title">{{__('sidebar.personnel affairs section')}}<i class="ms-1 me-1 fa-solid fa-users-between-lines"></i></p>
<li class="dropdown">
    <!-- ========== 2 ============ -->
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-user-tie"></i>
            <span class="menu-name">{{__('personnel-affairs.teachers affairs')}}</span>
            <i class="icon-1 fa-solid fa-chevron-down"></i>
        </a>
    </div>
    <div class="submenu">
        <div class="line-black">
            <a href="{{route('teachers.create')}}" class="li-link">{{__('sidebar.add new teacher')}}</a>
            <a href="{{route('display-teachers')}}" class="li-link">{{__('sidebar.view teachers')}}</a>
            <a href="{{route('teachers.show','deleted')}}" class="li-link">{{__('sidebar.deleted teachers')}}</a>
        </div>
    </div>
</li>
<li class="dropdown">
    <!-- ========== 2 ============ -->
    <div class="sidebar-title">
        <a href="#" class="li-link title-4">
            <i class="icon-1 fa-solid fa-user-tie"></i>
            <span class="menu-name">{{__('personnel-affairs.embloyee affairs')}}</span>
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
</li>
<li class="dropdown">
    <!-- ========== 2 ============ -->
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
            {{-- translate --}}
            <a href="#" class="li-link">{{__('personnel-affairs.personnel records')}}</a>
        </div>
    </div>
</li>
