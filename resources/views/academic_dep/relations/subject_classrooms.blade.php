@extends('layouts.sidebar')
@section('content')
    <body>
    <main class="main ">
        <section class="section">
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form action="{{route('subject_classrooms.store')}}" method="post">
                @csrf
                <h3 class="container-title">{{__('relations.add subjects for classes')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 --> 
                            <div class="box col-12 ">
                                <label for="level-class">{{__('relations.classes')}}</label>
                                <select class="form-select form-control " id="level-class" name="classroom_id">
                                    @foreach($classrooms as $classroom)
                                        <option class="text-center"
                                                value="{{$classroom->id}}">{{$classroom->name}}</option>
                                    @endforeach
                                </select>
                                @error('classroom_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div>
                                <hr class=" ">
                            </div>
                            <!-- 2 -->
                            <div class="box mb-1">
                                <label class="" for="level-class">{{__('relations.subjects')}}</label>
                            </div>

                            <div class="box">
                                <div class="btn-container ">
                                    <!-- <div class="btn-menu "> -->
                                    <div class="btn-l-container  row">
                                        <!-- -------- start buttons  -->
                                            <?php $index = 0; ?>
                                        @foreach($subjects as $Subject)
                                            <label class="btn-l-label col ">
                                                <input class="light-btn" type="checkbox" name="subject_id[{{$index}}]"
                                                    value="{{$Subject->id}}">
                                                <span class="btn-l-text">{{$Subject->name}} </span>
                                            </label>
                                            <?php $index++; ?>
                                        @endforeach
                                        <!-- -------- end buttons  -->
                                        @error("subject_id.$index")
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                        </div>

                    </div>
                </div>
                <div class=" row">
                    <div class="box ">
                        <input class="save-button me-2 ms-2" type="submit" value="Save">
                        <input class="clear-button me-2 ms-2" type="reset" value="clear">
                    </div>
                </div>
            </form>
        </section>
    </main>
    </body>
@endsection
