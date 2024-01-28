@extends('layouts.sidebar')
@section('content')
<body>
    <main class="main ">
        <section class="section" >
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form action="{{route('class_activity.store')}}">
                @csrf
                <h3 class="container-title">اضف انشطة للفصول</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">the classes</label>
                                <select class="form-select form-control " id="level-class" name="class_id">
                                    @foreach($classses as $class)
                                        <option class="text-center" value="{{$class->id}}">{{$class->name}}</option>
                                    @endforeach
                                </select>
                                @error('class_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <hr>
                            <!-- 2 -->
                                <div class="box mb-1">
                                    <label class="" for="level-class">choose the activities please</label>
                                </div>
                                <div class="box ">
                                        <div class="btn-container ">
                                        <!-- <div class="btn-menu "> -->
                                        <div class="btnl-container  row">
                                            <!-- -------- start buttons  -->
                                            @foreach($activities as $Activity)
                                                <label class="btnl-lable col ">
                                                    <input class="light-btn" type="checkbox"
                                                           value="{{$Activity->id}}">
                                                    <span class="btnl-text">{{$Activity->name}}</span>
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
