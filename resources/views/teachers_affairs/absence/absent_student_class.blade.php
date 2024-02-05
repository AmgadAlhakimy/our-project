{{------------ واجهة قائمة الطلاب الخاصة بفصل معين ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">تحضير طلاب الروضة</h4>
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
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class=" table-section ">
            <div class="card table-section ">
            <table class=" " >
                <thead>
                    <tr class="">
                        <th class="th-head-1">{{__('public.id')}}</th>
                        <th class="th-head-1">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        <th class="th-head-1 ">{{__('public.absent')}}</th>
                        <th class="th-head-1">{{__('teacher.absent reason')}}</th>
                        <th class="th-head-1">{{__('teacher.وقت الأنصراف')}}</th>
                        

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bolder">130</td>
                        <td>mohanad naser mansour</td>
                        <td><img class="student-img" src="../../../public/assets/images/layouts/skills-01.jpg" alt=""></td>
                        <td>
                            <div class=" mt-3">
                                <input class=" mb-3" type="checkbox" name="have_health_problem"  id="healthProblem" value="{{old('have_health_problem')}}" onchange="toggleInput()"  >
                                <label class="form-label  " for="healthProblem" id="healthProblem"></label>
                            </div>
                        </td>
                        <td><input type="text" class="form-control"></td>
                        <td>
                            <div class=" mt-3">
                                <input class=" mb-3" type="checkbox" name="have_health_problem"  id="healthProblem" value="{{old('have_health_problem')}}" onchange="toggleInput()"  >
                                <label class="form-label  " for="healthProblem" id="healthProblem"></label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        
        <div class=" mt-5 row">
            <div class="box col ">
                <input class="save-button me-5 ms-5 " type="submit" value="{{__('public.save')}}">
                <input class="clear-button me-5 ms-5 " type="reset" value="{{__('public.clear')}}">
            </div>
        </div>
        
    </div>
@endsection
