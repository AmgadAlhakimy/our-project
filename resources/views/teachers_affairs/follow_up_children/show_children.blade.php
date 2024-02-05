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
                    <h4 class=" text-center">{{$classroom->name}}</h4>
                    <h4 class=" Names"> قرآن</h4>
                </div>

                <a class="card-info card-info_2  col  save-button"
                    href="{{route('follow_up_children.index')}}">
                    <h4 class="text-center">{{__('teacher.for all students')}}</h4>
                </a>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('الشهر')}}</h4>
                    <h4 class=" Names">{{$month}}</h4>
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
                        <th class="num_table ">{{__('public.num')}}</th>
                        <th class="th-head-1"><div class="" >{{__('public.id')}}</th>
                        <th class="th-head-1">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        <th class="th-head-1">{{__('student.Daily Follow-Up')}}</th>
                        <th class="th-head-1">{{__('public. وقت الحظور')}}</th>
                        <th class="th-head-1">{{__('public.وقت الأنصراف')}}</th>
                        <th class="th-head-1 ">{{__('public.absent')}}</th>
                        <th class="th-head-1">{{__('public.absent reason')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($classroom->students  as $student )
                        <tr class="test_1 ">
                            <td class="num_table ">{{$counter}}</td>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td><img class="student-img" src="{{$student->photo}}" alt=""></td>
                            <td><a href="{{route('follow_up_children.createNote',$student->id)}}">
                                <button class=" save-button btn-light "><i class=" fa-solid fa-pencil-ruler"></i>{{__('student.Daily Follow-Up')}} </button></a></td>
                            <td><label for="">7:30am</label></td>
                            <td><label for="">1:35pm</label></td>
                            <td>
                                <input type="checkbox" class="check_item" checked id="checkbox" name="absent[]" value="absent">
                            </td>
                            <td> <input class="form-control shadow" type="text" name="absent_reason"></td>
                            <?php $counter++ ?>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
