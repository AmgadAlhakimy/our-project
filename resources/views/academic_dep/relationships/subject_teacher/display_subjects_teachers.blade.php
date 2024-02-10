{{------------ واجهة تفت رالمتابعة الخاص بطلاب المدرسة ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card  ">
                <h4 class="col container-title mt-2">{{__('relationships.display subjects for teachers')}}</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="">
                        @method('GET')
                        @csrf
                        <div class="row ">
                            <label class="col-9">
                                <input type="text" required class="form-control"
                                    name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- the select input --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()" id="select_bt">{{__('public.select')}}</button>
            <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
        </div>
        <div class="table-section">
            <div class="card table-section ">
                <table id="check_table">
                    <thead>
                    <tr>
                        {{-- <th class=" me-4 ms-4">

                        </th> --}}
                        <th class="num_table  ">
                            {{__('public.num')}}
                        </th>
                        <th class="th-head-1">{{__('public.id')}}</th>
                        <th class="th-head-3">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        <th class="th-head-1">{{__('subject.subjects')}}</th>
                        <th class="th-head-1">{{__('public.processes')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                        <tr class="test_1 ">
                            <td class="num_table ">
                                num
                            </td>
                            <td>{{$teacher->id}}</td>
                            <td>{{$teacher->name}}</td>
                            <td><img class="student-img" src="{{$teacher->photo}}" alt=""></td>
                            <td>
                            @foreach($teacher->subjects as $subject)
                                {{$subject->name}} &emsp;
                            @endforeach
                            </td>
                            <td><a href="{{route('subject_teacher.edit',$teacher->id)}}"
                                class="btn save-button btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
