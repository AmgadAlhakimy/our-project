<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form wire:submit="updatePassword" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="update_password_current_password" :value="__('Current Password')" />
            <x-text-input wire:model.defer="current_password" id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="update_password_password" :value="__('New Password')" />
            <x-text-input wire:model.defer="password" id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
            @error('password') <small class="form-text text-red-500">{{ $message }}</small> @enderror





            <div class="">
                {{-- 1 --}}
                <div class="">
                    <div class="rols_bar rounded-full transition-all"
                         style="width: {{ $this->progress }}%; background-color:
                                        {{ $this->progress < 40 ? '#f87171' : ($this->progress < 80 ? '#facc15' : '#22c55e') }};">
                        {{$this->progress }}
                    </div>
                </div>
                {{-- 2 --}}
                <ul class="">
                    <li class="flex items-center gap-1">
                        <i class="   {{ $passwordRequirements['min'] ? 'fas fa-check text-success' : 'fas fa-times text-red-500' }} text-xs">
                        </i>
                        <span
                            class="{{ $passwordRequirements['min'] ? 'text-success' : 'text-red-500' }} text-xs">{{trans('auth.min')}}
                                        </span>
                    </li>
                    <li class="flex items-center gap-1">
                        <i class="{{ $passwordRequirements['uppercase'] ? 'fas fa-check text-success' : 'fas fa-times text-red-500' }} text-xs"></i>
                        <span
                            class="{{ $passwordRequirements['uppercase'] ? 'text-success' : 'text-red-500' }} text-xs">{{trans('auth.uppercase')}}</span>
                    </li>
                    <li class="flex items-center gap-1">
                        <i class="{{ $passwordRequirements['lowercase'] ? 'fas fa-check text-success' : 'fas fa-times text-red-500' }} text-xs"></i>
                        <span
                            class="{{ $passwordRequirements['lowercase'] ? 'text-success' : 'text-red-500' }} text-xs">{{trans('auth.lowercase')}}</span>
                    </li>
                    <li class="flex items-center gap-1">
                        <i class="{{ $passwordRequirements['number'] ? 'fas fa-check text-success' : 'fas fa-times text-red-500' }} text-xs"></i>
                        <span
                            class="{{ $passwordRequirements['number'] ? 'text-success' : 'text-red-500' }} text-xs">{{trans('auth.number')}}</span>
                    </li>
                    <li class="flex items-center gap-1">
                        <i class="{{ $passwordRequirements['special'] ? 'fas fa-check text-success' : 'fas fa-times text-red-500' }} text-xs"></i>
                        <span
                            class="{{ $passwordRequirements['special'] ? 'text-success' : 'text-red-500' }} text-xs">{{trans('auth.special')}}</span>
                    </li>
                </ul>
            </div>


        </div>

        <div>
            <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
            <x-text-input wire:model.defer="password_confirmation" id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            @error('password_confirmation') <small class="form-text text-red-500">{{ $message }}</small> @enderror
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if ($status === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
