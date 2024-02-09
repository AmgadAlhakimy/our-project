@extends('layouts.sidebar')
@section('content')
    <body>
    <main class="main ">
        <section class="section">
            <form method="post" action="{{route('teacher_subjects.update',$teacher->id)}}">
                @csrf
                <h3 class="container-title"> {{__('relationships.add subjects for teachers')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="teacher"> {{__('relationships.teacher')}}</label>
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
                                                       value="{{$Subject->id}}" @if($Subject->id == $teacher_subjects->id) checked  @endif>
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
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button " type="submit" value="{{__('public.save')}}">
                        </div>
                        <div class="box  col">
                            <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
    </body>
@endsection
