
{{--                                    teachers                             --}}
            
    <p class="title">{{__('sidebar.teacher section')}}<i class="ms-1 me-1 fa-solid fa-person-chalkboard"></i></p>
            {{-- ---المعلمين--- --}}
    
    <!-- ======================== TEACHERS ========================== -->
    <li class="dropdown">
    <!-- ========== 1 ============ -->
    <!-- دفتر المتابعة المدرسة -->
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
                {{-- <a href="{{route('follow_up_children.displayAllChildren',1)}}" class="li-link">{{__('sidebar.عرض دفتر المابعة (الروضة)')}}</a> --}}
                <a href='#' class="li-link">تقارير دفتر المتابعة</a>
            </div>
        </div>
    </li>
    <li class="dropdown">
    <!-- ========== 2 ============ -->
    <!-- دفتر المتابعة الروضة -->
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-baby"></i>
                <span class="menu-name">دفتر متابعة روضة</span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href="{{route('follow_up_children.writingFollowUp',1)}}" class="li-link">KG1</a>
                <a href="{{route('follow_up_children.displayAllChildren',1)}}" class="li-link">{{__('sidebar.عرض دفتر المابعة (الروضة)')}}</a>
                <a href='#' class="li-link"> تقارير دفتر المتابعة</a>
            </div>
        </div>
    </li>
    <!-- ========== 2 ============ -->
    <!-- اضافة درجات / المحصلة -->
        <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-marker"></i>
                <span class="menu-name"> اضافة الدرجات </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                {{-- <a href="{{route('marks.insertMarks',2)}}" class="li-link">رياضيات \ ثالث</a> --}}
                <a href='{{route('marks.insert',1)}}' class="li-link">علوم الحاسوب \ اول</a>

                <a href="#" class="li-link"> تقارير </a>
            </div>
        </div>
    </li>
    <!-- ========== 3 ============ -->
    <!-- التحضير والغياب -->
    <li class="dropdown">
        <div class="sidebar-title">
            <a href="#" class="li-link title-4">
                <i class="icon-1 fa-solid fa-list-check"></i>
                <span class="menu-name"> التحضير والغياب  </span>
                <i class="icon-1 fa-solid fa-chevron-down"></i>
            </a>
        </div>
        <div class="submenu">
            <div class="line-black">
                <a href='/absence_class' class="li-link">{{__('sidebar.تحضير طلاب الروضة')}}</a>
                <a href='/index_absence' class="li-link">{{__('sidebar.عرض غياب طلاب الروضة')}}</a>
                <a href='#' class="li-link">ثالث</a>
                <a href='#' class="li-link">رابع</a>
                <a href='#' class="li-link">تقارير الغياب</a>
            </div>
        </div>
    </li>
    {{-- ---الآباء--- --}}