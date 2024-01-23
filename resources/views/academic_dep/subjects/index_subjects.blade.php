@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card mt-4">
                <form method="post" action="{{route('subjects.search')}}">
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
            {{--  --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}

        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section">
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
                            <div class="th-head-2"></div>
                        </th>
                        <th>
                            <div class="th-head-1"></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($subjects as $subject)
                        <tr>
                            <td>{{$subject->id}}</td>
                            <td>{{$subject->name}}</td>
                            <td>{{$subject->created_at}}</td>
                            <td>{{$subject->updated_at}}</td>
                            <td>
                                <a href="{{route('subjects.edit',$subject->id)}}"
                                class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$subject->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$subject->id}}"
                                    tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$subject->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('subjects.destroy',$subject->id)}}">
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
@endsection
