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
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
            {{-- the select input --}}
            
            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="{{old('sex')}}">
                    <option class="text-center"
                            value="{{__('student.male')}}">{{__('student.male')}}</option>
                    <option class="text-center"
                            value="{{__('student.female')}}">{{__('student.female')}}</option>
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
                        <th ><div class="th-head-1 " >id</div></th>
                        <th ><div class="th-head-3" >Name</div></th>
                        <th ><div class="th-head-2" >photo</div></th>
                        <th ><div class="th-head-2" >Absence</div></th>
                        <th ><div class="th-head-4" >descrbiton</div></th>
                        <th ><div class="th-hea" ></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bolder">130</td>
                        <td>mohanad naser mansour</td>
                        <td><img class="student-img" src="../../../public/assets/images/layouts/skills-01.jpg" alt=""></td>
                        <td><div class=" mt-3">
                                <input class="toggle  " type="checkbox" name="have_health_problem"  id="healthProblem" value="{{old('have_health_problem')}}" onchange="toggleInput()" checked >
                                <label class="form-label  rounded" for="healthProblem" id="healthProblem"></label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </div>
        </div>
    </div>
@endsection
