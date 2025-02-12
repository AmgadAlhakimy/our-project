@extends('layouts.sidebar')
@section('content')
    <body>
    <main class="main ">
        <section class="section">
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form action="{{route('class-subjects.update',$classroom->id)}}" method="post">
                @method('PUT')
                @csrf
                <h3 class="container-title">{{__('relationships.add subjects for classes')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 title-3">
                                <label for="level-class">{{__('relationships.classes')}}</label>
                                {{$classroom->name}}
                                @error('classroom_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div>
                                <hr class=" ">
                            </div>
                            <!-- 2 -->
                            <div class="box mb-1">
                                <label class="" for="level-class">{{__('relationships.subjects')}}</label>
                            </div>
                            <div class="box ">
                                <div class="btn-container ">
                                    <!-- <div class="btn-menu "> -->
                                    <div class="btn-l-container  row">
                                        <!-- -------- start buttons  -->
                                        @foreach($subjects as $subject)
                                            <label class="btn-l-label col ">
                                                <input class="light-btn" type="checkbox"
                                                       name="subject_id[]" value="{{$subject->id}}"
                                                       @if(in_array($subject->id, $classroom_subjects))checked @endif>
                                                <span class="btn-l-text">{{$subject->name}} </span>
                                            </label>
                                        @endforeach
                                        <!-- -------- end buttons  -->
                                    </div>
                                </div>
                                @error("subject_id")
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class=" row">
                            <div class="box col ">
                                <input class="save-button" type="submit" value="{{__('public.update')}}">
                            </div>
                        @can('display subjects-classes')
                            <div class="box  col">
                                <a href="{{route('display-class-subjects')}}" class="btn clear-button"><i
                                        class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                            </div>
                        @endcan
                    </div>
                </div>
            </form>
        </section>
    </main>
    </body>
@endsection
