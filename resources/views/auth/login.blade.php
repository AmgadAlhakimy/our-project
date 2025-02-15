<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="container_lang row ">
        <div class="col lang_style mt-2 me-3 ms-3">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="text-center">
                    <a rel="alternate" class="" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }} "
                    class="">
                        <div class="form-label m-0 p-0">
                            {{ $properties['native'] }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col d-flex align-items-center ">
            <a href="{{ route('main_page') }}"><i class="container-title mt-2 h1 fa-solid fa-home-lg-alt"></i></a>
        </div>
    </div>
    
    <div class="login_container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class=" row">
                <div class="box">
                    <img src="{{URL::asset(path: 'assets/images/layouts/logo2.png')}}" class="text- col-12 logo-img" alt="" />
                </div>

                    <!-- Email Address -->
                    <div class="box">
                        <x-input-label for="email" class="form-label " :value="__('user.email')" />
                        <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                            :value="old('email')" required autofocus autocomplete="username" />
                        @error('email')<small class="form-text text-danger">{{$message}}</small>@enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-2 box">
                        <x-input-label for="password" class="form-label " :value="__('user.password')" />
                        <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                            name="password" required autocomplete="current-password" />
                        @error('password')<small class="form-text text-danger">{{$message}}</small>@enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-2">
                        <label for="remember_me" class="inline-flex items-center row ">
                            <div class="check_style col-1 text-end">
                                    <input class="" id="remember_me" type="checkbox" name="remember"
                                        value="">
                                    <i></i>
                            </div>
                            <span class="ms-2 text-start col text-sm text-gray-600 dark:text-gray-400 title-3 ">
                                {{ __('auth.remember me') }}
                            </span>
                        </label>
                    </div>
                    <div class=" box flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class=" form-label pink_color underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 form-label"
                                href="{{ route('password.request') }}">
                                {{ __('auth.forgot your password') }}
                            </a>
                        @endif
                        <x-primary-button class="ms-3 save-button ">
                            <div class="title-3">
                                {{ __('auth.log in') }}
                            </div>
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>
