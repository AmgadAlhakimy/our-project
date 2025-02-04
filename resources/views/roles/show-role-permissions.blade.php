{{-- الأنشطة المحذوفة --}}
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
                    @foreach($rolePermissions as $v)
                        <span class="badge bg-success m-1 p-2">{{ $v->name }}</span>
                    @endforeach
                @else
                    <p class="text-muted">{{trans('role.no permissions assigned')}}</p>
                @endif
            </div>
        </div>
    </div>
@endsection

