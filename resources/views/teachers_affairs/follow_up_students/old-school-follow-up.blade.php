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
                    <form method="post" action="{{route('students.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row ">
                            <label class="col-9">
                                <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- the thacher name and the month --}}

            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center">frist grade</h4>
                    <h4 class=" Names"> MATH</h4>
                </div>

                <a class="card-info card-info_2  col  save-button"
                    href='/children'>
                    <h4 class="text-center">{{__('teacher.For All Class')}}</h4>
                    <h4 class=" Names"> MATH</h4>
                </a>

                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
            {{-- the select input --}}

            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="{{old('sex')}}">
                    <option class="text-center"
                            value="{{__('Student.male')}}">{{__('Student.male')}}</option>
                    <option class="text-center"
                            value="{{__('Student.female')}}">{{__('Student.female')}}</option>
                </select>
                @error('sex')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class=" table-section ">
            <table class=" " >
                <thead>
                <tr class="">
                    <th ><div class="th-head-1" >{{__('public.id')}}</div></th>
                    <th ><div class="th-head-3" >{{__('public.name')}}</div></th>
                    <th ><div class="th-head-1" >{{__('public.photo')}}</div></th>
                    <th ><div class="th-head-3" >{{__('student.Daily Follow-Up')}}</div></th>
                    <th ><div class="th-head-1" ></div></th>
                </tr>
                </thead>
                <tbody>
                @foreach($students  as $student )
                    <tr>
                        <td class="fw-bolder">{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td><img class="student-img" src="{{$student->photo}}" alt=""></td>
                        <td>
                            <a href="{{route('follow_up_students.createNote', $student->id)}}" class="btn save-button btn-light me-5 w-100">
                                {{__('student.Daily Follow-Up')}} (icon)<i class="ms-3 fa-solid fab-pen"></i></a></td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection










{{-- دفتر المتابعة الخاص بالمدارس --}}
{{-- @extends('layouts.sidebar')
@section('content') --}}
    </header>
    <main class="main ">
        <section class="section ">
            <h1 data-text="" class="p-relative title-1">DAILY FOLLOW-UP SCHOOL</h1>
            <div class="container containers-style mb-3   head-name" >
                <div class="test-2  col-lg-8 col-md-8 col-sm-9 ">
                    <h1 class=" topic-name cardinfo  pt-3"> Yazan Naser Mansour  </h1>
                    <h3 class=" topic-title cardinfo  pb-3"> frist grade</h3>
                </div>
                <div class=" ">
                    <img class=" student-img " src="../../../public/assets/images/layouts/yazan.jpg" alt="">
                    <h3 class=" topic-name  row-center">100</h3>
                </div>
            </div>
            <h3 class="container-title">HOMEWORK - ASSIGNMENT</h3>
            <div class="container containers-style" >
                <div class="row">
                    <div class="box row">
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <label for="">Subject</label>
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="1">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8 ">
                            <label for=" ">comments</label>
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="1">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="2">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="2">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="3">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="3">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 ">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="4">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="4">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="5">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="5">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="6">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="6">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="7">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="7">
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="8">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="8">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="9">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="9">
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <input type="text" class=" form-control ms-2 me-2" id=' ' required placeholder="10">
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <input type="text" class=" form-control ms-2 me-2" id='' required placeholder="10">
                        </div>
                    </div>
                </div>
            </div>
            
            <h3 class="container-title">Add Info</h3>
            <div class="container containers-style">
                    <div class="box row">
                        <div class="notes col-lg-6 col-md-6 col-sm-12">
                            <label class="form-label " for="">THINGS TO TAKE HOME</label>
                            <textarea class="form-control" id="" cols="50" rows="5"></textarea>
                        </div>
                        <div class="notes col-lg-6 col-md-6 col-sm-12">
                            <label class="form-label " for="">THINGS TO BRING TO SCHOOL</label>
                            <textarea class="form-control" id="" cols="50" rows="5"></textarea>
                        </div>
                        <div class="notes col-lg-12 col-md-12 col-sm-12">
                            <label class="form-label" for="">NOTE</label>
                            <textarea class="form-control" id="" cols="50" rows="5"></textarea>
                        </div>
                    </div>
            </div>
                <div class=" row">
                    <div class="box ">
                        <input class="save-button " type="submit" value="Save " >
                        <input class="clear-button " type="reset" value="clear" >
                    </div>
                </div>
        </div>
    </main>
    @endsection




                    <!-- 5 -->
                    <!-- start permanence
                    <div class="box mb-0  col-12">
                        <label class="col-12" for="t-permanence">permanence</label>
                    </div>
                    <div class="box  col-lg-6 col-md-6 col-sm-6">
                        <label class="col " >FROM</label>
                        <input type="time" class=" col- form-control  " id='t-permanence' placeholder="the end of time" >
                    </div>
                    <div class="box  col-lg-6 col-md-6 col-sm-6 ">
                        <label class="col" >TO</label>
                        <input type="time" class=" form-control  col-4" id='t-permanence' placeholder="the beginning of permanence ">
                    </div>
                    end permanence -->

