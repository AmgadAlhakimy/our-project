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
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div> 
            </div>
            {{-- the select input --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        {{-- <div class=" table-section "> --}}
        <form method="post" action="{{route('students.search')}}">
            @method('GET')
            @csrf
            <div class="table-header mt-4 ">
                {{-- for all studentes --}}
                <h4 class="col container-title ">{{__('teacher.for all students')}} </h4>
                <div class="cards_info_style col-12 mb-2">
                    {{-- names & photo --}}
                    <div class="row ">
                        <div class="box mb-1 mt-2 col">
                            <img  class=" cards_img" src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills"/>
                        </div>
                        <div class="text-center col row center_y_x me-1 ms-1">
                            <label class="col-12 cards_title mt-1 mb-1"> Emad nasr mansour </label>
                            <label class="col-12 cards_sup_title mt-1 mb-1">i7676</label>
                        </div>
                    </div>
                    {{-- ---- daily info --- --}}
                    <hr class=" ms-2 me-2 shadow">
                    {{-- ------- --}}
                    <div class="box row me-2 ms-2 mb-2 ">
                        <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                            <input class="form-control shadow" placeholder="{{__('teacher.TO TAKE HOME')}}" id="" ></input>
                        </div>
                        <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                            <input class="form-control shadow" placeholder="{{__('teacher.TO BRING TO SCHOOL')}}"  id="" ></input>
                        </div>
                        <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                            <input class="form-control shadow" placeholder="{{__('teacher.subject')}}" ></input>
                        </div>
                        <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                            <input class="form-control shadow" placeholder="{{__('teacher.NOTE')}}" ></input>
                        </div>
                    </div>
                    {{-- ------- --}}
                </div>
            </div>

            <div class=" table-header mt-3">
                <div class="row">
                    <div class="cards_info_style col-lg-4 col-md-6 col-sm-12 mb-2">
                        {{-- names & photo --}}
                        <div class="row ">
                            <div class="box mb-1 mt-2 col">
                                <img  class=" cards_img" src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills"/>
                            </div>
                            <div class="text-center col row center_y_x me-1 ms-1">
                                <label class="col-12 cards_title mt-1 mb-1"> Emad nasr mansour </label>
                                <label class="col-12 cards_sup_title mt-1 mb-1">i7676</label>
                            </div>
                        </div>
                        {{-- ---- daily info --- --}}
                        <hr class=" ms-2 me-2 shadow">
                        {{-- ------- --}}
                        <div class="box row me-2 ms-2 mb-1 ">
                            <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="{{__('teacher.TO TAKE HOME')}}" id="" ></input>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="{{__('teacher.TO BRING TO SCHOOL')}}"  id="" ></input>
                            </div>
                            <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="{{__('teacher.subject')}}" ></input>
                            </div>
                            <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                                <input class="form-control shadow" placeholder="{{__('teacher.NOTE')}}" ></input>
                            </div>
                        </div>
                        {{-- ------- --}}
                        <hr class=" ms-2 me-2 shadow">
                        {{-- --- absent ---- --}}
                        <div class=" row me-4 ms-2 mb-1">
                            <div class="notes col-2 center_y_x mt-2 check_style">
                                <label >
                                    <input class=" " type="checkbox" name=""  id="" value="{{old('')}}"  >
                                    <i></i>
                                </label>
                            </div>
                            <div class=" col">
                                <input class="form-control shadow mb-1" placeholder=" {{__('teacher.ABSENCE REASON')}}"  id="" ></input>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
