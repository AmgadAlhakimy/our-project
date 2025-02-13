<div class="login_style">
    <div class="login_container">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

            <form wire:submit="save" action="">
            @csrf
            <!-- Name -->
            <div>
                <x-input-label for="name" class="form-label" :value="__('public.name')" />
                <x-text-input id="name" class="form-control pink_color" type="text" wire:model.live.debounce.500ms="name" :value="old('name')"  autofocus autocomplete="name" />
    {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" />--}}
                @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" class="form-label" :value="__('user.email')" />
                <x-text-input id="email" class="form-control " type="email" wire:model.live.debounce.500ms="email" :value="old('email')"  autocomplete="username" />
                @error('email') <small class="form-text text-danger">{{ $message }}</small> @enderror
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" class="form-label" :value="__('user.password')" />
                <x-text-input id="password" class="form-control "
                                type="password"
                            wire:model.live.debounce.500ms="password"
                                autocomplete="new-password" />
                @error('password') <small class="form-text text-danger">{{ $message }}</small> @enderror
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
                            <i class="   {{ $passwordRequirements['min'] ? 'fas fa-check text-success' : 'fas fa-times text-danger' }} text-xs">
                            </i>
                            <span
                                class="{{ $passwordRequirements['min'] ? 'text-success' : 'text-danger' }} text-xs">{{trans('auth.min')}}
                                        </span>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="{{ $passwordRequirements['uppercase'] ? 'fas fa-check text-success' : 'fas fa-times text-danger' }} text-xs"></i>
                            <span
                                class="{{ $passwordRequirements['uppercase'] ? 'text-success' : 'text-danger' }} text-xs">{{trans('auth.uppercase')}}</span>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="{{ $passwordRequirements['lowercase'] ? 'fas fa-check text-success' : 'fas fa-times text-danger' }} text-xs"></i>
                            <span
                                class="{{ $passwordRequirements['lowercase'] ? 'text-success' : 'text-danger' }} text-xs">{{trans('auth.lowercase')}}</span>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="{{ $passwordRequirements['number'] ? 'fas fa-check text-success' : 'fas fa-times text-danger' }} text-xs"></i>
                            <span
                                class="{{ $passwordRequirements['number'] ? 'text-success' : 'text-danger' }} text-xs">{{trans('auth.number')}}</span>
                        </li>
                        <li class="flex items-center gap-1">
                            <i class="{{ $passwordRequirements['special'] ? 'fas fa-check text-success' : 'fas fa-times text-danger' }} text-xs"></i>
                            <span
                                class="{{ $passwordRequirements['special'] ? 'text-success' : 'text-danger' }} text-xs">{{trans('auth.special')}}</span>
                        </li>
                    </ul>
                </div>





            </div>
            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" class="form-label"  :value="__('user.confirm password')" />
                <x-text-input id="password_confirmation" class="form-control "
                                type="password"
                            wire:model.live.debounce.500ms="confirm_password"  autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                @error('confirm_password') <small class="form-text text-danger">{{ $message }}</small> @enderror
            </div>
            <div class="flex items-center justify-end mt-4 box ">
                <a class="form-label pink_color underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('auth.already registered') }}
                </a>
                <button type="submit" class="ms-4 save-button">
                    <div class="title-3">
                        {{ __('auth.register') }}
                    </div>
                </button>
            </div>
        </form>
    </div>
</div>
