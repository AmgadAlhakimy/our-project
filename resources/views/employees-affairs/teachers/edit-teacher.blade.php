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
            <h3 class="container-title">{{('teacher.update teacher: ').$teacher->name}}</h3>
            <form method="post" action="{{route('teachers.update', $teacher->id)}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12  ">
                            <label for="teacher-name-a">{{__('teacher.teachers name in english')}}</label>
                            <input type="text" class="form-control " id='teacher-name-a' name="name"
                                   value="{{$teacher->getTranslation('name','en')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="teacher-name-e">{{__('teacher.teachers name in arabic')}}</label>
                            <input type="text" class="form-control " id='teacher-name-e' name="name_ar"
                                   value="{{$teacher->getTranslation('name','ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box row me-2 mb-3 col-lg-6 col-md-12 ">
                            <label class="" for="photo">{{__('change teacher photo')}}</label>
                            <input type="file" class="form-control col-8" id="photo" name="photo"
                                   value="{{$teacher->photo}}">
                            <img src="{{asset($teacher->photo)}}"
                                 class="student-img col-4" alt="no photo">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="gender">{{__('public.gender')}}</label>
                            <select class="col form-select form-control" id="gender" name="gender">
                                <option class="text-center"
                                        value="{{__('public.male')}}"
                                        @if($teacher->getTranslation('gender','en') == 'male') selected @endif>
                                    {{__('public.male')}}</option>
                                <option class="text-center"
                                        value="{{__('public.female')}}"
                                        @if($teacher->getTranslation('gender','en') == 'female') selected @endif>
                                    {{__('public.female')}}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 4 -->
                        <div class="box ">
                            <label for="t-numbers">{{__('teacher.contact')}}</label>
                            <div class="row">
                                <input type="number" class="col form-control ms-2 me-2" id='t-numbers'
                                       placeholder="only numbers" name="contact" value="{{$teacher->contact}}">
                                @error('contact')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="box row">
                            <label for="t-address">{{__('teacher.address in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                   name="address" value="{{$teacher->getTranslation('address','en')}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('teacher.address in arabic')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address_ar'
                                   name="address_ar" value="{{$teacher->getTranslation('address','ar')}}">
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
                                   value="{{$teacher->getTranslation('qualification','en')}}">
                            @error('qualification')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification_ar">{{__('teacher.qualification in arabic')}}</label>
                            <input type="text" class="form-control" id='t-qualification_ar' name="qualification_ar"
                                   value="{{$teacher->getTranslation('qualification','ar')}}">
                            @error('qualification_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->

                        <!-- 3 -->
                        <div class="box row">
                            <label for="t-address">{{__('teacher.major in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address' name="major"
                                   value="{{$teacher->getTranslation('major','en')}}">
                            @error('major')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('teacher.major in arabic')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                   name="major_ar" value="{{$teacher->getTranslation('major','ar')}}">
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
                                      rows="5">{{$teacher->note}}</textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button " type="submit" value="{{__('public.update')}}">
                        </div>
                        <div class="box  col">
                            <a href="{{route('display-teachers')}}" class="btn clear-button"><i
                                        class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                        </div>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
@endsection
