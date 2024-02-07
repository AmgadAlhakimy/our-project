@extends('layouts.sidebar')
@section('content')
<body>
    <main class="main ">
        <section class="section" >
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form method="post" action="{{route('teacher_subjects.store')}}">
                @csrf
                <h3 class="container-title">اضف المواد الخاصة بالمدرس</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->

                            <div class="box col-12 ">
                                <label for="level-class">the Teacher</label>
                                <select class="form-select form-control " id="teacher" name="teacher_id">
                                    @foreach($teachers as $teacher)
                                        <option class="text-center" value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <hr>
                            <!-- 2 -->
                                <div class="box mb-1">
                                    <label class="" for="level-class">choose the subjects please</label>
                                </div>

                                <div class="box ">
                                    <div class="btn-container ">
                                        <!-- <div class="btn-menu "> -->
                                        <div class="btn-l-container  row">
                                            <!-- -------- start buttons  -->
                                            {{$i=1}}
                                            @foreach($subjects as $Subject)
                                                <label class="btn-l-label col ">
                                                    <input class="light-btn" type="checkbox" name="subject_id[]"
                                                           value="{{$Subject->id}}" >
                                                    <span class="btn-l-text">{{$Subject->name}} </span>
                                                </label>
                                            @endforeach
                                            <!-- -------- end buttons  -->
                                        </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>



                    </div>
                </div>
                <div class=" row">
                    <div class="box ">
                        <input class="save-button " type="submit" value="Save " >
                        <input class="clear-button " type="reset" value="clear" >
                    </div>
                </div>
            </form>
            </section>
    </main>
</body>
@endsection
