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
                <h4 class="col container-title mt-2">{{__('absent.absent children today')}}</h4>
                <div class="row first-card mt-4">
                </div>
            </div>
            {{-- the thacher name and the month --}}

            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('public.class')}}</h4>
                    <h4 class="Names">
                         {{$classroom->name}}
                    </h4>
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('public.date')}}</h4>
                    <h4 class="Names">
                         {{$month}}
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
                        <th class="th-head-1 ">{{__('absent.absent')}}</th>
                        <th class="th-head-1">{{__('teacher.absent reason')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($absentStudents  as $absentStudent )
                        <tr class="test_1 ">
                            <td class="num_table ">{{$counter}}</td>
                            <td>
                                 {{$absentStudent->student->id}}
                            </td>
                            <td>
                                 {{$absentStudent->student->name}}
                            </td>
                            <td><img
                                     src="{{asset('storage/'.$absentStudent->student->photo)}}"
                                     class="student-img" alt="photo" ></td>
                            <td>
                                <div class="mt-2 check_style">
                                    <label >
                                       {{trans('public.yes')}}
                                    </label>
                                </div>
                            </td>
                            <td><label for="">{{$absentStudent->absent_reason}}</label></td>
                            <?php $counter++ ?>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
