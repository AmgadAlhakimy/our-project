@extends('layouts.sidebar')
@section('content')
<body>
    <main class="main ">
        <section class="section" >
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <<form action="{{route('activity_classroom.store')}}" method="post">
                @csrf
                <h3 class="container-title">{{__('relationships.add activities for classes')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">{{__('relationships.classes')}}</label>
                                <select class="form-select form-control " id="level-class" name="classroom_id">
                                    <option value="" selected disabled>
                                        {{__('classroom.please select a classroom')}}</option>
                                    @foreach($classrooms as $classroom)
                                        <option class="text-center" value="{{$classroom->id}}"
                                            {{ old('classroom_id') == $classroom->id ? 'selected' : '' }}>
                                            {{$classroom->name}}</option>
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
                                <label class="" for="level-class">{{__('relationships.activities')}}</label>
                            </div>
                            <div class="box ">
                                <div class="btn-container">
                                    <!-- <div class="btn-menu "> -->
                                    <div class="btn-l-container row">
                                        <!-- -------- start buttons  -->
                                        @foreach($activities as $activity)
                                            <label class="btn-l-label col ">
                                                <input class="light-btn" type="checkbox" name="activity_id[]"
                                                       value="{{$activity->id}}" {{ old('activity_id') && in_array($activity->id, old('activity_id')) ? 'checked' : '' }}>
                                                <span class="btn-l-text">{{$activity->name}} </span>
                                            </label>
                                        @endforeach
                                        <!-- -------- end buttons  -->
                                    </div>
                                </div>
                                @error("activity_id")
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
                </div>
            </form>
        </section>
    </main>
</body>
@endsection
