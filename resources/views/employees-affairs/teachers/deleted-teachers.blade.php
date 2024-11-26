@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
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
                    @foreach($teachers  as $teacher )
                        <tbody>
                        <tr>
                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->name}}</td>
                            <td><img src="{{asset($teacher->photo)}}"
                                     class="student-img" alt="photo"></td>
                            <td>{{$teacher->contact}}</td>
                            <td>{{$teacher->gender}}</td>
                            <td>{{$teacher->address}}</td>
                            <td>{{$teacher->qualification}}</td>
                            <td>{{$teacher->salary}}</td>
                            <td>{{$teacher->major}}</td>
                            <td>{{$teacher->note}}</td>
                            <td>{{$teacher->created_at}}</td>
                            <td>{{$teacher->updated_at}}</td>
                            <td>
                                <a href="{{route('teachers.restore',$teacher->id)}}"
                                   class="btn my-save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                            </td>
                            <td>
                                <button class="btn my-clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$teacher->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$teacher->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$teacher->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('teachers.forceDelete',$teacher->id)}}">
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
    </div>
@endsection
