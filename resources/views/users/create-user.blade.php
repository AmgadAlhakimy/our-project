<div class="section">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save" action="">
        @csrf
        <h3 class="container-title">{{ __('user.new user') }}</h3>

        <div class="container containers-style">
            <div class="row">
                <!-- Name -->
                <div class="box col-lg-6 col-md-12">
                    <label class="form-text" for="name">{{ __('user.user name') }}</label>
                    <input type="text" class="form-control" id="name" wire:model.live.debounce.500ms="name">
                    @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Email -->
                <div class="box col-lg-6 col-md-12">
                    <label class="form-text" for="email">{{ __('user.user email') }}</label>
                    <input type="email" class="form-control" id="email" wire:model.live.debounce.500ms="email">
                    @error('email') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>
                <!-- Password --> 

                
                <div class="box col-lg-6 col-md-6">
                    <label class="form-text " type="text" for="password">{{ __('user.password') }}</label>
                    <div class="input-container">
                            <input type="password" class="form-control rols_input" id="password"
                                wire:model.live.debounce.500ms="password">
                        @error('password')<small class="form-text text-danger">{{$message}}</small>@enderror
                            <div class="conditions-list">
                                {{-- 1 --}}
                                <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                                    <div class="rols_bar rounded-full transition-all"
                                            style="width: {{ $this->progress }}%; background-color:
                                        {{ $this->progress < 40 ? '#f87171' : ($this->progress < 80 ? '#facc15' : '#22c55e') }};">
                                                {{$this->progress }}
                                    </div>
                                </div>
                                {{-- 2 --}}
                                <ul class="list-none space-y-1 ">
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
                </div>
                <!-- Confirm Password -->
                <div class="box col-lg-6 col-md-6">
                    <label class="form-text" for="confirm_password">{{ __('user.confirm password') }}</label>
                    <input type="password" class="form-control" id="confirm_password"
                            wire:model.live.debounce.500ms="confirm_password">
                    @error('confirm_password') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Roles Selection -->
                <div class="box col-lg-6 col-md-6">
                    <label class="form-text">{{ __('role.roles') }}</label>
                    <select multiple class="form-control" wire:model.live.debounce.500ms="roles_name">
                        @foreach($allRoles as $role)
                            <option value="{{ $role }}">{{ $role }}</option>
                        @endforeach
                    </select>
                    @error('roles_name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Status -->
                <div class="box col-lg-6 col-md-6">
                    <label for="gender">{{__('user.status')}}</label>
                    <select class="col form-select form-control" id="status"
                            wire:model.live.debounce.500ms="status">
                        <option value="" selected>{{ __('user.please select the status') }}</option>
                        <option value="enabled">{{ __('user.enabled') }}</option>
                        <option value="disabled">{{ __('user.disabled') }}</option>
                    </select>
                    @error('status')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class=" row">
            <div class="box col ">
                <button type="submit" class=" save-button text-center">
                    {{__('public.save')}}
                    <div wire:loading class="spinner-border spinner-border-sm"></div>
                </button>
            </div>
            <div class="box  col">
                <button type="reset" class=" clear-button text-center">
                    {{__('public.clear')}}
                </button>
            </div>
        </div>
    </form>


    <div class="me-5 ms-5 text-end">

    </div>
</div>
