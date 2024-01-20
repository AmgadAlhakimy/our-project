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

                {{-- <!-- Start parent info  --> --}}
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
                        <!-- mother work  -->
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
                            <input type="number" class="form-control mb-5" id='number' name="kin_contact" value="{{old('kin_contact')}}">
                            @error('kin_contact')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- --- --}}
                
                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="{{__('public.save')}}">
                    </div>
                    <div class="box  col">
                        <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                    </div>
                </div>
                {{-- --- --}}
                <!-- End parent info  -->
            </form>
        </section>
    </main>
    <script>

    </script>
@endsection



