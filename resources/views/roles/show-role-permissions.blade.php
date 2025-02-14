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
                <a href="{{ route('display-roles') }}" class="btn btn-outline-secondary save-button m-2 col-auto">
                    <span class="me-1 ms-1">
                        {{trans('role.back')}}
                    </span>
                    <i class=" fa-solid fa-arrow-left me-1 ms-1 "></i>
                </a>
            </div>
        </div>

        <div class="mt-4 row">
            <div class="col-12 container-title mb-2">{{trans('role.permissions')}}</div>

            <div class=" col-12">
                @if(!empty($rolePermissions))
                            @php
                                $groupedPermissions = $rolePermissions->groupBy('department');
                                $lang = App::getLocale();
                            @endphp

                            @foreach($groupedPermissions as $department => $permissions)
                                    @php
                                        $departmentName = $permissions->first();
                                        $displayDepartment = $lang === 'ar' ? $departmentName->department_ar : $departmentName->department;
                                    @endphp

                    <div class="cards_info_style mb-2">

                        <span class="col-12 form-label  ">
                            <div class="text-center">
                                {{ ucfirst($displayDepartment) }}
                            </div>
                        </span>

                        <div class="me-2 ms-2" ><hr></div>

                        <div class="col-12 text-center">
                            @foreach($permissions as $v)
                                <span class="title-3 badge  m-1 p-2">
                                    {{ $lang === 'ar' ? $v->name_ar : $v->name }}</span>
                            @endforeach
                        </div>

                    </div>
                            @endforeach
                @else
                    <p class="text-muted">{{ __('role.no permissions assigned') }}</p>
                @endif

            </div>
        </div>
    </div>
@endsection