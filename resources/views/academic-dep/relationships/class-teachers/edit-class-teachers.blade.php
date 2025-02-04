@extends('layouts.sidebar')
@section('content')
    <body>
    <main class="main ">
        <section class="section">
            <!-- <h2 class="p-relative title-1">اختر فصول المدرس</h2> -->
            <form action="{{route('class-teachers.update',$teacher->id)}}" method="post">
                @method('PUT')
                @csrf
                <h3 class="container-title">{{__('relationships.add classes for teacher')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 title-3">
                                <label for="level-class">{{__('relationships.teacher')}}</label>
                                {{$teacher->name}}
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
                                                <input class="light-btn" type="checkbox"
                                                       name="classroom_id[]" value="{{$classroom->id}}"
                                                       @if(in_array($classroom->id, $teacher_classrooms))checked @endif>
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

                    <div class="row">
                        <div class="box">
                            @can('update teachers-classes')
                                <input class="save-button" type="submit" value="{{__('public.update')}}">
                            @endcan
                            @can('display teachers-classes')
                                <a href="{{route('display-class-teachers')}}" class="btn clear-button">
                                    <i class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    </body>
@endsection
