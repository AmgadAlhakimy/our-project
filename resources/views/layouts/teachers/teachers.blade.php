{{--                                    teachers                             --}}
<div>
    @canany([
                       'create followup notebook',
                    'display followup notebook',
                    'edit followup notebook for all children',
                    'edit followup notebook individually',
                    'whole notebook with all students in class',
                    'whole notebook for specific student',
    ])
        <div class="followup notebook">
            <p class="title">{{__('follow_up.follow-up notebook')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
            {{-- ---المعلمين--- --}}

            @can('create followup notebook')
                <li class="dropdown">
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i class="icon-1 fa-solid fa-book-open"></i>
                            <span class="menu-name">{{__('student.followup notebook')}}</span>
                            <i class="icon-1 fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="submenu">
                        <div class="line-black">
                            @foreach($classrooms as $classroom)
                                <a href="{{route('follow_up_children.writingFollowUp',$classroom->id)}}"
                                   class="li-link">{{$classroom->name}}</a>
                            @endforeach

                        </div>
                    </div>
                </li>

            @endcan
            <!-- عرض دفتر المتابعة الروضة -->
            @can('display followup notebook')
                <li class="dropdown">
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i class="icon-1 fa-solid fa-book-open-reader"></i>
                            <span class="menu-name">{{__('student.display followup notebook')}}</span>
                            <i class="icon-1 fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="submenu">
                        <div class="line-black">
                            @foreach($classrooms as $classroom)
                                <a href="{{route('follow_up_children-display',$classroom->id)}}"
                                   class="li-link">{{$classroom->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endcan
            <!-- عرض دفتر المتابعة الروضة السابق لكل الطلاب  -->
            @can('whole notebook with all students in class')
                <li class="dropdown">
                    <div class="sidebar-title">
                        <a href="#" class="li-link title-4">
                            <i class="icon-1 fa-solid fa-book"></i>
                            <span class="menu-name">{{ __('follow_up.whole notebook') }}</span>
                            <i class="icon-1 fa-solid fa-chevron-down"></i>
                        </a>
                    </div>
                    <div class="submenu">
                        <div class="line-black">
                            @foreach($classrooms as $classroom)
                                <a href="{{ route('display-followUpMonthly',$classroom->id) }}"
                                   class="li-link">{{$classroom->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </li>
            @endcan
        </div>
    @endcanany

    <!-- ========== 2 ============ -->
    <!-- اضافة درجات / المحصلة -->

    <!-- ========== 3 ============ -->
    <!-- التحضير والغياب -->
    @canany([
                  'presenting children',
                    'display absent children',
                    'display absent children of all time',
                    'edit absent for all children',
                    'edit absent individually',
    ])
        @can('presenting children')
                <p class="title">{{__('absent.absent section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
            <li class="dropdown">
                <div class="sidebar-title">
                    <a href="#" class="li-link title-4">
                        <i class="icon-1 fa-regular fa-square-check"></i>
                        <span class="menu-name">{{__('absent.presenting children')}}</span>
                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <div class="submenu">
                    <div class="line-black">
                        @foreach($classrooms as $classroom)
                            <a href="{{route('absent.newPresenting',$classroom->id)}}"
                               class="li-link">{{$classroom->name}}</a>
                        @endforeach

                    </div>
                </div>
            </li>
        @endcan
        <!-- ========== 3 ============ -->
        <!-- عرض التحضير والغياب -->
        @can('display absent children')
            <li class="dropdown">
                <div class="sidebar-title">
                    <a href="#" class="li-link title-4">
                        <i class="icon-1 fa-solid fa-list-check"></i>
                        <span class="menu-name">{{__('absent.display absent children')}}</span>
                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <div class="submenu">
                    <div class="line-black">
                        @foreach($classrooms as $classroom)
                            <a href="{{route('absent.display',$classroom->id)}}"
                               class="li-link">{{$classroom->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
        @endcan
        <!-- ========== 3 ============ -->
        <!-- تعديل التحضير والغياب -->
        @can('edit absent for all children')
            <li class="dropdown">
                <div class="sidebar-title">
                    <a href="#" class="li-link title-4">
                        <i class="icon-1 fa-solid fa-check-double"></i>
                        <span class="menu-name">{{__('absent.edit absent children')}}</span>
                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <div class="submenu">
                    <div class="line-black">
                        @foreach($classrooms as $classroom)
                            <a href="{{route('absent.editAbsent',$classroom->id)}}"
                               class="li-link">{{$classroom->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
        @endcan
        <!-- عرض جميع الغياب الخاص بطلاب الفصل الواحد خلال الشهر  -->
        @can('display absent children of all time')
            <li class="dropdown">
                <div class="sidebar-title">
                    <a href="#" class="li-link title-4">
                        <i class="icon-1 fa-regular fa-address-book"></i>
                        <span class="menu-name">{{ __('absent.display absent for this month') }}</span>
                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <div class="submenu">
                    <div class="line-black">
                        @foreach($classrooms as $classroom)
                            <a href="{{route('absent-monthly',$classroom->id)}}"
                               class="li-link">{{$classroom->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
        @endcan
    @endcanany
    <!-- ========== 3 ============ -->
    {{-- الانصراف --}}
    @canany([
          'check leaving children',
                    'display left children',
                    'edit leaving children',
    ])
        <p class="title">{{__('sidebar.check out section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
        {{-- check out section --}}
        @can('check leaving children')
            <li class="dropdown">
                <div class="sidebar-title">
                    <a href="#" class="li-link title-4">
                        <i class="icon-1 fa-solid fa-list-ol"></i>
                        <span class="menu-name">{{__('leaving.leaving')}}</span>
                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <div class="submenu">
                    <div class="line-black">
                        @foreach($classrooms as $classroom)
                            <a href="{{route('leaving.newLeaving',$classroom->id)}}"
                               class="li-link">{{$classroom->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
        @endcan
        @can('display left children')
            <li class="dropdown">
                <div class="sidebar-title">
                    <a href="#" class="li-link title-4">
                        <i class="icon-1 fa-solid fa-list-check"></i>

                        <span class="menu-name">{{__('leaving.display leaving')}}</span>
                        <i class="icon-1 fa-solid fa-chevron-down"></i>
                    </a>
                </div>
                <div class="submenu">
                    <div class="line-black">
                        @foreach($classrooms as $classroom)
                            <a href="{{route('leaving.display',$classroom->id)}}"
                               class="li-link">{{$classroom->name}}</a>
                        @endforeach
                    </div>
                </div>
            </li>
        @endcan
    @endcanany
</div>
