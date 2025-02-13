<!-- Start head  -->
<!-- Start content  -->
<div class="content">

    <div class="head " dir="">
        <div class="head_1">
            <!-- ============= logo ================== -->
            <div class="my-menu-btn row " id="_clicked">
                <div class="col sidebar-icon">
                    <i class="h4 logo-text-1 fa-solid fa-bars"></i>
                </div>
                <img src="{{URL::asset(path: 'assets/images/layouts/logo2.png')}}" class="col logo-img" alt="" />
            </div>
            <div class=" search p-relative ph-search">
                <label for="rtl"></label> <input class="search1" type="search" placeholder="{{__('sidebar.search')}}"
                    id="rtl" />
            </div>
        </div>
        <div class="head_1">
            <div class=" icons ph-account">
                <span class="notification p-relative">
                    <i class="fa-regular fa-bell fa-fw "></i>
                </span>
                <a href="{{route('profile.edit')}}" class="btn--profile">
                    <img src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills" />
                </a>
            </div>
            {{-- THE DROPDOWN LUNGUAGE --}}
            <div class=" dropDownLang ph-lang">
                <div class="select">
                    <span class="lang_1 selected ">{{__('sidebar.short_lang')}}</span>
                    <span class="lang_2 selected">{{__('sidebar.Lang')}}</span>
                    <div class="caret"></div>
                </div>
                <ul class="menuLang ">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="">
                            <a rel="alternate" class="ps-4 pe-4 p-2" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }} "
                                class="lung_test">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- THE DROPDOWN MENEU 2 --}}
            {{-- home --}}

            {{-- --}}
            <div class=" me-1 ms-1 ph-home ">
                <a class="card-info  " aria-current="page" href='/Distribution_of_powers'>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <div :href="route('logout')" onclick="event.preventDefault();
                                this.closest('form').submit();">
                        <i class="mt-2 h1 icon-1 fas fa-sign-out-alt"></i>
                            {{-- {{ __('Log Out') }} --}}
                        </div>
                    </form>
                    
                </a>
            </div>
            <div class=" me-1 ms-1 ph-home border-left">
                <a class="card-info  " aria-current="page" href="{{route('home')}}">
                    <i class="mt-2 h2 icon-1 fa-solid fa-home-lg-alt"></i>
                </a>
            </div>

            {{-- -------------------- --}}
            <div class=" dropDownLang sec_menu ">
                <div class="select shadow-none border-none">
                    {{-- title --}}
                    <i class="d-none fa-solid fa-bars"></i>
                    <div class="caret  h1 mt-1 mb-1 sidebar-icon"></div>
                </div>
                <ul class="menuLang sub_head_menu ">
                    {{-- HOME --}}
                    <li class="ph-home_m">
                        <a class=" pe-3 ps-3 " aria-current="page" href='/'>
                            {{__('sidebar.home')}}</a>
                    </li>
                    {{-- 1 --}}
                    <hr class="ph-home_m">
                    <li>
                        <div id="sidebar_1" class="icons ">
                            <div class="row">
                                <div class="col-6">
                                    <a class=" ">{{__('sidebar.my account')}} </i></a>
                                </div>
                                <div class="col-6">
                                    <img class="" src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}"
                                        alt="skills" />
                                </div>
                            </div>
                        </div>
                    </li>
                    {{-- 2 --}}
                    <hr class="">
                    <li>
                        <a href="#" class="">{{__('sidebar.notifications')}} <i
                                class=" ms-1 me-1 icon-1 fa-solid fa-bell"></i></a>
                    </li>
                    {{-- 3 --}}
                    <hr class="">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="">
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class=" ps-4 pe-5 4-2">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                    {{-- 4 --}}
                </ul>
            </div>
        </div>
        {{-- ------------------------------------------- --}}
    </div>
</div>
<!-- end head  -->
<!-- End content  -->