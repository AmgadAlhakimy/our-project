@extends('layouts.sidebar')
@section('content')
    <body>
    <main class="main ">
        <section class="section">
            <!-- <h2 class="p-relative title-1">اختر فصول المدرس</h2> -->
            <form action="{{route('class-teachers.store')}}" method="post">
                @csrf
                <h3 class="container-title">{{__('relationships.add classes for teacher')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">{{__('relationships.teacher')}}</label>
                                <select class="form-select form-control " id="level-class" name="teacher_id">
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
                                <label class="" for="level-class">{{__('relationships.classes')}}</label>
                            </div>
                            <div class="box ">
                                <div class="btn-container">
                                    <!-- <div class="btn-menu "> -->
                                    <div class="btn-l-container row">
                                        <!-- -------- start buttons  -->
                                        @foreach($classrooms as $classroom)
                                            <label class="btn-l-label col ">
                                                <input class="light-btn" type="checkbox" name="classroom_id[]"
                                                       value="{{$classroom->id}}" {{ old('classroom_id') && in_array($classroom->id, old('classroom_id')) ? 'checked' : '' }}>
                                                <span class="btn-l-text">{{$classroom->name}} </span>
                                            </label>
                                        @endforeach
                                        <!-- -------- end buttons  -->
                                    </div>
                                </div>
                                @error("classroom_id")
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                    <div class=" row">
                        <div class="box ">
                            <input class="save-button me-2 ms-2" type="submit" value="{{__('public.save')}}">
                            <input class="clear-button me-2 ms-2" type="reset" value="{{__('public.clear')}}">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    </body>
@endsection
