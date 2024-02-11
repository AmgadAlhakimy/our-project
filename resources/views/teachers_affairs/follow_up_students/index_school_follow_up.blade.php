{{------------ واجهة عرض دفتر المتابعة الخاص بطلاب المدرسة ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}

        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card  ">
                <h4 class="col container-title mt-2">{{__('teacher.view and Daily Book')}}</h4>
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
                    <h4 class=" text-center">الصف السادس</h4>
                    <h4 class=" Names"> قرآن</h4>
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">{{__('teacher.الشهر')}}</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        {{-- <div class=" table-section "> --}}
        <form method="post" action="{{route('students.search')}}">
            @method('GET')
            @csrf
            <div class="table-header mt-3">
                {{-- for all studentes --}}
                <h4 class="col container-title ">{{__('teacher.for all students')}} </h4>

                <div class="box row me-2 ms-2 mb-1 ">
                    <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                        <label for="" class="form-label ">{{__('teacher.TO TAKE HOME')}}</label>
                        <label class="form-control shadow"  id="" >books</label>
                    </div>
                    <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                        <label for="" class="form-label ">{{__('teacher.TO BRING TO SCHOOL')}}</label>
                        <label class="form-control shadow"   id="" >pencil</label>
                    </div>
                    <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                        <label for="" class="form-label ">{{__('teacher.subject')}}</label>
                        <label class="form-control shadow" >mathmatic</label>
                    </div>
                    <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                        <label for="" class="form-label ">{{__('teacher.NOTE')}}</label>
                        <label class="form-control shadow"  >no not</label>
                    </div>
                </div>
                {{-- the all students info buttons is not ready yet --}}
                <div class=" row">
                    <div class="box mb-1 mt-3">
                        <a href="#">
                            <button class="btn save-button btn-success ">
                                {{__('public.edit')}}<i class="fa-solid fa-pen-to-square me-2 ms-2"></i>
                            </button></a>
                        <button class="btn clear-button btn-danger" type="reset" >{{__('public.clear')}}<i class="fa-solid fa-trash me-2 ms-2"></i></button>
                    </div>
                </div>
            </div>

            <div class=" table-header mt-3">
                <div class="row">
                    @for($i=0; $i<30; $i++)

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
                                <label for="" class="form-label ">{{__('teacher.TO TAKE HOME')}}</label>
                                <label class="form-control shadow"  id="" >books</label>
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-6 mt-1 mb-1">
                                <label for="" class="form-label ">{{__('teacher.TO BRING TO SCHOOL')}}</label>
                                <label class="form-control shadow"   id="" >pencil</label>
                            </div>
                            <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                                <label for="" class="form-label ">{{__('teacher.subject')}}</label>
                                <label class="form-control shadow" >mathmatic</label>
                            </div>
                            <div class=" col-lg-6 col-md-12 col-sm-12 mt-1 mb-1">
                                <label for="" class="form-label ">{{__('teacher.NOTE')}}</label>
                                <label class="form-control shadow"  >no not</label>
                            </div>
                        </div>
                        {{-- ------- --}}
                        <hr class=" ms-2 me-2 shadow">
                        {{-- --- absent ---- --}}
                        <div class=" row me-4 ms-2 mb-1">
                            <div class=" col-2 center_y_x mt-4">
                                <input class="form-label " type="checkbox" name="have_health_problem"  id="healthProblem" value="{{old('have_health_problem')}}" onchange="toggleInput()" checked >
                                <label class="form-label  " for="healthProblem" id="healthProblem"></label>
                            </div>
                            <div class=" col text-center">
                                <label for="" class="form-label">{{__('teacher.ABSENCE REASON')}}</label>
                                <label class="form-control shadow mb-1"   id="" > he was sick</label>
                            </div>
                        </div>
                        <hr class=" ms-2 me-2 shadow">
                        <div class="notes col-12 text-center">
                            <a href="#">
                                <button class="btn save-button btn-success w-50">
                                    {{__('public.edit')}}<i class="fa-solid fa-pen-to-square me-2 ms-2"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </form>
    </div>
@endsection
