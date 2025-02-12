@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">
                    {{__('public.name')}} :
                    {{ $role->name }}
                </h4>
                <a href="{{ route('display-roles') }}" class="btn btn-outline-secondary col-auto">
                    <i class="fa-solid fa-arrow-left"></i> {{trans('role.back')}}
                </a>
            </div>
        </div>

        <div class="mt-3">
            <h5 class="text-secondary">{{trans('role.permissions')}}</h5>
            <div class="d-flex flex-wrap mt-2">
                @if(!empty($rolePermissions))
                    @php
                        $groupedPermissions = $rolePermissions->groupBy('department');
                        $lang = App::getLocale(); // Get the current application language
                    @endphp

                    @foreach($groupedPermissions as $department => $permissions)
                        @php
                            // Get the department name dynamically
                            $departmentName = $permissions->first();
                            $displayDepartment = $lang === 'ar' ? $departmentName->department_ar : $departmentName->department;
                        @endphp

                        <div>
                            <h5 class="text-primary">{{ ucfirst($displayDepartment) }}</h5> {{-- Department Name --}}

                            @foreach($permissions as $v)
                                <span class="badge bg-success m-1 p-2">
                        {{ $lang === 'ar' ? $v->name_ar : $v->name }}
                    </span>
                            @endforeach

                            <hr class="my-3"> {{-- Separator Line --}}
                        </div>
                    @endforeach
                @else
                    <p class="text-muted">{{ __('role.no permissions assigned') }}</p>
                @endif
            </div>


        </div>
    </div>
@endsection

