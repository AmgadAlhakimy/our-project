{{--   واجهة معلومات الطالب كاملة --}}
@extends('layouts.sidebar')
@section('content')

    <main class="">
        <section class="section  ">
                <!-- Start personal info  -->
                {{-- <h3 class="container-title mb-5">واجهة معلومات طالب فقط</h3> --}}
                <div class="cards_container row">
                        {{-- 1 --}}
                        <div class="col-4 ">
                            {{-- بقي اصلاح مشكلة التناسق بالكروت مع بقية الاقسام --}}
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
                                            {{-- <label class="  cards_title"><i class="icon-1 fa-solid fab-phone-slash"></i>الرقم</label> --}}
{{--                                            <label class="  cards_sup_title">(777285021) (777285021)</label>--}}
                                        </div>
                                    </div>
                            </div>
                            <div class=" containers-style cards_info_style">
                                <div class="text-center row">
                                    <label class="  cards_sup_title col-12 big_font">8</label>
                                    <label class="  cards_title col-12"> الغياب</label>
                                </div>
                            </div>
                        </div>
                        {{-- ==================================================== --}}
                        {{-- 2 --}}
                        <div class=" containers-style cards_info_style col ">
                            <label class="box container-title col-12 ">المعلومات الشخصية</label>
                            {{-- 1 --}}
                            <div class="row mb-3">
                                <div class="col s_info_1">
                                    <label class=" mb-1 cards_title">النوع</label>
                                </div>
                                <div class="col  s_info_1">
                                    <label class=" mb-1 cards_sup_title"> {{$student->gender}} </label>
                                </div>
                            </div>
                            {{-- 2 --}}
                            <div class="row mb-3">
                                <div class="col s_info_1">
                                    <label class=" mb-1 cards_title">تاريخ الميلاد</label>
                                </div>
                                <div class="col  s_info_1">
                                    <label class=" mb-1 cards_sup_title"> {{$student->birthdate}} </label>
                                </div>
                            </div>
                            {{-- 3 --}}
                            <div class="row mb-3">
                                <div class="col s_info_1">
                                    <label class=" mb-1 cards_title">العنوان </label>
                                </div>
                                <div class="col  s_info_1">
                                    <label class=" mb-1 cards_sup_title"> {{$student->address}} </label>
                                </div>
                            </div>
                            {{-- 4 --}}
                            <div class="row mb-3">
                                <div class="col s_info_1">
                                    <label class=" mb-1 cards_title">مكان الميلاد </label>
                                </div>
                                <div class="col  s_info_1">
                                    <label class=" mb-1 cards_sup_title"> {{$student->place_of_birth}} </label>
                                </div>
                            </div>
                            {{-- 5 --}}
                            <div class="row mb-3">
                                <div class="col s_info_1">
                                    <label class=" mb-1 cards_title">الصف  </label>
                                </div>
                                <div class="col  s_info_1">
                                    <label class=" mb-1 cards_sup_title"> {{$student->class->name}} </label>
                                </div>
                            </div>
                            {{-- 6 --}}
                            <div class="row mb-3">
                                <div class="col s_info_1">
                                    <label class=" mb-1 cards_title">المرحلة الدراسية</label>
                                </div>
                                <div class="col  s_info_1">
                                    <label class=" mb-1 cards_sup_title"> {{$student->class->level->name}} </label>
                                </div>
                            </div>
                        </div>
                        {{-- ==================================================== --}}
                        <div class=" containers-style cards_info_style ">
                            <label class="box container-title col-12 ">معلومات الآباء </label>
                            <div class="row mb-5">
                                {{-- =====معلومات الأب ===== --}}
                                <div class="col cards_info_style me-3 ms-3 mb-3 ">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">اسم الأب</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"> {{$student->relative->father_name}} </label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">عمل الأب</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->father_work}}</label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">رقم الأب 1</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->father_contact1}}</label>
                                        </div>
                                    </div>
                                    {{-- 4 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">رقم الأب 2</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->father_contact2}}</label>
                                        </div>
                                    </div>
                                </div>
                                {{-- =====معلومات الأم ===== --}}
                                <div class="col cards_info_style me-3 ms-3 mb-3 ">
                                    {{-- 1 --}}
                                    <div class="row mb-3 mt-2 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">اسم الأم</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->mother_name}}</label>
                                        </div>
                                    </div>
                                    {{-- 2 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">عمل الام</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"> {{$student->relative->mother_work}}</label>
                                        </div>
                                    </div>
                                    {{-- 3 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">رقم الام 1</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->mother_contact1}}</label>
                                        </div>
                                    </div>
                                    {{-- 4 --}}
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title">رقم الأم 2</label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title">{{$student->relative->mother_contact2}}</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            {{-- =====معلومات القريب ===== --}}
                            <div class="col cards_info_style me-3 ms-3 mb-3 ">
                                {{-- 1 --}}
                                <div class="row mb-3 mt-2 ms-1 me-1">
                                    <div class="col s_info_1 ">
                                        <label class=" mb-1 cards_title">اسم القريب</label>
                                    </div>
                                    <div class="col  s_info_1 ">
                                        <label class=" mb-1 cards_sup_title">{{$student->relative->kin_name}}</label>
                                    </div>
                                </div>
                                {{-- 2 --}}
                                <div class="row mb-3 ms-1 me-1 ">
                                    <div class="col s_info_1 ">
                                        <label class=" mb-1 cards_title">علاقتة بالطالب </label>
                                    </div>
                                    <div class="col  s_info_1 ">
                                        <label class=" mb-1 cards_sup_title">{{$student->relative->kin_relationship}} </label>
                                    </div>
                                </div>
                                {{-- 3 --}}
                                <div class="row mb-3 ms-1 me-1 ">
                                    <div class="col s_info_1 ">
                                        <label class=" mb-1 cards_title">رقم القريب</label>
                                    </div>
                                    <div class="col  s_info_1 ">
                                        <label class=" mb-1 cards_sup_title">{{$student->relative->kin_contact}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Start final box -->
                        <div class=" containers-style cards_info_style">
                            <h3 class="container-title">معلومات اضافية عن الطالب </h3>
                            <div class="row">
                                <div class="box col-lg-12 col-md-12">
                                    <label class=" mb-2 mt-2 cards_title">{{$student->note}}</label>
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
    <script>

    </script>
@endsection
