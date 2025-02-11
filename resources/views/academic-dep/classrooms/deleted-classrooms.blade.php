@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">


        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('classroom.delete classrooms')}}</h4>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1 form-label">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-4 form-label">{{__('public.name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3 form-label">{{__('public.updated at')}}</div>
                        </th>
                        @can('who did this')
                            <th>
                                <div class="table_test form-label ">
                                    {{__('user.user')}}
                                </div>
                            </th>
                        @endcan
                        <th colspan="">
                            <div class="th-head-4 form-label">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    @foreach($classrooms  as $classroom )
                        <tbody>
                        <tr>
                            <td>
                                <div class="td_rect ">
                                    {{$classroom->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$classroom->name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$classroom->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$classroom->updated_at}}
                                </div>
                            </td>
                            @can('who did this')
                                <td>
                                    <div class="td_rect">
                                        {{$classroom->user->name}}
                                    </div>
                                </td>
                            @endcan
                            <td>
                                @can('restore classroom')
                                    <a href="{{route('classrooms.restore',$classroom->id)}}"
                                       class="btn save-button btn-success  w-25 me-1 ms-1">
                                        <i class="fa-solid fa-trash-can-arrow-up"></i>
                                        {{-- {{__('public.restore')}} --}}
                                    </a>
                                @endcan
                                @can('forceDelete classroom')
                                    <button class="btn clear-button btn-danger  w-25 me-1 ms-1" data-bs-toggle="modal"
                                            data-bs-target="#delete{{$classroom->id}}">
                                        <i class="fa-solid fa-trash"></i>
                                        {{-- {{__('public.force delete')}} --}}
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="delete{{$classroom->id}}"
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
                                                        {{$classroom->name}}
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger clear-button ms-2 me-2"
                                                            data-bs-dismiss="modal">
                                                        {{__('public.cancel')}}</button>
                                                    <form method="post"
                                                          action="{{route('classrooms.forceDelete',$classroom->id)}}">
                                                        @method('get')
                                                        @csrf
                                                        <button type="submit"
                                                                class="btn btn-primary save-button ms-2 me-2 ">{{__('public.ok')}}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endcan
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
