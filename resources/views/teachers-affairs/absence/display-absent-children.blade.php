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
                <div class=" col text-center ">
                    <div class="cards_sup_title">{{$classroom->name}}</div>
                </div>
                <div class=" col text-center ">
                    <div class="cards_title">{{$month}}</div>
                </div>
            </div>
            <div class="w-100 mt-2 row">
                <a href="{{route('hi',$classroom->id)}}"
                    class="w-100 save-button col btn p-0">
                        <div class="form-label ">{{__('absent.disply absent for this month')}}</div>
                    </a>
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                <table  >
                    <thead >
                    <tr >
                        <th class="th-head-1 num_table form-label">{{__('public.num')}}</th>
                        <th class="th-head-3 form-label">{{__('public.name')}}</th>
                        <th class="th-head-2 form-label">{{__('public.photo')}}</th>
                        <th class="th-head-1 form-label ">{{__('absent.absent')}}</th>
                        <th class="th-head-3 form-label">{{__('teacher.absent reason')}}</th>
                    </tr> 
                    </thead>
                    <tbody>
                     @foreach($absentStudents  as $absentStudent )
                        <tr class=" ">
                            <td class="num_table ">{{$counter}}</td>
                            <td >
                                <div class="td_rect">
                                    {{$absentStudent->student->name}}
                                </div>
                            </td>
                            <td><img
                                     src="{{asset('storage/'.$absentStudent->student->photo)}}"
                                     class="student-img" alt="photo" ></td>
                            <td>
                                <div >
                                    <div class="td_rect">
                                       {{trans('public.yes')}}
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                <div class="td_rect">{{$absentStudent->absent_reason}}</div></td>
                            <?php $counter++ ?>
                        </tr>
                     @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
