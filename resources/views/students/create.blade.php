@extends('layouts.master')
  @section('content')
    <main class="main">
        <section class="section " >
            <form action="">
            <h1 class="p-relative ">{{__('student.Register a new student')}}</h1>
            <!-- Start personal info  -->
            <h3 class="container-title">{{__('student.student info')}}</h3>
            <div class="container containers-style ">
                <div class="row">
                    <div class="box col-lg-6 col-md-12">
                        <label class="text-center" for="arab-name">{{__("student.student's name in english")}}</label>
                        <input type="text" class="form-control " id='arab-name' name="name">
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label class="  title-3 " for="english-name">{{__("student.student's name in arabic")}}</label>
                        <input type="text" class="form-control " id='english-name' name="name_ar">
                    </div>
                    <div class="box col">
                        <label class="" for="photo">{{__('student.photo')}}</label>
                        <input type="file" class="form-control " id="photo" name="photo">
                    </div>

                    <div class="box row">
                            <label for="address">{{__('student.addresses')}}</label>
                            <div class="col-lg-6 col-md-6 ">
                                <span class=" text-center title-3 ">{{__("student.student's address in english")}}</span>
                                <input type="text" class=" form-control ms-2 me-2"    id="address" name="address1">
                                <input type="text" class=" form-control me-2 ms-2"   id="address" name="address2">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <span class=" text-center title-3 ">{{__("student.student's address in arabic")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address1_ar">
                                <input type="text" class=" form-control me-2 ms-2" id='address'  name="address2_ar">
                            </div>
                    </div>
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="sex">{{__('student.sex')}}</label>
                            <select class="col form-select form-control" id="sex" name="sex">
                                <option class="text-center" value="{{__('student.male')}}">{{__('student.male')}}</option>
                                <option class="text-center" value="{{__('student.female')}}">{{__('student.female')}}</option>
                            </select>
                        </div>
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="sex">{{__('student.sex')}}</label>
                            <select class="col form-select form-control" id="sex" name="sex_ar">
                                <option class="text-center" value="{{__('student.male_ar')}}">{{__('student.male_ar')}}</option>
                                <option class="text-center" value="{{__('student.female_ar')}}">{{__('student.female_ar')}}</option>
                            </select>
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age" name="birthdate">
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth">
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="english-birth-place">{{__('student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar">
                        </div>
                        <div class="box ">
                            <label for="className " class="form-label">{{__('student.class')}}</label>
                            <select id="className " class="form-control" name="class">
                                @foreach($classes as $class)
                                    <option value="{{$class->id}}">
                                        {{$class->name}}
                                    </option>
                                @endforeach
                            </select>
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
                        <label for="arab-father">{{__("student.father's name in arabic")}}</label>
                        <input type="text" class="form-control" id='arab-father'>
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label for="english-father">{{__("student.father's name in english")}}</label>
                        <input type="text" class="form-control" id='english-father'>
                    </div>
                    <!-- father work  -->
                    <div class="box col-lg-6 col-md-6">
                        <label for="arab-work">{{__("student.father's work in arabic")}}</label>
                        <input type="text" class="form-control" id='arab-work'>
                    </div>
                    <div class="box col-lg-6 col-md-6">
                        <label for="work">{{__("student.father's work in english")}}</label>
                        <input type="text" class="form-control" id='work' >
                    </div>
                    <!-- father contacts  -->
                    <div class="box ">
                        <label for="f-numbers">{{__("student.father's contacts")}}</label>
                        <div class="row ">
                            <input type="number" class="col form-control ms-2 me-2" id='f-numbers'>
                            <input type="number" class="col form-control me-2 ms-2" id='f-numbers'>
                        </div>
                    </div>
                    <!-- mother name  -->
                    <!-- father name  -->
                    <div class="box col-lg-6 col-md-12">
                        <label for="arab-mother-name">{{__("student.mother's name in arabic")}}</label>
                        <input type="text" class="form-control" id='arab-mother-name'>
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label for="english-mother-name">{{__("student.mother's name in english")}}</label>
                        <input type="text" class="form-control" id='english-mother-name'>
                    </div>
                    <!-- father work  -->
                    <div class="box col-lg-6 col-md-6">
                        <label for="arab-mother-work">{{__("student.mother's work in arabic")}}</label>
                        <input type="text" class="form-control" id='arab-mother-work'>
                    </div>
                    <div class="box col-lg-6 col-md-6">
                        <label for="work">{{__("student.mother's work in english")}}</label>
                        <input type="text" class="form-control" id='work'>
                    </div>
                    <!-- mother contacts  -->
                    <div class="box ">
                        <label for="m-numbers">{{__("student.mother's contacts")}}</label>
                        <div class="row ">
                            <input type="number" class="col form-control ms-2 me-2" id='m-numbers' >
                            <input type="number" class="col form-control me-2 ms-2" id='m-numbers' >
                        </div>
                    </div>
                    <!-- garden name  -->
                    <div class="box col-lg-6 col-md-12">
                        <label for="name-a">{{__('student.next to kin name in arabic')}}</label>
                        <input type="text" class="form-control" id='name-a'>
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label for="name-e">{{__('student.next to kin name in english')}}</label>
                        <input type="text" class="form-control" id='name-e'>
                    </div>
                    <!-- garden relationship -->
                    <div class="box col-lg-6 col-md-6">
                        <label for="relation-a">{{__('student.next to kin relationship in arabic')}}</label>
                        <input type="text" class="form-control" id='relation-a'>
                    </div>
                    <div class="box col-lg-6 col-md-6">
                        <label for="relation-e">{{__('student.next to kin relationship in english')}}</label>
                        <input type="text" class="form-control" id='relation-e'>
                    </div>
                    <!-- garden number  -->
                    <div class="box col">
                        <label for="number">{{__('student.next to kin contact')}}</label>
                        <input type="number" class="form-control" id='number'>
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
                                    <label class="form-label col me-2" for="takeMedicine ">{{__('student.no')}}</label>
                                    <input class="checkbox col" type="checkbox" name="take_medicine" id="takeMedicine ">
                                    <label class="form-label col ms-5" for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" name="medicine_desc" id="std_medicine_desc" class="form-control"
                                        aria-label="Text input with radio button" placeholder="desc in english">

                                <input type="text" name="medicine_desc_ar" id="std_medicine_desc" class="form-control"
                                        aria-label="Text input with radio button" placeholder="desc in arabic">
                            </div>
                            <label class="mt-3">{{__('student.have an allergy ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine ">{{__('student.no')}}</label>
                                    <input class="checkbox col" type="checkbox" name="have_allergy" id="takeMedicine ">
                                    <label class="form-label col ms-5" for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" name="allergy_desc" id="std_medicine_desc" class="form-control"
                                        aria-label="Text input with radio button"  placeholder="desc in english">

                                <input type="text" name="allergy_desc_ar"  id="std_medicine_desc" class="form-control"
                                        aria-label="Text input with radio button"  placeholder="desc in arabic">
                            </div>
                            <label class="mt-3">{{__('student.have any health problem ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <div class="mt-3 col-lg-2 col-md-3">
                                    <label class="form-label col me-2" for="takeMedicine ">{{__('student.no')}}</label>
                                    <input class="checkbox col" type="checkbox" name="have_health_problem" id="takeMedicine">
                                    <label class="form-label col ms-5" for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" name="health_problem_desc" id="std_medicine_desc" class="form-control"
                                        aria-label="Text input with radio button"  placeholder="desc in english">

                                <input type="text" name="health_problem_desc_ar" id="std_medicine_desc" class="form-control"
                                        aria-label="Text input with radio button" placeholder="desc in arabic">
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
                          <textarea name="note" class="form-control" id="std_Note" cols="50" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="Save Student" >
                    </div>
                    <div class="box  col">
                        <input class="clear-button " type="reset" value="clear" >
                    </div>
                </div>
            <!-- End final box -->

        </form>
        </section>
    </main>
  @endsection
