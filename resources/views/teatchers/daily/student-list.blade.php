{{------------ واجهة قائمة الطلاب الخاصة بفصل معين ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Students Information</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('students.search')}}">
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
            </div>
            {{-- the thacher name and the month --}}

            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center">frist grade</h4>
                    <h4 class=" Names"> MATH</h4>
                </div>

                <a class="card-info card-info_2  col  save-button"
                    href='/children'>
                    <h4 class="text-center">لكل الفصل</h4>
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
            <div class="card table-section ">
            <table class=" " >
                <thead>
                    <tr class="">
<<<<<<< HEAD
                        <th ><div class="th-head-1  " >{{__('public.id')}}</div></th>
                        <th ><div class="th-head-3" >{{__('public.name')}}</div></th>
                        <th ><div class="th-head-1" >{{__('public.photo')}}</div></th>
                        <th ><div class="th-head-3" >{{__('student.Daily Follow-Up')}}</div></th>
=======
                        <th ><div class="th-head-1 " >id</div></th>
                        <th ><div class="th-head-3" >Name</div></th>
                        <th ><div class="th-head-2" >photo</div></th>
                        <th ><div class="th-head-3" >Student info </div></th>
                        <th ><div class="th-head-3" >Daily follow-up</div></th>
>>>>>>> 413046734566301ceb01ebe1a9bb595f38ffa784
                        <th ><div class="th-head-1" ></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bolder">130</td>
                        <td>mohanad naser mansour</td>
                        <td><img class="student-img" src="../../../public/assets/images/layouts/skills-01.jpg" alt=""></td>
                        <td>
                            <a href='/children' class="btn save-button btn-light me-5 w-100">{{__('student.Daily Follow-Up')}} (icon)<i class="ms-3 fa-solid fab-pen"></i></a></td>
                        <td></td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
@endsection
