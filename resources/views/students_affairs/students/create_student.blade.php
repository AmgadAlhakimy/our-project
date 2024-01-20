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
                <h3 class="container-title">{{__('student.student info')}}</h3>
                <div class="container containers-style ">
                    <div class="row">
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                for="arab-name">{{__("student.student's name in english")}}</label>
                            <input type="text" class="form-control " id='arab-name' name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                                for="english-name">{{__("student.student's name in arabic")}}</label>
                            <input type="text" class="form-control " id='english-name' name="name_ar" value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col">
                            <label class="" for="photo">{{__('student.photo')}}</label>
                            <input type="file" class="form-control " id="photo" name="photo" value="{{old('photo')}}">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="box row">
                            <label for="address">{{__('student.addresses')}}</label>
                            <div class="col-lg-6 col-md-6 ">
                                <span
                                    class=" text-center title-3 ">{{__("student.student's address in english")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address" value="{{old('address')}}">
                                @error('address')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <span class=" text-center title-3 ">{{__("student.student's address in arabic")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar" value="{{old('address_ar')}}">
                                @error('address_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="sex">{{__('student.sex')}}</label>
                            <select class="col form-select form-control" id="sex" name="sex" value="{{old('sex')}}">
                                <option class="text-center"
                                        value="{{__('student.male')}}">{{__('student.male')}}</option>
                                <option class="text-center"
                                        value="{{__('student.female')}}">{{__('student.female')}}</option>
                            </select>
                            @error('sex')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age" name="birthdate" value="{{old('birthdate')}}">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth" value="{{old('place_of_birth')}}">
                            @error('place_of_birth')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="english-birth-place">{{__('student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar" value="{{old('place_of_birth_ar')}}">
                            @error('place_of_birth_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box ">
                            <label for="className " class="form-label">{{__('student.class')}}</label>
                            <select id="className " class="form-control" name="class" value="{{old('class')}}">
                                @foreach($classes as $class)
                                    <option class="text-center" value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                            @error('class')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End personal info  -->

                <!-- Start parent info  -->
                <h3 class="container-title">{{__('student.parent info')}}</h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="father">{{__("student.father's name in english")}}</label>
                            <input type="text" class="form-control" id='father' name="father" value="{{old('father')}}">
                            @error('father')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror

                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="father_ar">{{__("student.father's name in arabic")}}</label>
                            <input type="text" class="form-control" id='father_ar' name="father_ar" value="{{old('father_ar')}}">
                            @error('father_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work">{{__("student.father's work in english")}}</label>
                            <input type="text" class="form-control" id='father_work' name="father_work" value="{{old('father_work')}}">
                            @error('father_work')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work_ar">{{__("student.father's work in arabic")}}</label>
                            <input type="text" class="form-control" id='father_work_ar' name="father_work_ar" value="{{old('father_work_ar')}}">
                            @error('father_work_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father contacts  -->
                        <div class="box ">
                            <label for="f-numbers">{{__("student.father's contacts")}}</label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='f-numbers' name="father_num_1" value="{{old('father_num_1')}}">
                                @error('father_num_1')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <input type="number" class="col form-control me-2 ms-2" id='f-numbers' name="father_num_2" value="{{old('father_num_2')}}">
                                @error('father_num_2')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- mother name  -->
                        <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-mother-name">{{__("student.mother's name in english")}}</label>
                            <input type="text" class="form-control" id='arab-mother-name' name="mother" value="{{old('mother')}}">
                            @error('mother')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="english-mother-name">{{__("student.mother's name in arabic")}}</label>
                            <input type="text" class="form-control" id='english-mother-name' name="mother_ar" value="{{old('mother_ar')}}">
                            @error('mother_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="arab-mother-work">{{__("student.mother's work in english")}}</label>
                            <input type="text" class="form-control" id='arab-mother-work' name="mother_work" value="{{old('mother_work')}}">
                            @error('mother_work')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="work">{{__("student.mother's work in arabic")}}</label>
                            <input type="text" class="form-control" id='work' name="mother_work_ar" value="{{old('mother_work_ar')}}">
                            @error('mother_work_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- mother contacts  -->
                        <div class="box ">
                            <label for="m-numbers">{{__("student.mother's contacts")}}</label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers' name="mother_num_1" value="{{old('mother_num_1')}}">
                                @error('mother_num_1')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers' name="mother_num_2" value="{{old('mother_num_2')}}">
                                @error('mother_num_2')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- garden name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-a">{{__('student.kin name in english')}}</label>
                            <input type="text" class="form-control" id='name-a' name="kin"  value="{{old('kin')}}">
                            @error('kin')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-e">{{__('student.kin name in arabic')}}</label>
                            <input type="text" class="form-control" id='name-e' name="kin_ar"  value="{{old('kin_ar')}}">
                            @error('kin_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- garden relationship -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-a">{{__('student.kin relationship in english')}}</label>
                            <input type="text" class="form-control" id='relation-a' name="kin_relationship" value="{{old('kin_relationship')}}">
                            @error('kin_relationship')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-e">{{__('student.kin relationship in arabic')}}</label>
                            <input type="text" class="form-control" id='relation-e' name="kin_relationship_ar" value="{{old('kin_relationship_ar')}}">
                            @error('kin_relationship_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- garden number  -->
                        <div class="box col">
                            <label for="number">{{__('student.kin contact')}}</label>
                            <input type="number" class="form-control" id='number' name="kin_contact" value="{{old('kin_contact')}}">
                            @error('kin_contact')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End parent info  -->
                <!-- Start health info  -->
                <h3 class="container-title">{{__('student.health info')}}</h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-2">{{__('student.does the student')}}</h4>
                            <label class="mt-3">{{__('student.take any medicine ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine" >{{__('student.no')}}</label>
                                    <input class="checkbox col" type="checkbox" name="take_medicine" id="takeMedicine" value="{{old('take_medicine')}}" checked>
                                    @error('take_medicine')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    <label class="form-label col ms-5" for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" name="medicine_desc" id="std_medicine_desc" class="form-control"
                                    aria-label="Text input with radio button" placeholder="desc in english">
                                @error('medicine_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror

                                <input type="text" name="medicine_desc_ar" id="std_medicine_desc" class="form-control" value="{{old('medicine_desc_ar')}}"
                                    aria-label="Text input with radio button" placeholder="desc in arabic">
                                @error('medicine_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <label class="mt-3">{{__('student.have an allergy ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine ">{{__('student.no')}}</label>

                                    <input class="checkbox col" checked type="checkbox" name="have_allergy" id="takeMedicine "  value="{{old('have_allergy')}}">
                                    @error('have_allergy')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    <label class="form-label col ms-5" for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" name="allergy_desc" id="std_medicine_desc" class="form-control" value="{{old('allergy_desc')}}"
                                    aria-label="Text input with radio button" placeholder="desc in english">
                                @error('allergy_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror

                                <input type="text" name="allergy_desc_ar" id="std_medicine_desc" class="form-control" value="{{old('allergy_desc_ar')}}"
                                    aria-label="Text input with radio button" placeholder="desc in arabic">
                                @error('allergy_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <label class="mt-3">{{__('student.have any health problem ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine ">{{__('student.no')}}</label>
                                    <input class="checkbox col" type="checkbox" name="have_health_problem" checked
                                        id="takeMedicine" value="{{old('have_health_problem')}}">
                                    @error('have_health_problem')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    <label class="form-label col ms-5" for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" name="health_problem_desc" id="std_medicine_desc"
                                    class="form-control" value="{{old('health_problem_desc')}}"
                                    aria-label="Text input with radio button" placeholder="desc in english">
                                @error('health_problem_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror

                                <input type="text" name="health_problem_desc_ar" id="std_medicine_desc"
                                    class="form-control" value="{{old('health_problem_desc_ar')}}"
                                    aria-label="Text input with radio button" placeholder="desc in arabic">
                                @error('health_problem_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
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
@endsection
