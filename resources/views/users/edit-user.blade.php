<div class="section">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="update" action="">
        @csrf

        <h3 class="container-title ">{{ __('user.edit user').$name }}</h3>

        <div class="container containers-style">
            <div class="row">
                <!-- Name -->
                <div class="box col-lg-6 col-md-12">
                    <label class="form-text " for="name">{{ __('user.user name') }}</label>
                    <input type="text" class="form-control" id="name" wire:model.live.debounce.500ms="name">
                    @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Email -->
                <div class="box col-lg-6 col-md-12">
                    <label class="form-text" for="email">{{ __('user.user email') }}</label>
                    <input type="email" class="form-control" id="email" wire:model.live.debounce.500ms="email">
                    @error('email') <small class="form-text text-danger">{{ $message }}</small> @enderror
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
        {{-- -------------------------------------- --}}
        <div class="box">
            <span class="container-title ">{{ __('user.optional_2') }}</span>
            <label class="form-label">({{ __('user.optional') }})</label>
        </div>
                <div class="container  containers-style">
                    <div class="row">
                            <!-- father name  -->
                            <div class="box col-sm-12 col-lg-6 col-md-6">
                                <label class="form-label">{{__('student.choose superior')}}</label>
                                <input type="text" id="fatherSearch" list="fathersList"
                                placeholder="{{ __('student.search for father') }}"
                                class="form-control" wire:model.live.debounce.500ms="father_search"
                                oninput="setParentId(this)">
                            <datalist id="fathersList" class="">
                                @foreach($fathers as $father)
                                    <option value="{{ $father->father_name }}"
                                            data-id="{{ $father->id }}">{{ $father->father_name }}</option>
                                @endforeach
                            </datalist>
                            @error('parents_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                        <!-- teacher name  -->
                            <div class="box col-sm-12 col-lg-6 col-md-6">
                                <label class="form-label">{{__('teacher.choose teacher')}}</label>
                                <input type="text" id="teacherSearch" list="teachersList"
                                placeholder="{{ __('teacher.search for teacher') }}"
                                class="form-control" wire:model.live.debounce.500ms="teacher_search"
                                oninput="setTeacherId(this)">
                            <datalist id="teachersList" class="">
                                @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->name }}"
                                            data-id="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                @endforeach
                            </datalist>
                            @error('teacher_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                            </div>
                    </div>
                </div>
        {{-- -------------------------------------- --}}
                <!-- Buttons -->
        <div class="row mb-2  ">
            <div class="box col">
                <button type="submit" class=" save-button">
                    {{__('public.update')}}
                    <div wire:loading class="spinner-border spinner-border-sm"></div>
                </button>
            </div>
            @can('display users')
            <div class="box col">
                <a href="{{route('display-users')}}" class="btn clear-button"><i
                        class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
            </div>
            @endcan
        </div>

        <!-- Buttons -->
        <div class="row">
            @can('change users password')
                <div class="box  col col-sm-12">
                    <a href="{{route('change-password',$id)}}" class="btn clear-button">
                        <i class="fa-solid fa-key"></i> {{__('user.password')}}</a>
                </div>
            @endcan
        </div>
        
        {{-- js code --}}
        @include('layouts.include.users_js')

    </form>
</div>
