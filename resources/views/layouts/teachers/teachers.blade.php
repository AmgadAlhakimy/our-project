
{{--                                    teachers                             --}}
<div>

    <p class="title">{{__('sidebar.teacher section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
            {{-- ---المعلمين--- --}}

    <!-- ======================== TEACHERS ========================== -->
    <!-- ========== 1 ============ -->
    <!-- دفتر المتابعة المدرسة -->
    {{-- <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-children"></i>
                <span class="menu-name">دفتر متابعة مدرسة</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href='/school' class="li-link">علوم \ سادس </a>
                <a href='/students_view' class="li-link"> عرض \ علوم \ سادس </a>
                <a href='#' class="li-link">تقارير دفتر المتابعة</a>
            </div>
        </div>
    </li> --}}
    <!-- ========== 2 ============ -->
    <!--انشاء دفتر المتابعة الروضة -->
    <li class="dropdown" >
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-baby"></i>
                <span class="menu-name">{{__('student.followup notebook')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">

                {{-- @foreach($classrooms as $classroom)
                <a href="{{route('follow_up_children.writingFollowUp',$classroom->id)}}" class="li-link">{{$classroom->name}}</a>
                @endforeach --}}

            </div>
        </div>
    </li>
    <!-- عرض دفتر المتابعة الروضة -->
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-baby"></i>
                <span class="menu-name">{{__('student.display followup notebook')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                {{-- @foreach($classrooms as $classroom)
                    <a href="{{route('follow_up_children.displayAllChildren',$classroom->id)}}" class="li-link">{{$classroom->name}}</a>
                @endforeach --}}
            </div>
        </div>
    </li>
    <!-- ========== 2 ============ -->
    <!-- اضافة درجات / المحصلة -->
        {{-- <li class="dropdown">
            <div class="sidebar-title">
                <a href="#" class="li-link title-4">
                    <i class="icon-1 fa-solid fa-marker"></i>
                    <span class="menu-name"> اضافة الدرجات </span>
                    <i class="icon-1 fa-solid fa-chevron-down"></i>
                </a>
            </div>
            <div class="submenu">
                <div class="line-black">
                    <a href="{{route('marks.insertMarks',2)}}" class="li-link">رياضيات \ ثالث</a>
                    <a href='{{route('marks.insert',1)}}' class="li-link">علوم الحاسوب \ اول</a>
                    <a href="#" class="li-link"> تقارير </a>
                </div>
            </div>
        </li> --}}
    <!-- ========== 3 ============ -->
    <!-- التحضير والغياب -->
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-list-check"></i>
                <span class="menu-name">{{__('teacher.absent children')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                {{-- @foreach($classrooms as $classroom)
                    <a href="{{route('newAbsent',$classroom->id)}}" class="li-link">{{$classroom->name}}</a>
                @endforeach --}}
            </div>
        </div>
    </li>
    <!-- ========== 3 ============ -->
    <!-- عرض التحضير والغياب -->
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-list-check"></i>
                <span class="menu-name">{{__('teacher.dispaly absent children')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href='/index_absence' class="li-link">{{__('public.Reception')}}</a>
                <a href='/index_absence' class="li-link">{{__('public.Nursery')}}</a>
                <a href='/index_absence' class="li-link">{{__('public.KG1')}}</a>
                <a href='/index_absence' class="li-link">{{__('public.KG2')}}</a>
            </div>
        </div>
    </li>
    <!-- ========== 3 ============ -->
    {{-- الانصراف --}}
    <p class="title">{{__('sidebar.check out section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
    {{-- check out section --}}
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-list-check"></i>
                <span class="menu-name">{{__('teacher.new check out')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href='/check_out' class="li-link">{{__('public.Reception')}}</a>
                <a href='/check_out' class="li-link">{{__('public.Nursery')}}</a>
                <a href='/check_out' class="li-link">{{__('public.KG1')}}</a>
                <a href='/check_out' class="li-link">{{__('public.KG2')}}</a>
            </div>
        </div>
    </li>
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-list-check"></i>
                <span class="menu-name">{{__('teacher.display check out')}}</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href='#' class="li-link">{{__('public.Reception')}}</a>
                <a href='#' class="li-link">{{__('public.Nursery')}}</a>
                <a href='#' class="li-link">{{__('public.KG1')}}</a>
                <a href='#' class="li-link">{{__('public.KG2')}}</a>
            </div>
        </div>
    </li>
</div>
