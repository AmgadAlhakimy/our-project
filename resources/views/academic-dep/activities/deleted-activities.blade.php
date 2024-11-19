{{-- الأنشطة المحذوفة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('DELETED ACTIVITIES')}} </h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('students.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row">
                            <label class="col-10">
                                <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <label for="" class=" n_rect">
                                {{__('public.num')}}
                            </label>
                        </th>
                        <th class="th-head-1">
                            <button id="arrowButton" wire:click="ordering('id')" class="th-head-1 form-label ">
                                {{__('public.id')}}
                                @if($arrow and $showArrow === 'id')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'id')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </button>
                        </th>
                        <th class="th-head-3">
                            {{__('public.name')}}
                        </th>
                        <th class="th-head-2">
                            {{__('public.location')}}
                        </th>
                        <th class="th-head-2">
                            {{__('public.contact')}}
                        </th>
                        <th class="th-head-2">
                            {{__('public.date')}}
                        </th>
                        <th class="th-head-3">
                            {{__('public.note')}}
                        </th>
                        <th class="th-head-2">
                            {{__('public.created at')}}
                        </th>
                        <th class="th-head-2">
                            {{__('public.updated at')}}
                        </th>
                        <th colspan="2">
                            <div class="th-head-4">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    @foreach($activities  as $activity )
                        <tbody>
                        <tr>
                            {{-- <td class="num_table ">{{$counter}}</td> --}}
                            <td>
                                <div class="td_rect">
                                1
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->location}}
                                </div>
                            </td>
                            <td >
                                <div class="td_rect">
                                {{$activity->contact}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->date}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->note}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$activity->updated_at}}
                                </div>
                            </td>
                            <td>
                                <a href="{{route('activities.restore',$activity->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$activity->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$activity->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$activity->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('activities.forceDelete',$activity->id)}}">
                                                    @method('get')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
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
