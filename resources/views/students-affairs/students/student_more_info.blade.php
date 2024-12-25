{{--   واجهة معلومات الطالب كاملة --}}
@extends('layouts.sidebar')
@section('content')

        <section class="my-table  ">
                <!-- Start personal info  -->
                <h3 class="container-title mb-5">{{__('student.student information')}}</h3>
            <div class="cards_container row">

                <div class="  ">
                    <label class="box container-title col-12 ">{{__('student.personal info')}}</label>
                    <div class="row col">
                        {{-- 1 --}}
                        <div class="col col-ms-12 row  ">
                            <div class="    cards_info_style ms-1 me-1 mb-1">
                                    <div class=" row">
                                        {{-- 1 --}}
                                        <div class="box col">
                                            <img  src="{{asset("storage/".$student->photo)}}" class="student-img mt-1 mb-2 ms-1 me-1" alt="photo"></td>

                                        </div>
                                        <div class="text-center ">
                                            <label class="  form-label"> {{$student->name}} </label>
                                            <label class="  title-3">({{$student->id}})</label>
                                        </div>
                                        <div class="text-center ">
                                        </div>
                                    </div>
                            </div>
                            <div class="    cards_info_style ms-1 me-1 mb-1">
                                <div class="text-center row">
                                    <label class="  title-3 col-12">8</label>
                                    <label class="  form-label col-12">{{__('student.absent')}}</label>
                                </div>
                            </div>
                            <div class="    cards_info_style ms-1 me-1 mb-1">
                                {{-- 1 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label">{{__('student.student allergy')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3">no allergy </label>
                                    </div>
                                </div>
                                {{-- 2 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label"> {{__('student.student health problem')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3">no health problem</label>
                                    </div>
                                </div>
                                {{-- 3 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label">{{__('student.student medicines')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3">no medicines</label>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        {{-- ==================================================== --}}
                        {{-- 2 --}}
                        <div class=" col row ">
                            <div class="    cards_info_style ms-1 me-1 mb-1  ">
                                {{-- 1 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label">{{__('student.gender')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3"> {{$student->gender}} </label>
                                    </div>
                                </div>
                                {{-- 2 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label"> {{__('student.birth date')}}</label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3"> {{$student->birthdate}} </label>
                                    </div>
                                </div>
                                {{-- 3 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label">{{__('public.address')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3"> {{$student->address}} </label>
                                    </div>
                                </div>
                                {{-- 4 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label"> {{__('student.birth place')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3"> {{$student->place_of_birth}} </label>
                                    </div>
                                </div>
                                {{-- 5 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label"> {{__('public.class')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3"> {{$student->classroom->name}} </label>
                                    </div>
                                </div>
                                {{-- 6 --}}
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 form-label">{{__('student.level')}} </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 title-3"> {{$student->classroom->Level->name}} </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        {{-- ==================================================== --}}

                        <div class="    ">
                            <label class="box container-title col "> {{__('student.parent info')}} </label>
                            <div class="row ">
                                    {{-- =====معلومات الأب ===== --}}
                                <div class="col-lg-4 col-md-6 col-ms-12   cards_info_style ms-1 me-1 mb-1  mb-3">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label"> {{__('student.father name')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3"> {{$student->parents->father_name}} </label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label"> {{__('student.father work')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->father_work}}</label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label">{{__('student.father contacts 1')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->father_contact1}}</label>
                                        </div>
                                    </div>
                                    {{-- 4 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label">{{__('student.father contacts 2')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->father_contact2}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات الأم ===== --}}
                                <div class="col-lg-4 col-md-6 col-ms-12  cards_info_style ms-1 me-1 mb-1  mb-3">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label"> {{__('student.mother name')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->mother_name}}</label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label"> {{__('student.mother work')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3"> {{$student->parents->mother_work}}</label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label">{{__('student.mother contacts 1')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->mother_contact1}}</label>
                                        </div>
                                    </div>
                                    {{-- 4 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label">{{__('student.mother contacts 1')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->mother_contact2}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات القريب ===== --}}
                                <div class="col-lg-4 col-md-6 col-ms-12  cards_info_style ms-1 me-1 mb-1 mb-3">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2 ms-1 me-1">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label">{{__('student.kin name')}} </label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->kin_name}}</label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ms-1 me-1 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label">{{__('student.kin relationship')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->kin_relationship}} </label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ms-1 me-1 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 form-label"> {{__('student.kin contact')}}</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 title-3">{{$student->parents->kin_contact}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات اضافية ===== --}}
                                <div class="col  col-ms-12  cards_info_style ms-1 me-1 mb-1  mb-3">
                                    {{-- 1 --}}
                                    <label class="box form-label mt-5">{{__('student.more info')}}</label>
                                        <div class="box col-lg-12 col-md-12 mt-3">
                                            <label class=" mb-2 mt-2 title-3">{{$student->note}}</label>
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
        
@endsection
