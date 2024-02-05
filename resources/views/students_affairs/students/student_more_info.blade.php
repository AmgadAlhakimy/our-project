{{--   واجهة معلومات الطالب كاملة --}}
@extends('layouts.sidebar')
@section('content')
    
    <main class="">
        <section class="section  ">
                <!-- Start personal info  -->
                <h3 class="container-title mb-5">{{__('student.student information')}}</h3>
            <div class="cards_container row">
                
                <div class=" containers-style">
                    <label class="box container-title col-12 ">{{__('student.personal info')}}</label>
                    <div class="row col">
                        {{-- 1 --}}
                        <div class="col col-ms-12 row me-1 ms-1 ">
                            <div class=" containers-style cards_info_style">
                                    <div class=" row">
                                        {{-- 1 --}}
                                        <div class="box col">
                                            <img class=" cards_img" src="{{asset($student->photo)}}" alt="">
                                        </div> 
                                        <div class="text-center ">
                                            <label class="  cards_title"> {{$student->name}} </label>
                                            <label class="  cards_sup_title">({{$student->id}})</label>
                                        </div>
                                        <div class="text-center ">
                                        </div>
                                    </div>
                            </div>
                            <div class=" containers-style cards_info_style">
                                <div class="text-center row">
                                    <label class="  cards_sup_title col-12 big_font">8</label>
                                    <label class="  cards_title col-12">{{__('student.absent')}}</label>
                                </div>
                            </div>
                            <div class=" containers-style cards_info_style">
                                {{-- 1 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title">{{__('student.student allergy')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title">no allergy </label>
                                    </div>
                                </div>
                                {{-- 2 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> {{__('student.student health problem')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title">no health problem</label>
                                    </div>
                                </div>
                                {{-- 3 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title">{{__('student.student medicines')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title">no medicines</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ==================================================== --}}
                        {{-- 2 --}}
                        <div class=" col row me-1 ms-1">
                            <div class=" containers-style cards_info_style  ">
                                {{-- 1 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title">{{__('student.gender')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> {{$student->gender}} </label>
                                    </div>
                                </div>
                                {{-- 2 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> {{__('student.birth date')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> {{$student->birthdate}} </label>
                                    </div>
                                </div>
                                {{-- 3 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title">{{__('public.address')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> {{$student->address}} </label>
                                    </div>
                                </div>
                                {{-- 4 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> {{__('student.birth place')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> {{$student->place_of_birth}} </label>
                                    </div>
                                </div>
                                {{-- 5 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> {{__('public.class')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> {{$student->classroom->name}} </label>
                                    </div>
                                </div>
                                {{-- 6 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title">{{__('student.level')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> {{$student->classroom->Level->name}} </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        {{-- ==================================================== --}}

                        <div class=" containers-style  ">
                            <label class="box container-title col "> {{__('student.parent info')}} </label>
                            <div class="row ">
                                    {{-- =====معلومات الأب ===== --}}
                                <div class="col-lg-4 col-md-6 col-ms-12  cards_info_style  mb-3">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> {{__('student.father name')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"> {{$student->relative->father_name}} </label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> {{__('student.father work')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->father_work}}</label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">{{__('student.father contacts 1')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->father_contact1}}</label>
                                        </div>
                                    </div>
                                    {{-- 4 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">{{__('student.father contacts 2')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->father_contact2}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات الأم ===== --}}
                                <div class="col-lg-4 col-md-6 col-ms-12 cards_info_style  mb-3">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> {{__('student.mother name')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->mother_name}}</label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> {{__('student.mother work')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"> {{$student->relative->mother_work}}</label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">{{__('student.mother contacts 1')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->mother_contact1}}</label>
                                        </div>
                                    </div>
                                    {{-- 4 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">{{__('student.mother contacts 1')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->mother_contact2}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات القريب ===== --}}
                                <div class="col-lg-4 col-md-6 col-ms-12 cards_info_style mb-3">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2 ms-1 me-1">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">{{__('student.kin name')}} </label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->kin_name}}</label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ms-1 me-1 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">{{__('student.kin relationship')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->kin_relationship}} </label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ms-1 me-1 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> {{__('student.kin contact')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->kin_contact}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات اضافية ===== --}}
                                <div class="col  col-ms-12 cards_info_style  mb-3">
                                    {{-- 1 --}}
                                    <h3 class="text-center cards_title mt-5">{{__('student.more info')}}</h3>
                                        <div class="box col-lg-12 col-md-12 mt-3">
                                            <label class=" mb-2 mt-2 cards_sup_title">{{$student->note}}</label>
                                        </div>
                                </div>
                            </div>
                        </div>


                        {{-- <div class=" row">
                            <div class="box col ">
                                <input class="save-button " type="submit" value="{{__('public.save')}}">
                            </div>
                            <div class="box  col">
                                <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                            </div>
                        </div> --}}
                        <!-- End final box -->
            </div>
        </section>
    </main>
@endsection
