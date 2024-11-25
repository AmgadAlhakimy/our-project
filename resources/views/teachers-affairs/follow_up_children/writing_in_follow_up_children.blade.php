@extends('layouts.sidebar')
@section('content')
    <section class="section card-body">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{route('follow_up_children.storeAll',$classroom->id)}}">
            @method('GET')
            @csrf
            {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
            {{-- the table header with bottuns and search input --}}
            <h4 class="col container-title mt-2">{{__('follow_up.for all students')}}</h4>
            <div class="table-header container mt-2">

                {{-- the thacher name and the month --}}

                <div class="cards-container third-card row">
                    <div class="card-info card-info_2 col ">
                        <h4 class=" text-center">
                            {{$classroom->name}}
                        </h4>
                    </div>
                    <div class="card-info card-info_2 col ">
                        <h4 class=" Names">{{$month}}</h4>
                    </div>
                </div>
            </div>
            <!-- Start personal info  -->
            <h3 class="container-title mt-5">{{__('follow_up.homework')}}</h3>
            <div class="container  containers-style">
                <div class="row">
                    <!-- 5 -->
                    <div class="box row">
                        <label for="homework"></label>
                        <!-- 1 -->
                        <?php $index = 0; ?>
                        @foreach($classroom->subjects as $subject)
                            <div class="col-12 col-sm-4 col-lg-4 ">
                                <label class="form-control">{{$subject->name}}</label>
                            </div>
                            <div class="col-12 col-sm-8 col-lg-8">
                                <input type="text" id="homework" class="form-control"
                                       name="homework[{{$index}}]" value="{{ old("homework.$index") }}">
                                @error("homework.$index")
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                                <?php $index++; ?>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- End personal info  -->
            <!-- Start functional info  -->
            <h3 class="container-title">{{__('follow_up.food and bathroom')}}</h3>
            <div class="container containers-style">
                <div class="row mb-4">
                    <!-- 1 -->
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5  ">
                        <label for="bath"></label>
                        <img class=" student-img h-100 w-50" src="{{asset('assets/icons/toilet.jpg')}}" alt="">
                        <select class="col form-select form-control" id="bath" name="bath">
                            <option value="" selected disabled>{{__('follow_up.please select how many times')}}</option>
                            <option value="{{__('public.none')}}"  {{ old('bath') == 'public.none'  ? 'selected' : '' }}>
                                {{__('public.none')}}</option>
                            <option value="{{__('public.once')}}"  {{ old('bath') == 'public.once'  ? 'selected' : '' }}>
                                {{__('public.once')}}</option>
                            <option value="{{__('public.twice')}}" {{ old('bath') == 'public.twice' ? 'selected' : '' }}>
                                {{__('public.twice')}}</option>
                        </select>
                        @error('bath')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5 ">
                        <label for="snack"></label>
                        <img class=" student-img h-100 w-50" src="{{asset('assets/icons/food-1.jpg')}}" alt="">
                        <select class="col form-select form-control" id="snack" name="snack">
                            <option value="" selected disabled>{{__('follow_up.please select the quantity of snack')}}</option>
                            <option value="{{__('public.none')}}" {{ old('snack') == 'public.none'  ? 'selected' : '' }}>
                                {{__('public.none')}}</option>
                            <option value="{{__('public.some')}}" {{ old('snack') == 'public.some'  ? 'selected' : '' }}>
                                {{__('public.some')}}</option>
                            <option value="{{__('public.all')}}"  {{ old('snack') == 'public.all'   ? 'selected' : '' }}>
                                {{__('public.all')}}</option>
                        </select>
                        @error('snack')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5">
                        <label for="food"></label>
                        <img class=" student-img h-100 w-50" src="{{asset('assets/icons/food-2.jpg')}}" alt="">
                        <select class="col form-select form-control" id="food" name="food">
                            <option value="" selected
                                    disabled>{{__('follow_up.please select the quantity of food')}}</option>
                            <option value="{{__('public.none')}}" {{ old('food') == 'public.none'  ? 'selected' : '' }}>
                                {{__('public.none')}}</option>
                            <option value="{{__('public.some')}}" {{ old('food') == 'public.some'  ? 'selected' : '' }}>
                                {{__('public.some')}}</option>
                            <option value="{{__('public.all')}}"  {{ old('food') == 'public.all'   ? 'selected' : '' }}>
                                {{__('public.all')}}</option>
                        </select>
                        @error('food')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- 3 -->
                </div>
            </div>
            <!-- End functional info  -->
            <!-- Start final box -->
            <h3 class="container-title">{{__('student.more info')}}</h3>
            <div class="container containers-style">
                <h3 class="topic-title text-center">{{__('public.note')}}</h3>
                <label for="note"></label>
                <div class="box row">
                    <div class="notes col-lg-12 col-md-12">
                        <textarea class="form-control" name="note" id="note" cols="50" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class=" ">
                <div class="box ">
                    <input class="save-button me-2 ms-2 " type="submit" value="{{__('public.save')}}">
                    <input class="clear-button me-2 ms-2" type="reset" value="{{__('public.clear')}}">
                </div>
            </div>
            <!-- End final box -->
        </form>
    </section>
@endsection
