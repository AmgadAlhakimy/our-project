@extends('layouts.sidebar')
@section('content')
<div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Outcame for the month</h4>
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

            {{--  --}}
            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="{{old('sex')}}">
                    <option class="text-center d-"
                            value="{{__('student.male')}}">{{__('student.male')}}</option>
                    <option class="text-center d-"
                            value="{{__('student.female')}}">{{__('student.female')}}</option>
                    <option class="d d-" value="male"></option>
                </select>
                @error('sex')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            {{-- the thacher name and the month --}}

            <div class="cards-container  third-card">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center">frist grade</h4>
                    <h4 class=" Names"> MATH</h4>
                </div>

                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center">Month</h4>
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
                        <th ><div class="th-head-1 " >id</div> <div></div></th>
                        <th ><div class="th-head-3" >Name</div></th>
                        <th ><div class="th-head-1" >photo</div></th>
                        <th ><div class="th-head-1" >Exam</div><div>60</div></th>
                        <th ><div class="th-head-1" >H.W</div><div></div>20</th>
                        <th ><div class="th-head-1" >Oral.E</div><div>10</div></th>
                        <th ><div class="th-head-1" >سلوك</div><div>10</div></th>
                        <th ><div class="th-head-1 " >Total</div><div>100</div></th>
                        <th ><div class="th-head-1" >محصلة</div><div>20</div></th>
                        <th ><div class="th-head-1" >Percent</div><div>100%</div></th>
                        <th ><div class="th-head-1" ></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-01.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="60"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="10"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="10"></td>
                        <td><label for="">90</label></td>
                        <td><label for="">18</label></td>
                        <td><label for="">90%</label></td>
                        <td></td>
                    </tr>
                </tbody>
                </table>

            </div>
        </div>
        
        <div class=" box row mt-5">
            <div class=" col mt-1 ">
                {{-- زر الترحيل إلى الكنترول --}}
                <input class="save-button  " type="submit" value="{{__('public.ترحيل')}}">
            </div>
            <div class=" col mt-1">
                {{-- زر التعديل في كل مرة يضيف درجات قبل الترحيل --}}
                <input class="save-button " type="submit" value="{{__('public.save')}}">
            </div>
            <div class="  col mt-1">
                <input class="clear-button " type="reset" value="{{__('public.clear')}}">
            </div>
        </div>
    </div>
@endsection

