@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card mt-4">
                <form method="post" action="{{route('activities.search')}}">
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
            {{-- the subject name --}}
            {{--  --}}
            {{-- <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="{{old('sex')}}">
                    <option class="text-center"
                            value="{{__('student.male')}}">{{__('student.male')}}</option>
                    <option class="text-center"
                            value="{{__('student.female')}}">{{__('student.female')}}</option>
                </select>
                @error('sex')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div> --}}
            {{-- the thacher name and the month --}}

            {{-- <div class="cards-container  third-card">
                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Techer</h4>
                    <h4 class=" Names">mohammad mohsen</h4>
                </div>

                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div> --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}

        <!-- table-hover table-striped -->
        <div class="table-section">
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
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
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
    </div>
@endsection
