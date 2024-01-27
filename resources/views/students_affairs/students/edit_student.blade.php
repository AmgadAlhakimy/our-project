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
                <h3 class="container-title">{{__('student.update student: ').$student->name}}</h3>
                <form method="post" action="{{route('students.update', $student->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <!-- Start personal info  -->
                <h3 class="container-title">{{__('student.student info')}}</h3>
                <div class="container containers-style ">
                    <div class="row">
                        {{-- 1 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                            for="english-name">{{__("student.student's name in arabic")}}</label>
                            <input type="text" class="form-control " id='english-name' name="name_ar" value="{{$student->getTranslation('name','ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 2 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                for="arab-name">{{__("student.student's name in english")}}</label>
                            <input type="text" class="form-control " id='arab-name' name="name"  value="{{$student->getTranslation('name','en')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}
                        <div class="box row me-2 mb-3 col-lg-6 col-md-12 ">
                            <label class="" for="photo">{{__('change students photo')}}</label>
                            <input type="file" class="form-control col-8" id="photo" name="photo" value="{{$student->photo}}">
                            <img src="{{asset($student->photo)}}"
                                 class="student-img col-4" alt="no photo">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="address">{{__('student.addresses')}}</label>
                            <div class="col-lg-6 col-md-6">
                                <span class=" text-center title-3 ">{{__("student.student's address in arabic")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id='address' name="address_ar"  value="{{$student->getTranslation('address','ar')}}">
                                @error('address_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- -- --}}
                            <div class="col-lg-6 col-md-6 ">
                                <span
                                    class=" text-center title-3 ">{{__("student.student's address in english")}}</span>
                                <input type="text" class=" form-control ms-2 me-2" id="address" name="address"  value="{{$student->getTranslation('address','en')}}">
                                @error('address')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        {{-- 5 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="gender">{{__('student.gender')}}</label>
                            <select class="col form-select form-control" id="gender" name="gender">
                                <option class="text-center"
                                        value="{{__('student.male')}}" @if($student->getTranslation('gender','en') == 'male') selected @endif>
                                    {{__('student.male')}}</option>
                                <option class="text-center"
                                        value="{{__('student.female')}}"  @if($student->getTranslation('gender','en') == 'female') selected @endif>
                                    {{__('student.female')}}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 6 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age" name="birthdate" value="{{$student->birthdate}}">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 7 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="english-birth-place">{{__('student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place" name="place_of_birth_ar"
                                   value="{{$student->getTranslation('place_of_birth','ar')}}">
                            @error('place_of_birth_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place" name="place_of_birth"
                                   value="{{$student->getTranslation('place_of_birth','en')}}">
                            @error('place_of_birth')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box ">
                            <label for="className " class="form-label">{{__('student.class')}}</label>
                            <select id="className " class="form-control" name="class_id">
                                @foreach($classes as $class)
                                    <option class="text-center" value="{{$class->id}}"
                                    @if($class->id == $student->class_id) selected @endif>
                                        {{$class->name}}</option>
                                @endforeach
                            </select>
                            @error('class_id')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                            <input type="text" value="{{$student->relative->id}}" name="relative_id">
                        </div>

                    </div>
                </div>
                <!-- End personal info  -->

                <!-- Start health info  -->
                <h3 class="container-title">{{__('student.health info')}}</h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-2">{{__('student.does the student')}}</h4>
                            <label class="mt-3">{{__('student.take any medicine ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <input type="text" name="medicine_desc" id="std_medicine_desc" class="form-control"
                                    aria-label="Text input with radio button"  value="{{$student->getTranslation('medicine_desc','en')}}">
                                @error('medicine_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror

                                <input type="text" name="medicine_desc_ar" id="std_medicine_desc" class="form-control" value="{{$student->getTranslation('medicine_desc','ar')}}"
                                    aria-label="Text input with radio button">
                                @error('medicine_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <label class="mt-3">{{__('student.have an allergy ?')}}</label>
                            <div class="input-group mt-2 mb-2">
                                <input type="text" name="allergy_desc" id="std_medicine_desc" class="form-control" value="{{$student->getTranslation('allergy_desc','en')}}"
                                    aria-label="Text input with radio button" >
                                @error('allergy_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror

                                <input type="text" name="allergy_desc_ar" id="std_medicine_desc" class="form-control" value="{{$student->getTranslation('allergy_desc','ar')}}"
                                    aria-label="Text input with radio button" >
                                @error('allergy_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <label class="mt-3">{{__('student.have any health problem ?')}}</label>
                            <div class="input-group mt-2 mb-2">

                                <input type="text" name="health_problem_desc" id="std_medicine_desc"
                                    class="form-control" value="{{$student->getTranslation('health_problem_desc','en')}}"
                                    aria-label="Text input with radio button" >
                                @error('health_problem_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror

                                <input type="text" name="health_problem_desc_ar" id="std_medicine_desc"
                                    class="form-control" value="{{$student->getTranslation('health_problem_desc','ar')}}"
                                    aria-label="Text input with radio button">
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
                            <textarea name="note" class="form-control" id="std_Note" cols="50" rows="5">{{$student->note}}</textarea>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="{{__('public.update')}}">
                    </div>
                    <div class="box  col">
                        <a href="{{route('students.index')}}" class="btn clear-button"><i
                                class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
    <script>

    </script>
@endsection
