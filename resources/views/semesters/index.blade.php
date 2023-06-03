@extends('layouts.master')
@section('content')
    <div class="table">
        <div class="table-header">
            <h3>{{__('semester.semester info')}}</h3>
            <div>
                <label>
                    <input type="text" class="" placeholder="{{__('public.search')}}">
                </label>
                <button class="add-new">{{__('public.search')}}</button>
            </div>
        </div>
        <!-- table-hover table-striped -->

        @if(Session::has('success'))
            <div class="alert alert-danger" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <div class="card table-section ">
            <table class=" ">
                <thead>
                <tr>
                    <th>
                        <div class="th-head-1">{{__('public.id')}}</div>
                    </th>
                    <th>
                        <div class="th-head-3">{{__('public.name')}}</div>
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
                        <div class="th-head-1"></div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($semesters as $semester)
                    <tr>
                        <td>{{$semester->id}}</td>
                        <td>{{$semester->name}}</td>
                        <td>{{$semester->created_at}}</td>
                        <td>{{$semester->updated_at}}</td>
                        <td>
                            <a href="{{route('semesters.edit',$semester->id)}}"
                               class="btn save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                        </td>
                        <td>
                            <button class="clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$semester->id}}">
                                <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$semester->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete')}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post" action="{{route('semesters.destroy',$semester->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"  class="btn btn-primary">{{__('public.ok')}}</button>
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
