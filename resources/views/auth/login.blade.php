<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="login_container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class=" row">
                <!-- Email Address -->
                <div class="box">
                    <x-input-label for="email" class="form-label " :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error class="" :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="mt-4 box">
                    <x-input-label for="password" class="form-label " :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password"
                        required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center d-flex align-items-cente">
                        <div class=" check_style d-block">
                            <label>
                                <input
                                    class="rounded  dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                    id="remember_me" type="checkbox" name="">
                                <i></i>
                            </label>
                        </div>
                        <span
                            class="ms-2 text-sm text-gray-600 dark:text-gray-400 title-3 d-block">{{ __('Remember me') }}</span>
                    </label>
                </div>
                <div class=" box flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 form-label pink_color"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    <x-primary-button class="ms-3 save-button">
                        <div class="title-3">
                            {{ __('Log in') }}
                        </div>
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>
</div>