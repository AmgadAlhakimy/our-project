<div class="section">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save" action="">
        @csrf
            <div class=" display-4 form-label container-title">{{ __('role.new role') }}</div>
    
            <div class=" containers-style">
                <div class="row">
                    <!-- Name -->
    
                    <div class="box col-12 mt-2 mb-2">
                        <label class="container-title" for="name">{{ __('role.role name') }}</label>
                        <input type="text" class="form-control" id="name" wire:model.live.debounce.500ms="name">
                        @error('name') <small class="form-text text-danger">{{ $message }}</small> @enderror
                    </div>
                    <div>
                        <hr class=" ">
                    </div>
                    <!-- 2 -->
                    <div class="box mb-1">
                        <label class="container-title" for="level-class">{{__('role.roles')}}</label>
                    </div>
                    <div class="box">
    
    
                        <div class="btn-container">
                            @php
                                $groupedPermissions = $permissions->groupBy('department');
                                $lang = App::getLocale(); // Get the current application language
                            @endphp
    
                            <div class="btn-l-container row">
                                @foreach($groupedPermissions as $department => $departmentPermissions)
                                    @php
                                    
                                        $departmentName = $departmentPermissions->first();
                                        $displayDepartment = $lang === 'ar' ? $departmentName->department_ar : $departmentName->department;
                                    @endphp
    
                                    <div class="col-12">
                                        <h5 class="text-primary mt-3">{{ ucfirst($displayDepartment) }}</h5> {{-- Department Name --}}
                                        <hr class="mb-2"> {{-- Separator Line --}}
                                    </div>
    
                                    @foreach($departmentPermissions as $permission)
                                        <label class="btn-l-label col">
                                            <input class="light-btn" type="checkbox"
                                                   wire:model.live.debounce.500ms="permission"
                                                   value="{{ $permission->id }}">
                                            <span class="btn-l-text">
                                                {{ $lang === 'ar' ? $permission->name_ar : $permission->name }}
                                            </span>
                                        </label>
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
    
    
    
                        @error('permission')
                            <small class="form-text text-danger">{{ $message }}</small>
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
                        <button type="reset" class=" clear-button text-center">
                            {{__('public.clear')}}
                        </button>
                    </div>
                </div>
        </form>
    </div>
</div>
