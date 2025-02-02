@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('user.deleted users')}}</h4>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="shadow-none mt-4">
            <div class="table-section card">
                <table id="check_table">
                    <thead>
                    <tr>
                        <th class="form-label">
                            {{__('public.id')}}
                        </th>
                        <th>
                            <div class="th-head-4 form-label">
                                {{__('public.name')}}
                            </div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">
                                {{__('user.email')}}
                            </div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('role.roles')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('user.status')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2 form-label">{{__('public.updated at')}}</div>
                        </th>
                        <th colspan="">
                            <div class="th-head-4 form-label">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    @foreach($users  as $user )
                        <tbody>
                        <tr>
                            <td>
                                <div class="td_rect">
                                    {{$user->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$user->name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$user->email}}
                                </div>
                            </td>
                            <td>
                                @if(!empty($user->getRoleNames()))
                                    @foreach($user->getRoleNames() as $role)
                                        <div class="td_rect">
                                            {{$role}}
                                        </div>
                                    @endforeach
                                @endif

                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$user->status}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$user->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$user->updated_at}}
                                </div>
                            </td>
                            <td>
                                <a href="{{route('users.restore',$user->id)}}"
                                   class="btn save-button btn-success  w-25 me-1 ms-1">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                    {{-- {{__('public.restore')}} --}}
                                </a>
                                <button class="btn clear-button btn-danger  w-25 me-1 ms-1" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$user->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                    {{-- {{__('public.force delete')}} --}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$user->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title">
                                                    <i class="fa-solid fa-trash-can danger_msg"></i>
                                                </div>
                                            </div>
                                            <div class="modal-body form-label row">
                                                <div class="col-12">
                                                    {{__('public.are you sure you want to delete')}}
                                                </div>
                                                <div class="col-12">
                                                    {{$user->name}}
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger clear-button ms-2 me-2" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}
                                                </button>
                                                <form method="post" action="{{route('users.forceDelete',$user->id)}}">
                                                    @method('GET')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary save-button ms-2 me-2">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
