{{------------ واجهة تفت رالمتابعة الخاص بطلاب المدرسة ----------------}}
@extends('layouts.sidebar')
@section('content')
    <?php $counter = 1 ?>
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card  ">
                <h4 class="col container-title mt-2">{{__('teacher.Absence and Daily Book')}}</h4>
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
            {{-- the thacher name and the month --}}

            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center">FRIST GRAD</h4>
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('الشهر')}}</h4>
                    <h4 class=" Names">12</h4>
                </div>
            </div>
            {{-- the select input --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table  >
                    <thead >
                    <tr >
                        <th class="num_table  ">{{__('public.num')}}</th>
                        <th class="th-head-1"><div class="" >{{__('public.id')}}</th>
                        <th class="th-head-1">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        <th class="th-head-1">subject1</th>
                        <th class="th-head-1">subject2</th>
                        <th class="th-head-1">subject3</th>
                        <th class="th-head-1">subject4</th>
                        <th class="th-head-1">subject5</th>
                        <th class="th-head-1">subject6</th>
                        <th class="th-head-1">{{__('student.وجبة')}}</th>
                        <th class="th-head-1">{{__('student.snack')}}</th>
                        <th class="th-head-1">{{__('student.path room')}}</th>
                        <th class="th-head-1">{{__('public. وقت الحظور')}}</th>
                        <th class="th-head-1">{{__('public.وقت الأنصراف')}}</th>
                        <th class="th-head-1 ">{{__('public.absent')}}</th>
                        <th class="th-head-1">{{__('public.absent reason')}}</th>
                        <th class="th-head-1">{{__('public.more info')}}</th>
                        <th class="th-head-1">{{__('public.processes')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach($classroom->students  as $student ) --}}
                        <tr class="test_1 ">
                            <td class="num_table ">{{$counter}}</td>
                            <td>0012</td>
                            <td>KHALED ABDULNASER MANSOUR</td>
                            <td><img class="student-img" src="#" alt=""></td>
                            <td><label for="">math 1</label></td>
                            <td><label for="">math 2</label></td>
                            <td><label for="">math 3</label></td>
                            <td><label for="">math 4</label></td>
                            <td><label for="">math 5</label></td>
                            <td><label for="">math 6</label></td>
                            <td><label for=""> all</label></td>
                            <td><label for="">some</label></td>
                            <td><label for="">tow times</label></td>
                            <td><label for="">7:30am</label></td>
                            <td><label for="">1:35pm</label></td>
                            <td>
                                <input type="checkbox" class="check_item" checked id="checkbox" name="absent[]" value="absent">
                            </td>
                            <td> <label class=" " type="text" name="">absent_reason </label></td>
                            <td><label for="">info </label></td>
                            <td><a href="#">
                                <button class=" save-button btn-success"><i class="me-1 ms-1 fa-solid fa-pen-to-square"></i>{{__('public.edit')}} </button></a>
                            </td>
                            <?php $counter++ ?>
                        </tr>
                    {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
