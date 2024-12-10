<!-- Start head  -->
<!-- Start content  -->
<div class="content">
    <div class="head " dir="">
        <div class="head_1">
            <!-- ============= logo ================== -->
            <div class="my-menu-btn row " id="_clicked">
                {{-- ___________ the main logo in the sidebar --}}
                <div class="col sidebar-icon">
                    <i class="h4 logo-text-1 fa-solid fa-bars"></i>
                </div>
                <img src="{{URL::asset('assets/images/layouts/logo2.png')}}" class="col logo-img" alt="" />
            </div>
            {{-- THE MAIN SEARCH OF SIDEBAR --}}
            <div class=" search p-relative ph-search">
                <label for="rtl"></label> <input class="search1" type="search"
                    placeholder="{{__('sidebar.search')}}" id="rtl" />
            </div> 
        </div>
        <div class="head_1">
            <div class=" icons ph-account">
                        <span class="notification p-relative">
                            <i class="fa-regular fa-bell fa-fw "></i>
                        </span>
                <img src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills"/>
            </div>
            {{-- THE DROPDOWN LUNGUAGE --}}
            <div class=" dropDownLang ph-lang">
                <div class="select">
                    <span class="lang_1 selected " >{{__('sidebar.short_lang')}}</span>
                    <span class="lang_2 selected" >{{__('sidebar.Lang')}}</span>
                    <div class="caret"></div>
                </div>
                <ul class="menuLang ">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li class="">
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                            class="lung_test">
                                {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- THE DROPDOWN MENEU 2 --}}
            {{-- home --}}
            <div class=" me-1 ms-1 ph-home border-left">
                <a class="card-info  " aria-current="page" href='/'>
                    <i class="mt-2 h3 icon-1 fa-solid fa-home-lg-alt"></i>
                </a>
            </div>
            {{-- -------------------- --}}
            <div class=" dropDownLang sec_menu">
                <div class="select w-100 ">
                    {{-- title --}}
                    <i class="h4 mt-1 mb-1 icon-1 fa-solid fa-bars"></i>

                    <div class="caret d-none"></div>
                </div>
                <ul class="menuLang w-200 ">
                    {{-- HOME --}}
                    <li>
                        <a class="mt-1 ph-home_m " aria-current="page" href='/'>
                        <i class="h2 mt-1 mb-1 icon-1 fa-solid fa-home-lg-alt"></i> </a>
                    </li>
                    {{-- 1 --}}
                    <hr class="ph-home_m">
                    <li>
                        <div id="sidebar_1" class="icons ">
                            <img class=" " src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills"/>
                            <a class="title-4 ms-1 me-1">{{__('sidebar.my account')}} </i></a>
                        </div>
                    </li>
                    {{-- 2 --}}
                    <hr class="">
                    <li>
                        <a href="#" class="">{{__('sidebar.notifications')}} <i class=" ms-1 me-1 icon-1 fa-solid fa-bell"></i></a>
                    </li>
                    {{-- 3 --}}
                    <hr class="">
{{--                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                        <li class="">--}}
{{--                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                                {{ $properties['native'] }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
                    {{-- 4 --}}
                    <hr class="ph-search_m">
                    <div class="search p-relative mt-1 ph-search_m">
                        <input class="search1 w-100 " type="search"
                            placeholder="{{__('sidebar.search')}}" id="rtl" />
                    </div>
                </ul>
            </div>
        </div>
        {{-- ------------------------------------------- --}}
    </div>
</div>
<!-- end head  -->
<!-- End content  -->
