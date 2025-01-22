                {{------------ واجهة عرض دفتر المتابعة الخاص بطلاب الروضة ----------------}}
@extends('layouts.sidebar')
@section('content')
    <?php $counter = 1 ?>
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card  ">
                <h4 class="col container-title mt-2">{{__('teacher.show the absent children')}}</h4>
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
                    <h4 class=" text-center card-title">
                        {{-- {{$classroom->name}} --}}
                        frist grade
                    </h4>
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('الشهر')}}</h4>
                    <h4 class=" Names">
                        {{-- {{$month}} --}}
                        october
                    </h4>
                </div>
            </div>
            {{-- the select input --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table  >
                    <thead >
                    <tr >
                        <th class="num_table ">{{__('public.num')}}</th>
                        <th class="th-head-1">{{__('public.id')}}</th>
                        <th class="th-head-1">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        <th class="th-head-1 ">{{__('public.absent')}}</th>
                        <th class="th-head-1">{{__('teacher.time attendance')}}</th>
                        <th class="th-head-1">{{__('teacher.absent reason')}}</th>
                        <th class="th-head-1">{{__('teacher.departure time')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @foreach($classroom->students  as $student ) --}}
                        <tr class="test_1 ">
                            <td class="num_table ">{{$counter}}</td>
                            <td>
                                {{-- {{$student->id}} --}}
                            </td>
                            <td>
                                {{-- {{$student->name}} --}}
                            </td>
                            <td><img class="student-img"
                                {{-- src="{{$student->photo}}" alt="" --}}></td>
                            <td>
                                <div class="mt-2 check_style">
                                    <label >
                                        <input class=" " type="checkbox" name=""  id="" value="{{old('')}}"  >
                                        <i></i>
                                    </label>
                                </div>
                            </td>
                            <td><label for="">7:30am</label></td>
                            <td><label for="">he was stupid</label></td>
                            <td><label for="">1:35pm</label></td>
                            <?php $counter++ ?>
                        </tr>
                    {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
