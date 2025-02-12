<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')
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
                        {{-- <x-input-error class="pink_color" :messages="$errors->get('email')" class="mt-2" />--}}
                        @error('email')<small class="form-text text-danger">{{$message}}</small>@enderror
                    </div>

                    <!-- Password -->
                    <div class="mt-4 box">
                        <x-input-label for="password" class="form-label " :value="__('Password')" />
                        <x-text-input id="password" class="block mt-1 w-full form-control" type="password"
                            name="password" required autocomplete="current-password" />
                        @error('password')<small class="form-text text-danger">{{$message}}</small>@enderror
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox"
                                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                name="remember">
                            <span
                                class="ms-2 text-sm text-gray-600 dark:text-gray-400 title-3 ">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class=" box flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class=" form-label pink_color underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 form-label"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <x-primary-button class="ms-3 save-button ">
                            <div class="title-3">
                                {{ __('Log in') }}
                            </div>
                        </x-primary-button>
                    </div>
                </div>
            </form>
        </div>
    </div>