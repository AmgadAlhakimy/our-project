<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')    
    
    <div class="">
        <div class="form-label pink-color mb-4 text-sm text-gray-600 dark:text-gray-400 form-label pink_color">
            {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
        </div>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <!-- Password -->
            <div>
                <x-input-label for="password" class="form-control" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="flex justify-end mt-4">
                <x-primary-button class="save-button">
                    <div class="title-3">
                        {{ __('Confirm') }}
                    </div>
                </x-primary-button>
            </div>
        </form>
    </div>
</div>