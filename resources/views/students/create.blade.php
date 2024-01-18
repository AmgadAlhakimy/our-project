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
            <form method="post" action="{{route('students.store')}}">
                @csrf
                <!-- Start personal info  -->
                <h3 class="container-title">{{__('student.student info')}}</h3>
                <div class="container containers-style ">
                    <div class="row">
                        {{-- 1 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                            for="english-name">{{__("student.student's name in arabic")}}</label>
                            <input type="text" class="form-control " id='english-name' name="name_ar">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 2 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                for="arab-name">{{__("student.student's name in english")}}</label>
                            <input type="text" class="form-control " id='arab-name' name="name">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}
                        <div class="box col">
                            <label class="" for="photo">{{__('student.photo')}}</label>
                            <input type="file" class="form-control " id="photo" name="photo">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 4 --}}
                        <div class="box row">
                            <label for="address">{{__('student.addresses')}}</label>
                            <div class="col-lg-6 col-md-6">
                                <span class=" text-center title-3 ">{{__("student.student's address in arabic")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar">
                                @error('address_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- -- --}}
                            <div class="col-lg-6 col-md-6 ">
                                <span
                                    class=" text-center title-3 ">{{__("student.student's address in english")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address">
                                @error('address')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        {{-- 5 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="sex">{{__('student.sex')}}</label>
                            <select class="col form-select form-control" id="sex" name="sex">
                                <option class="text-center"
                                        value="{{__('student.male')}}">{{__('student.male')}}</option>
                                <option class="text-center"
                                        value="{{__('student.female')}}">{{__('student.female')}}</option>
                            </select>
                            @error('sex')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 6 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age" name="birthdate">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 7 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="english-birth-place">{{__('student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar">
                            @error('place_of_birth_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth">
                            @error('place_of_birth')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box ">
                            <label for="className " class="form-label">{{__('student.class')}}</label>
                            <select id="className " class="form-control" name="class">
                                {{-- @foreach($classes as $class)
                                    <option value="{{$class->id}}">
                                        {{$class->name}}
                                    </option>
                                @endforeach --}}
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
                            <input type="text" class="form-control" id='work'>
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
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-mother-name">{{__("student.mother's name in arabic")}}</label>
                            <input type="text" class="form-control" id='arab-mother-name'>
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="english-mother-name">{{__("student.mother's name in english")}}</label>
                            <input type="text" class="form-control" id='english-mother-name'>
                        </div>
                        <!-- mother work  -->
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
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers'>
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers'>
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
                            <label class="mt-4">{{__('student.take any medicine ?')}}</label>
                            {{-- 1 --}}
                            {{-- <div class=" "> --}}                                
                                <div class="row ">
                                    <div class="col-lg-1 col-md-2 col-ms-1 mt-3 ">
                                        <input class=" col" type="checkbox" name="take_medicine" id="myCheckbox" onchange="toggleInput()">
                                        <label class="form-label col " for="takeMedicine">{{__('student.yes')}}</label>
                                    </div>
                                    <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc" id=" myInput" 
                                        placeholder="desc in english" >
    
                                    <input type="text" class=" form-control ms-3 me-3 col" name="medicine_desc_ar" id=" myInput" 
                                        placeholder="desc in arabic"  >
                                </div>
                            {{-- </div> --}}
                            {{-- 2 --}}
                            <label class="mt-4">{{__('student.have an allergy ?')}}</label>
                            {{--  --}}
                            <div class="row ">
                                <div class="col-lg-1 col-md-2 col-ms-1 mt-3 ">
                                    <input class=" col" type="checkbox" name="take_medicine" id="myCheckbox" onchange="toggleInput()">
                                    <label class="form-label col " for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc" id=" myInput" 
                                    placeholder="desc in english" >

                                <input type="text" class=" form-control ms-3 me-3 col" name="medicine_desc_ar" id=" myInput" 
                                    placeholder="desc in arabic"  >
                            </div>
                            {{-- 3 --}}
                            <label class="mt-4">{{__('student.have any health problem ?')}}</label>
                            {{--  --}}
                            <div class="row ">
                                <div class="col-lg-1 col-md-2 col-ms-1 mt-3 ">
                                    <input class=" col" type="checkbox" name="take_medicine" id="myCheckbox" onchange="toggleInput()">
                                    <label class="form-label col " for="takeMedicine">{{__('student.yes')}}</label>
                                </div>
                                <input type="text" class=" form-control ms-1 me-1 col" name="medicine_desc" id=" myInput" 
                                    placeholder="desc in english" >

                                <input type="text" class=" form-control ms-3 me-3 col" name="medicine_desc_ar" id=" myInput" 
                                    placeholder="desc in arabic"  >
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
