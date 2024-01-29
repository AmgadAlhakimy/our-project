@extends('layouts.sidebar')
@section('content')
    </header>
<main class="main ">
    <section class="section card-body">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{route('follow_up_students.store')}}">
            @csrf
            <input type="hidden" name="student_id" value="{{$student->id}}">
            <h1 data-text="" class="p-relative title-1">DAILY FOLLOW-UP NERSORY</h1>
            <!-- Start personal info  -->

            <div class="container containers-style mb-3   head-name">
                <div class="test-2  col-lg-8 col-md-8 col-sm-9 ">
                    <h1 class=" topic-name cardinfo  pt-3">{{$student->name}}</h1>
                    <h3 class=" topic-title cardinfo  pb-3">{{$student->classroom->name}}</h3>
                </div>
                <div class=" ">
                    <img class=" student-img " src="{{$student->photo}}" alt="">
                    <h3 class=" topic-name  row-center">{{$student->id}}</h3>
                </div>
            </div>
            <h3 class="container-title">HOMEWORK - ASSIGNMENT</h3>
{{--            <div data-repeater-list="list_comments">--}}
                <div class="container containers-style">
                </div>
                <div class="row">
                    <!-- 5 -->
                    <div class="box row">
                        <!-- 1 -->
                        @foreach($student->classroom->subjects as $subject)
                            <div class="col-lg-4 col-md-4 col-sm-4 ">
                                <input type="text" class="form-control ms-2 me-2" name="subject[]"
                                       value="{{$subject->name}}">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 ">
                                <input type="text" class=" form-control ms-2 me-2" name="comment[]">
                            </div>
                        @endforeach
                    </div>
                </div>

            <!-- End personal info  -->
            <!-- Start functional info  -->
            <h3 class="container-title">Food and bathroom</h3>
            <div class="container containers-style">
                <div class="row ">
                    <!-- 1 -->
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5  ">
                        <img class=" student-img h-100 w-50" src="../../../public/assets/icons/food-2.jpg" alt="">
                        <select class="col form-select form-control" id="t-qualificatiion">
                            <option value="">None</option>
                            <option value="">Some</option>
                            <option value="">All</option>
                        </select>
                    </div>
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5 ">
                        <img class=" student-img h-100 w-50" src="../../../public/assets/icons/food-1.jpg" alt="">
                        <select class="col form-select form-control" id="t-qualificatiion">
                            <option value="">None</option>
                            <option value="">Some</option>
                            <option value="">All</option>
                        </select>
                    </div>
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5">
                        <img class=" student-img h-100 w-50" src="../../../public/assets/icons/toilet.jpg" alt="">
                        <select class="col form-select form-control" id="t-qualificatiion">
                            <option value="">None</option>
                            <option value="">Some</option>
                            <option value="">All</option>
                        </select>
                    </div>
                    <!-- 3 -->
                </div>
            </div>
            <!-- End functional info  -->
            <!-- Start final box -->
            <h3 class="container-title">Add Info</h3>
            <div class="container containers-style">
                <div class="box row">
                    <div class="notes col-lg-12 col-md-12">
                        <label class="form-label " for="st_dNote">NOTE</label>
                        <textarea class="form-control" id="st_dNote" cols="50" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="box ">
                    <input class="save-button " type="submit" value="Save ">
                    <input class="clear-button " type="reset" value="clear">
                </div>
            </div>
            <!-- End final box -->
        </form>
</main>
@endsection




<!-- 5 -->
<!-- start permanence
<div class="box mb-0  col-12">
    <label class="col-12" for="t-permanence">permanence</label>
</div>
<div class="box  col-lg-6 col-md-6 col-sm-6">
    <label class="col " >FROM</label>
    <input type="time" class=" col- form-control  " id='t-permanence' placeholder="the end of time" >
</div>
<div class="box  col-lg-6 col-md-6 col-sm-6 ">
    <label class="col" >TO</label>
    <input type="time" class=" form-control  col-4" id='t-permanence' placeholder="the beginning of permanence ">
</div>
end permanence -->
