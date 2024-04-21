@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}

        <div class="table-header">
            {{-- the title and search --}}
            <h4 class="col container-title mt-2">{{__('class.class information')}}</h4>
            <div class="row first-card mt-4">
                <form method="post" action="{{route('classrooms.search')}}">
                    @method('GET')
                    @csrf
                    <div class="row">
                        <label class="col-10">
                            <input type="text" required class="form-control" name="search"
                                   value="{{isset($search) ? $search : ''}}">
                        </label>
                        <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                    </div>
                </form>
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()"
                    id="select_bt">{{__('public.select')}}</button>
            <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
        </div>

        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th class=" me-4 ms-4">
                            <input type="checkbox" id="select_all"
                                   style="display: none">
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.cost')}}</div>
                        </th>
                        <th>
                            <div class="th-head-4">{{__('public.educational Level')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.updated at')}}</div>
                        </th>
                        <th colspan="2">
                            <div class="th-head-4">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    @foreach($classrooms  as $classroom )
                        <tbody>
                        <tr>
                            <td><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none">
                            </td>
                            <td>{{$classroom->id}}</td>
                            <td>{{$classroom->name}}</td>
                            <td>{{$classroom->cost}}</td>
                            <td>{{$classroom->Level->name}}</td>
                            <td>{{$classroom->created_at}}</td>
                            <td>{{$classroom->updated_at}}</td>
                            <td>
                                <a href="{{route('classrooms.edit',$classroom->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$classroom->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$classroom->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$classroom->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post"
                                                      action="{{route('classrooms.destroy',$classroom->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-primary">{{__('public.ok')}}</button>
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
        {{$classrooms->links('pagination::bootstrap-5')}}
    </div>
@endsection
