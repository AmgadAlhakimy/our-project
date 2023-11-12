@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="card table-section ">
            <table class=" ">
                <thead>
                <tr>
                    <th>
                        <div class="th-head-1">{{__('public.id')}}</div>
                    </th>
                    <th>
                        <div class="th-head-2">{{__('public.name')}}</div>
                    </th>
                    <th>
                        <div class="th-head-2">{{__('public.location')}}</div>
                    </th>
                    <th>
                        <div class="th-head-2">{{__('public.contact')}}</div>
                    </th>
                    <th>
                        <div class="th-head-2">{{__('public.date')}}</div>
                    </th>
                    <th>
                        <div class="th-head-3">{{__('public.note')}}</div>
                    </th>
                    <th>
                        <div class="th-head-3">{{__('public.created at')}}</div>
                    </th>
                    <th>
                        <div class="th-head-3">{{__('public.updated at')}}</div>
                    </th>
                    <th>
                        <div class="th-head-2">{{__('public.processes')}}</div>
                    </th>
                    <th>
                        <div class="th-head-2"></div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                </tr>
                </thead>
                @foreach($activities  as $activity )
                    <tbody>
                    <tr>
                        <td>{{$activity->id}}</td>
                        <td>{{$activity->name}}</td>
                        <td>{{$activity->location}}</td>
                        <td>{{$activity->contact}}</td>
                        <td>{{$activity->date}}</td>
                        <td>{{$activity->note}}</td>
                        <td>{{$activity->created_at}}</td>
                        <td>{{$activity->updated_at}}</td>
                        <td>
                            <a href="{{route('activities.edit',$activity->id)}}"
                               class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                        </td>
                        <td>
                            <button class="btn my-clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$activity->id}}">
                                <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$activity->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete').$activity->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post" action="{{route('activities.destroy',$activity->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection
