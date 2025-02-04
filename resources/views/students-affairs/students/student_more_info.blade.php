{{--   واجهة معلومات الطالب كاملة --}}
@extends('layouts.sidebar')
@section('content')

        <div class="my-table  ">
                <!-- Start personal info  -->
                <div class="row ">
                    <label class="col-12 container-title  mt-5 mb-3">{{__('student.personal info')}}</label>
                    <div class="col-12 ">
                        {{-- name and photo --}}
                        <div class="col-12 ">
                            <div class="cards_info_style row me-1 ms-1 mb-3">
                                {{-- 1 --}}
                                <div class="center_row_up col-4">
                                    <img  src="{{asset("storage/".$student->photo)}}" class="personal_img " alt="photo"></td>
                                </div>
                                <div class="center_row_up col row ">
                                    <label class="col-12  cards_title  text-center   "> {{$student->name}}</label>
                                    <label class=" col-12 text-center me-2 ms-2  cards_sup_title">{{$student->id}}</label>
                                </div>
                            </div>
                        </div>
                        {{-- ==================================================== --}}
                        <div class="col-12 ">
                            <div class="cards_info_style me-1 ms-1 row">
                                {{-- the student info --}}
                                <div class=" col-lg-6 col-md-6 col-ms-12  ">
                                    <div class=" row me-1 ms-1 pt-2 ">
                                        {{-- 1 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">{{__('student.gender')}}</label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3"> {{$student->gender}} </label>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der"> {{__('student.birth date')}}</label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3"> {{$student->birthdate}} </label>
                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">{{__('public.address')}} </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3"> {{$student->address}} </label>
                                            </div>
                                        </div>
                                        {{-- 4 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der"> {{__('student.birth place')}} </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3"> {{$student->place_of_birth}} </label>
                                            </div>
                                        </div>
                                        {{-- 5 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der"> {{__('student.class')}} </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3"> {{$student->classroom->name}} </label>
                                            </div>
                                        </div>
                                        {{-- 6 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">{{__('student.level')}} </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3"> {{$student->classroom->Level->name}} </label>
                                            </div>
                                        </div>
                                        {{-- 7 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">{{__('teacher.absent')}} </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">2</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- health info --}}
                                <div class="col-lg-6 col-md-6 col-ms-12  ">
                                    <div class=" row me-1 ms-1 pt-2">
                                        {{--  --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">
                                                    {{__('student.has allergy?')}}
                                                </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">{{$student->has_allergy}}</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">{{__('student.student allergy')}}</label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">{{$student->allergy_desc}}</label>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">
                                                    {{__('student.has any health problem?')}}
                                                </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">{{$student->has_health_problem}}</label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der"> {{__('student.student health problem')}}</label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">{{$student->health_problem_desc}}</label>
                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">
                                                    {{__('student.takes any medicine?')}}
                                                </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">{{$student->takes_medicine}}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col s_info_1">
                                                <label class=" mb-1 form-label p-der">
                                                    {{__('student.student medicines')}}
                                                </label>
                                            </div>
                                            <div class="col  s_info_1">
                                                <label class=" mb-1 title-3">{{$student->medicine_desc}}
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ==================================================== --}}
                        <label class="container-title col-12 mt-2 mb-3"> {{__('student.parent info')}} </label>
                        <div class="col-12 ">
                            {{-- col-lg-4 col-md-6 col-ms-12 mb-2 --}}
                            <div class=" row me-1 ms-1 ">
                                {{-- =====معلومات الأب ===== --}}
                                <div class=" col-lg-4 col-md-6 col-ms-12 mb-2">
                                    <div  class="cards_info_style h-100  mb-2  ">
                                        {{-- 1 --}}
                                        <div class="row mb-3 mt-2">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der"> {{__('student.father name')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3"> {{$student->parents->father_name}} </label>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="row mb-3 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der"> {{__('student.father work')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->father_work}}</label>
                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                        <div class="row mb-3 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der">{{__('student.father contact 1')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->father_contact1}}</label>
                                            </div>
                                        </div>
                                        {{-- 4 --}}
                                        <div class="row mb-3 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der">{{__('student.father contact 2')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->father_contact2}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات الأم ===== --}}
                                <div class=" col-lg-4 col-md-6 col-ms-12 mb-2">
                                    <div  class="cards_info_style h-100  mb-2  ">
                                        {{-- 1 --}}
                                        <div class="row mb-3 mt-2 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der"> {{__('student.mother name')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->mother_name}}</label>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="row mb-3 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der"> {{__('student.mother work')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3"> {{$student->parents->mother_work}}</label>
                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                        <div class="row mb-3 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der">{{__('student.mother contact 1')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->mother_contact1}}</label>
                                            </div>
                                        </div>
                                        {{-- 4 --}}
                                        <div class="row mb-3 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der">{{__('student.mother contact 2')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->mother_contact2}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات القريب ===== --}}
                                <div class=" col-lg-4 col-md-12 col-ms-12 mb-2">
                                    <div  class="cards_info_style h-100  mb-2  ">
                                        {{-- 1 --}}
                                        <div class="row mb-3 mt-2 ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der">{{__('student.kin name')}} </label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->kin_name}}</label>
                                            </div>
                                        </div>
                                        {{-- 2 --}}
                                        <div class="row mb-3  ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der">{{__('student.kin relationship')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->kin_relationship}} </label>
                                            </div>
                                        </div>
                                        {{-- 3 --}}
                                        <div class="row mb-3  ">
                                            <div class="col s_info_1 ">
                                                <label class=" mb-1 form-label p-1 p-der"> {{__('student.kin contact')}}</label>
                                            </div>
                                            <div class="col  s_info_1 ">
                                                <label class=" mb-1 title-3">{{$student->parents->kin_contact}}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- ==================================================== --}}
                        <label class="container-title col-12 mt-2 mb-3"> {{__('public.note')}} </label>
                        <div class="col-12 ">

                            <div class="cards_info_style me-1 ms-1 ">
                        {{-- =====معلومات اضافية ===== --}}
                                <div class=" row">
                                    {{-- 1 --}}
                                    <label class="col-12 form-label text-center ">{{__('public.note')}}</label>
                                        <div class="box col-lg-12 col-md-12 mt-3">
                                            <label class=" title-3">{{$student->note}}</label>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
        </section>

@endsection
