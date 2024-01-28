@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="card table-section">
            <table class=" ">
                <thead>
                <tr>
                    <th><div class="th-head-1">{{__('public.id')}}</div></th>
                    <th><div class="th-head-2">{{__('public.name')}}</div></th>
                    <th><div class="th-head-2">{{__('public.photo')}}</div></th>
                    <th><div class="th-head-2">{{__('public.contact')}}</div></th>
                    <th><div class="th-head-2">{{__('public.gender')}}</div></th>
                    <th><div class="th-head-2">{{__('public.address')}}</div></th>
                    <th><div class="th-head-2">{{__('public.qualification')}}</div></th>
                    <th><div class="th-head-2">{{__('public.salary')}}</div></th>
                    <th><div class="th-head-2">{{__('public.major')}}</div></th>
                    <th><div class="th-head-3">{{__('public.note')}}</div></th>
                    <th><div class="th-head-3">{{__('public.created at')}}</div></th>
                    <th><div class="th-head-3">{{__('public.updated at')}}</div></th>
                    <th><div class="th-head-2">{{__('public.processes')}}</div></th>
                    <th><div class="th-head-2"></div></th>
                    <th><div class="th-head-1"></div></th>
                </tr>
                </thead>
                @foreach($teachers  as $Teacher )
                    <tbody>
                    <tr>
                        <td>{{$Teacher->id}}</td>
                        <td>{{$Teacher->name}}</td>
                        <td><img src="{{asset($Teacher->photo)}}"
                                 class="student-img" alt="photo"></td>
                        <td>{{$Teacher->contact}}</td>
                        <td>{{$Teacher->gender}}</td>
                        <td>{{$Teacher->address}}</td>
                        <td>{{$Teacher->qualification}}</td>
                        <td>{{$Teacher->salary}}</td>
                        <td>{{$Teacher->major}}</td>
                        <td>{{$Teacher->note}}</td>
                        <td>{{$Teacher->created_at}}</td>
                        <td>{{$Teacher->updated_at}}</td>
                        <td>
                            <a href="{{route('teachers.restore',$Teacher->id)}}"
                               class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                        </td>
                        <td>
                            <button class="btn my-clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$Teacher->id}}">
                                <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$Teacher->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete').$Teacher->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post" action="{{route('teachers.forceDelete',$Teacher->id)}}">
                                                @method('GET')
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
