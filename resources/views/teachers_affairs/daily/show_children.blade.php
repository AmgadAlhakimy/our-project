{{------------ واجهة تفت رالمتابعة الخاص بطلاب المدرسة ----------------}}
@extends('layouts.sidebar')
@section('content')
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
                                <input type="text" required class="form-control "
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
                    <h4 class=" Names"> {{$subject->name}}</h4>
                </div>
                
                <a class="card-info card-info_2  col  save-button"
                    href="{{route('follow_up_children.index')}}">
                    <h4 class="text-center">{{__('teacher.For All Class')}}</h4>
                    <h4 class=" Names"> MATH</h4>
                </a>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
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
                        <th class="text-center"><div class="th-head-1" >{{__('public.id')}}</div></th>
                        <th ><div class="th-head-1" >{{__('public.name')}}</div></th>
                        <th ><div class="th-head-1" >{{__('public.photo')}}</div></th>
                        <th ><div class="th-head-1" >{{__('student.Daily Follow-Up')}}</div></th>
                        <th ><div class="th-head-1 " >abcent</div></th>
                        <th ><div class="th-head-1" >describtion abcent</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($classroom->students  as $student )
                        <tr class="test_1">
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td><img class="student-img" src="{{$student->photo}}" alt=""></td>
                            <td><a href="{{route('follow_up_children.createNote',$student->id)}}"
                                class="btn save-button btn-light me-5 w-100">{{__('student.Daily Follow-Up')}} (icon)
                                <i class=" fa-solid fab-pen"></i></a></td>
                            <td>
                                <input type="checkbox" class="check_item " id="checkbox">
                            </td>
                            <td> <input class="form-control shadow" type="text" placeholder="the abcent ascuces"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
