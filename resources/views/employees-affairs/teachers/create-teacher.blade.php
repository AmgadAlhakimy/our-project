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
            <h3 class="container-title">{{__('teacher.create a new teacher')}}</h3>
            <form method="post" action="{{route('teachers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12  ">
                            <label for="teacher-name-a">{{__('teacher.teacher name in english')}}</label>
                            <input type="text" class="form-control " id='teacher-name-a' name="name"
                                    value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="teacher-name-e">{{__('teacher.teacher name in arabic')}}</label>
                            <input type="text" class="form-control " id='teacher-name-e' name="name_ar"
                                value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="photo">{{__('teacher.photo')}}</label>
                            <input type="file" class="form-control"
                                id="photo" name="photo" value="{{old('photo')}}">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="gender">{{ __('public.gender') }}</label>
                            <select class="col form-select form-control" id="gender" name="gender">
                                <option value="" disabled {{ old('gender') ? '' : 'selected' }}>{{ __('public.please select the gender') }}</option>
                                <option value="{{ __('public.male') }}" {{ old('gender') == __('public.male') ? 'selected' : '' }}>{{ __('public.male') }}</option>
                                <option value="{{ __('public.female') }}" {{ old('gender') == __('public.female') ? 'selected' : '' }}>{{ __('public.female') }}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <!-- 4 -->
                        <div class="box ">
                            <label for="t-numbers">{{__('public.contact')}}</label>
                            <div class="row">
                                <input type="number" class="col form-control ms-2 me-2" id='t-numbers'
                                    name="contact" value="{{old('contact')}}">
                                @error('contact')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="box row">
                            <label for="t-address">{{__('public.address in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                name="address" value="{{old('address')}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('public.address in arabic')}}</label>
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
                <h3 class="container-title">{{__('teacher.functional data')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification">{{__('teacher.qualification in english')}}</label>
                            <input type="text" class="form-control" id='t-qualification' name="qualification"
                                    value="{{old('qualification')}}">
                            @error('qualification')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification_ar">{{__('teacher.qualification in arabic')}}</label>
                            <input type="text" class="form-control" id='t-qualification_ar' name="qualification_ar"
                                    value="{{old('qualification_ar')}}">
                            @error('qualification_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->

                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-salary">{{__('teacher.salary')}}</label>
                            <input type="number" class="form-control" id='t-salary' name="salary"
                                value="{{old('salary')}}">
                            @error('salary')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box row">
                            <label for="t-address">{{__('teacher.major in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address' name="major"
                                value="{{old('major')}}">
                            @error('major')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('teacher.major in arabic')}}</label>
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
                <h3 class="container-title">{{__('teacher.other info')}}</h3>
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
