{{-- اضافة طالب جديد --}}
@extends('layouts.sidebar')
@section('content')
    <main class="main">
        <section class="section ">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form method="post" action="{{route('students.store')}}" enctype="multipart/form-data">
                @csrf
                <!-- Start personal info  -->
                <h3 class="container-title">{{__('create student')}}</h3>
                <div class="container containers-style ">
                    <div class="row">
                        {{-- 1 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                            for="english-name">{{__("student.student's name in arabic")}}</label>
                            <input type="text" class="form-control " id='english-name' name="name_ar" value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 2 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                for="arab-name">{{__("student.student's name in english")}}</label>
                            <input type="text" class="form-control " id='arab-name' name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}

                        <div class="box col">
                            <label class="" for="photo">{{__('student.photo')}}</label>
                            <input type="file" class="form-control " id="photo" name="photo" value="{{old('photo')}}">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 4 --}}
                        <div class="box row">
                            <div class="col-lg-6 col-md-6">
                                <label for="address">{{__("student.student's address in arabic")}}</label>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar" value="{{old('address_ar')}}">
                                @error('address_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- -- --}}
                            <div class="col-lg-6 col-md-6 ">
                                <label for="address">{{__("student.student's address in english")}}</label>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address" value="{{old('address')}}">
                                @error('address')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        {{-- 5 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="gender">{{__('student.gender')}}</label>
                            <select class="col form-select form-control" id="gender" name="gender" value="{{old('gender')}}">
                                <option class="text-center"
                                        value="{{__('student.male')}}">{{__('student.male')}}</option>
                                <option class="text-center"
                                        value="{{__('student.female')}}">{{__('student.female')}}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <input type="hidden" name="gender_ar_m" value="{{__('student.male_ar')}}">
                        <input type="hidden" name="gender_ar_f" value="{{__('student.female_ar')}}">
                        {{-- 6 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age" name="birthdate" value="{{old('birthdate')}}">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 7 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="english-birth-place">{{__('student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar" value="{{old('place_of_birth_ar')}}">
                            @error('place_of_birth_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth" value="{{old('place_of_birth')}}">
                            @error('place_of_birth')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box ">
                            <label for="className " class="form-label">{{__('student.class')}}</label>
                            <select id="className " class="form-control" name="class_id" value="{{old('class_id')}}">
                                @foreach($classes as $class)
                                    <option class="text-center" value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                            @error('class_id')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End personal info  -->

                {{-- <!-- Start parent info  --> --}}
                <h3 class="container-title">{{__('student.parent info')}}</h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box ">
                            <label for="father">{{__('student.parent info')}}</label>
                            <div class="w-100 mt-5">
                                <a href="{{route('relatives.create')}}" class=" save-button  w-full mt-3 p-3">{{__('student.parent info')}}</a>
                            </div>
                        </div>
                        <!-- garden number  -->
                    </div>
                </div>
                <!-- End parent info  -->
                <!-- Start health info  -->
                <h3 class="container-title ">{{__('student.health info')}}</h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-1 ">{{__('student.does the student')}}</h4>

                            {{-- 1 --}}
                            <label class="mt-4">{{__('student.take any medicine ?')}}</label>
                            {{-- ---- --}}
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" name="take_medicine" id="takeMedicineE" value="{{old('take_medicine')}}" onchange="toggleInput()">
                                    <label class="form-label col rounded" for="takeMedicineE" ></label>
                                </div>
                                {{-- -*- --}}
                                @error('take_medicine')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col " name="medicine_desc" id="std_medicine_desc_1"value="{{old('medicine_desc')}}"
                                    aria-label="Text input with radio button" placeholder="desc in english" hidden >
                                @error('medicine_desc')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc_ar" id="std_medicine_desc_2" value="{{old('medicine_desc_ar')}}"
                                    aria-label="Text input with radio button" placeholder="desc in arabic" hidden>
                                @error('medicine_desc_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            {{-- 2 --}}
                            {{-- -------------------------------- --}}
                            <label class="mt-4">{{__('student.have an allergy ?')}}</label>
                            {{-- ---- --}}
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" name="have_allergy" id="haveAllergy" value="{{old('have_allergy')}}" onchange="toggleInput()">

                                    <label class="form-label col rounded" for="haveAllergy" ></label>
                                </div>
                                {{-- -*- --}}
                                @error('have_allergy')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" name="allergy_desc" id="std_allergy_desc_1"
                                    aria-label="Text input with radio button" value="{{old('allergy_desc')}}" placeholder="desc in english" hidden>
                                @error('allergy_desc')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" name="allergy_desc_ar" id="std_allergy_desc_2" value="{{old('allergy_desc_ar')}}"
                                    aria-label="Text input with radio button" placeholder="desc in arabic" hidden>
                                @error('allergy_desc_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- 3 --}}
                            {{-- -------------------------------- --}}
                            <label class="mt-4">{{__('student.have any health problem ?')}}</label>
                            {{-- ---- --}}
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" name="have_health_problem"  id="healthProblem" value="{{old('have_health_problem')}}" onchange="toggleInput()" >
                                    <label class="form-label col rounded" for="healthProblem" id="healthProblem"></label>
                                </div>
                                {{-- -*- --}}
                                @error('have_health_problem')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" name="health_problem_desc" id="std_health_desc_1"
                                    aria-label="Text input with radio button" value="{{old('health_problem_desc')}}" placeholder="desc in english" hidden>
                                @error('health_problem_desc')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" name="health_problem_desc_ar" id="std_health_desc_2"
                                       value="{{old('health_problem_desc_ar')}}"
                                       aria-label="Text input with radio button" placeholder="desc in arabic" hidden>
                                @error('health_problem_desc_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- ----------------------------------- --}}
                        </div>
                    </div>
                </div>
                <!-- End health info  -->
                <!-- Start final box -->
                <h3 class="container-title">{{__('student.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note">{{__('student.note')}}</label>
                            <textarea name="note" class="form-control" id="std_Note" cols="50" rows="5">{{old('note')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="{{__('public.save')}}">
                    </div>
                    <div class="box  col">
                        <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
    <script>

    </script>
@endsection
