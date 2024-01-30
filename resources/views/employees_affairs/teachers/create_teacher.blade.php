@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section ">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <!-- Start personal info  -->
            <h3 class="container-title">{{__('Teacher.teachers info')}}</h3>
            <form method="post" action="{{route('teachers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12  ">
                            <label for="teacher-name-a">{{__('Teacher.teachers name in english')}}</label>
                            <input type="text" class="form-control " id='teacher-name-a' name="name"
                                   placeholder="in english" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="teacher-name-e">{{__('Teacher.teachers name in arabic')}}</label>
                            <input type="text" class="form-control " id='teacher-name-e' name="name_ar"
                                   placeholder="in arabic" value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="photo">{{__('Teacher.photo')}}</label>
                            <input type="file" class="form-control"
                                   id="photo" name="photo" value="{{old('photo')}}">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="gender">{{__('public.gender')}}</label>
                            <select class="col form-select form-control" id="gender" name="gender">
                                <option  value="{{__('public.male')}}">{{__('public.male')}}</option>
                                <option value="{{__('public.female')}}">{{__('public.female')}}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 4 -->
                        <div class="box ">
                            <label for="t-numbers">{{__('Teacher.contact')}}</label>
                            <div class="row">
                                <input type="number" class="col form-control ms-2 me-2" id='t-numbers'
                                       placeholder="only numbers" name="contact" value="{{old('contact')}}">
                                @error('contact')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="box row">
                            <label for="t-address">{{__('Teacher.address in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                   name="address" value="{{old('address')}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('Teacher.address in arabic')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address_ar'
                                   name="address_ar" value="{{old('address_ar')}}">
                            @error('address_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End personal info  -->
                <!-- Start functional info  -->
                <h3 class="container-title">{{__('Teacher.functional data')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification">{{__('Teacher.qualification in english')}}</label>
                            <input type="text" class="form-control" id='t-qualification' name="qualification"
                                    value="{{old('qualification')}}">
                            @error('qualification')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification_ar">{{__('Teacher.qualification in arabic')}}</label>
                            <input type="text" class="form-control" id='t-qualification_ar' name="qualification_ar"
                                    value="{{old('qualification_ar')}}">
                            @error('qualification_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->

                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-salary">{{__('Teacher.salary')}}</label>
                            <input type="number" class="form-control" id='t-salary' name="salary"
                                   placeholder="in dollars $" value="{{old('salary')}}">
                            @error('salary')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box row">
                            <label for="t-address">{{__('Teacher.major in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address' name="major"
                                   value="{{old('major')}}">
                            @error('major')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('Teacher.major in arabic')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                   name="major_ar" value="{{old('major_ar')}}">
                            @error('major_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End functional info  -->
                <!-- Start final box -->
                <h3 class="container-title">{{__('Teacher.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="notes col-lg-12 col-md-12">
                            <label class="form-label" for="st_dNote">{{__('public.note')}}</label>
                            <textarea name="note" class="form-control" id="st_dNote" cols="50"
                                      rows="5">{{old('note')}}</textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button " type="submit" value="{{__('public.save')}}">
                        </div>
                        <div class="box  col">
                            <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                        </div>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
@endsection
