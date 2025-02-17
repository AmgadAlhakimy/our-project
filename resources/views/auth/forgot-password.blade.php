<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')
    <div class="login_container row">
        <div class="mb-4 col form-label pink_color text-sm text-gray-600 dark:text-gray-400">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div class="col">
                <x-input-label for="email" class="form-label " :value="__('Email')" />
                <input id="email" class=" form-control  block mt-1 w-full" type="email" name="email"
                    placeholder="(A-Z)&(az)&(0-9)&(!@#$%_-)"
                    :value="old('email')" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="box flex items-center justify-end mt-4">
                <x-primary-button class="save-button w-50   ">
                    <div class=" title-3">
                        {{ __('Email Password Reset Link') }}
                    </div>
                </x-primary-button>
            </div>
        </form>
    </div>
</div>