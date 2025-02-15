@canany([
        'about children',
        'child followup notebook',
        'absent info',
        'leaving info',
])
    @can('about children')
        <p class="title">{{__('sidebar.parent section')}}<i class="ms-1 me-1 fa-solid fa-people-roof"></i></p>
        <li class="dropdown">
            <!-- ========== 2 ============ -->
            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    <i
                        class="icon-1 fa-solid fa-person-half-dress"
                    ></i>
                    <span class="menu-name">{{__('sidebar.about children')}}</span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    @if(Auth::user()->parent_id)
                        @foreach(Auth::user()->parent->students as $student)
                            <a href="{{route('student-more-info',$student->id)}}"
                               class="li-link">  {{$student->name}}</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </li>
    @endcan
    @can('child followup notebook')
        <li class="dropdown">
            <!-- ========== 2 ============ -->

            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    <i
                        class="icon-1 fa-solid fa-person-half-dress"
                    ></i>
                    <span class="menu-name">{{__('sidebar.followup notebook')}}</span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    @if(Auth::user()->parent_id)
                        @foreach(Auth::user()->parent->students as $student)
                            <a href="{{route('display-follow-up-notebook',$student->id)}}"
                               class="li-link">
                                {{$student->name}}
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </li>
    @endcan
    @can('absent info')
        <li class="dropdown">
            <!-- ========== 2 ============ -->

            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    <i
                        class="icon-1 fa-solid fa-person-half-dress"
                    ></i>
                    <span class="menu-name">{{__('sidebar.absent info')}}</span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    @if(Auth::user()->parent_id)
                        @foreach(Auth::user()->parent->students as $student)
                            <a href="{{route('absent-single-student',$student->id)}}"
                               class="li-link">
                                {{$student->name}}
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </li>
    @endcan
    @can('leaving info')
        <li class="dropdown">
            <!-- ========== 2 ============ -->

            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    <i
                        class="icon-1 fa-solid fa-person-half-dress"
                    ></i>
                    <span class="menu-name">{{__('sidebar.leaving info')}}</span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    @if(Auth::user()->parent_id)
                        @foreach(Auth::user()->parent->students as $student)
                            <a href="{{route('left-single-student',$student->id)}}"
                               class="li-link">
                                {{$student->name}}
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </li>
    @endcan
@endcanany
