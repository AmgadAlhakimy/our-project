@extends('layouts.sidebar')
@section('content')

{{-- <div class="mt-5"> --}}

    <div class="my-table mt-5">
        <!-- table-hover table-striped -->
        <div class="card table-section">
            <div class="row first-card mt-4">
                <form method="post" action="{{route('teachers.search')}}">
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
 

        <!-- table-hover table-striped -->
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()" id="select_bt">{{__('public.select')}}</button>
            <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
            <div class="card table-section">
                <table class=" " id="check_table" >
                <thead>
                <tr>
                    <th class=" me-4 ms-4">
                        <input type="checkbox" id="select_all" 
                        style="display: none" >
                    </th>
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
                        <td ><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none"></td>
                        <td>
                            <div class="td_rect">
                            {{$teacher->id}}
                        </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->name}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                            <img src="{{asset($teacher->photo)}}"
                                class="student-img" alt="photo"></td>
                                </div>
                        <td>
                            <div class="td_rect">
                            {{$teacher->contact}}</td>
                        </div>
                        <td>
                            <div class="td_rect">
                            {{$teacher->gender}}</td>
                        </div>
                        <td>
                            <div class="td_rect">
                            {{$teacher->address}}</td>
                        </div>
                        <td>
                            <div class="td_rect">
                            {{$teacher->qualification}}</td>
                        </div>
                        <td>
                            <div class="td_rect">
                            {{$teacher->salary}}</td>
                        </div>
                        <td>{{$teacher->major}}</td>
                        <td>{{$teacher->note}}</td>
                        <td>{{$teacher->created_at}}</td>
                        <td>{{$teacher->updated_at}}</td>
                        <td>
                            <a href="{{route('teachers.edit',$teacher->id)}}"
                               class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                        </td>
                        <td>
                            <button class="btn my-clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$teacher->id}}">
                                <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$teacher->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete').$teacher->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post" action="{{route('teachers.destroy',$teacher->id)}}">
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
    </div>
{{-- </div> --}}
@endsection
