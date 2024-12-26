{{-- الأنشطة المحذوفة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <!-- table-hover table-striped --> 
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('activity.DELETED ACTIVITIES')}} </h4>
            </div>
        </div>
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <div class=" form-label">
                                {{__('public.id')}}
                            </div>
                        </th>
                        <th class="th-head-3 form-label">
                            {{__('public.name')}}
                        </th>
                        <th class="th-head-2 form-label">
                            {{__('public.location')}}
                        </th>
                        <th class="th-head-2 form-label">
                            {{__('public.contact')}}
                        </th>
                        <th class="th-head-2 form-label">
                            {{__('public.date')}}
                        </th>
                        <th class="th-head-3 form-label">
                            {{__('public.note')}}
                        </th>
                        <th class="th-head-2 form-label">
                            {{__('public.created at')}}
                        </th>
                        <th class="th-head-2 form-label">
                            {{__('public.updated at')}}
                        </th>
                        <th colspan="">
                            <div class="th-head-3 form-label">{{__('public.processes')}}</div>
                        </th> 
                    </tr>
                    </thead>
                    @foreach($activities  as $activity )
                        <tbody>
                        <tr>
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
                                   class="btn save-button btn-success  w-25 me-1 ms-1">
                                   <i class="fa-solid fa-trash-can-arrow-up"></i>
                                {{-- {{__('public.restore')}} --}}
                                     </a>
                                <button class="btn clear-button btn-danger  w-25 me-1 ms-1" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$activity->id}}">
                                    <i class="fa-solid fa-trash"></i> 
                                    {{-- {{__('public.force delete')}} --}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$activity->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title">
                                                    <i class="fa-solid fa-trash-can danger_msg"></i>                                                    
                                                </div>
                                            </div>
                                            <div class="modal-body form-label">
                                                {{__('public.are you sure you want to delete').$activity->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger clear-button ms-2 me-2" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('activities.forceDelete',$activity->id)}}">
                                                    @method('get')
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

