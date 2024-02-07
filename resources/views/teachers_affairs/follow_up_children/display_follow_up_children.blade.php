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
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('public.month')}}</h4>
                    <h4 class=" Names">{{$month}}</h4>
                </div>
            </div>
            {{-- the select input --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table>
                    <thead>
                    <tr>
                        <th class="num_table  ">{{__('public.num')}}</th>
                        <th class="th-head-4">{{__('public.id')}}</th>
                        <th class="th-head-1">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        @foreach($classroom->subjects as $subject)
                            <th >{{$subject->name}}</th>
                        @endforeach
                        <th class="th-head-1">{{__('follow_up.food')}}</th>
                        <th class="th-head-4">{{__('follow_up.snack')}}</th>
                        <th class="th-head-1">{{__('follow_up.bath')}}</th>
                        <th class="th-head-1">{{__('public.note')}}</th>
                        <th class="th-head-1">{{__('public.processes')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($follow_up  as $follow )
                        <tr class="test_1 ">
                            <td class="num_table ">{{$counter}}</td>
                            <td>{{$follow->student->id}}</td>
                            <td>{{$follow->student->name}}</td>
                            <td><img class="student-img" src="{{$follow->student->photo}}" alt=""></td>
                            @foreach($follow->homework as $homework)
                                <td class="th-head-1">{{$homework}}</td>
                            @endforeach
                            <td> {{$follow->food}}</td>
                            <td>{{$follow->snack}}</td>
                            <td>{{$follow->bath}}</td>
                            <td>{{$follow->note}} </td>
                            <td><a href="{{route('follow_up_children.edit',$follow->id)}}"
                                class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                                <?php $counter++ ?>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
