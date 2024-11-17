@extends('layouts.sidebar')
@section('content')
    <body>
    <main class="main ">
        <section class="section">
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form method="post" action="{{route('subject_teacher.store')}}">
                @csrf
                <h3 class="container-title"> {{__('relationships.add subjects for teachers')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="teacher"> {{__('relationships.teacher')}}</label>
                                <select class="form-select form-control " id="teacher" name="teacher_id">
                                    <option value="" selected disabled>
                                        {{__('teacher.please select a teacher')}}</option>
                                    @foreach($teachers as $teacher)
                                        <option class="text-center" value="{{$teacher->id}}"
                                            {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                                            {{$teacher->name}}</option>
                                    @endforeach
                                </select>
                                @error('teacher_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div>
                                <hr class=" ">
                            </div>
                            <!-- 2 -->
                            <div class="box mb-1">
                                <label class="" for="level-class"> {{__('relationships.subjects')}}</label>
                            </div>

                            <div class="box ">
                                <div class="btn-container ">
                                    <!-- <div class="btn-menu "> -->
                                    <div class="btn-l-container  row">
                                        <!-- -------- start buttons  -->
                                        @foreach($subjects as $Subject)
                                            <label class="btn-l-label col ">
                                                <input class="light-btn" type="checkbox" name="subject_id[]"
                                                       value="{{$Subject->id}}" {{ old('subject_id') && in_array($Subject->id, old('subject_id')) ? 'checked' : '' }}>
                                                <span class="btn-l-text">{{$Subject->name}} </span>
                                            </label>
                                        @endforeach
                                        <!-- -------- end buttons  -->
                                    </div>
                                </div>
                                @error("subject_id")
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- </div> -->
                        </div>


                    </div>
                </div>
                <div class=" row">
                    <div class="box ">
                        <input class="save-button me-2 ms-2" type="submit" value="{{__('public.save')}}">
                        <input class="clear-button me-2 ms-2" type="reset" value="{{__('public.clear')}}">
                    </div>
            </form>
        </section>
    </main>
    </body>
@endsection
