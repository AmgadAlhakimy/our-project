@extends('layouts.sidebar')
@section('content')
    <section class="section card-body">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" 
        {{-- action="{{route('follow_up_children.storeAll',$classroom->id)}}" --}}
        >
            @method('GET')
            @csrf
                        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
            {{-- the table header with bottuns and search input --}}
                <div class="table-header container mt-2">
                    {{-- the title and search --}}
                    <div class="row first-card  ">
                        <h4 class="col container-title mt-2">{{__('follow_up.for all students')}}</h4>
                        <div class="row first-card mt-4">
                            <form method="post" action="">
                                @method('GET')
                                @csrf
                                <div class="row ">
                                    <label class="col-9">
                                        <input type="text" required class="form-control"
                                            name="search" value="{{isset($search) ? $search : ''}}">
                                    </label>
                                    <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    {{-- the thacher name and the month --}}
    
                    <div class="cards-container mt-4 third-card row">
                        <div class="card-info card-info_2 col ">
                            <h4 class=" text-center">
                                {{-- {{$classroom->name}} --}}
                            </h4>
                            <h4 class=" Names"> قرآن</h4>
                        </div>
                        <div class="card-info card-info_2 col ">
                            <h4 class="text-center ">{{__('الشهر')}}</h4>
                            <h4 class=" Names"> 12
                                {{-- {{$month}} --}}
                            </h4>
                        </div>
                    </div>
                    {{-- the select input --}}
                </div>
            {{-- <h1 data-text="" class="p-relative title-1">DAILY FOLLOW-UP NERSORY</h1> --}}
            <!-- Start personal info  -->
            <h3 class="container-title">{{__('follow_up.homework assignment')}}</h3>
                <div class="container  containers-style">
                    <div class="row">
                        <!-- 5 -->
                        <div class="box row">
                            <!-- 1 -->
                            @foreach($classroom->subjects as $subject)
                                <div class="col-lg-4 col-md-4 col-sm-4 ">
                                    <label>{{$subject->name}}</label>

                            {{-- @foreach($classroom->subjects as $subject) --}}
                                <div class="col-lg-4 col-md-4 col-sm-4 " >
                                    <select name="subject[]" class="form-control" id="sub_select" size="1">
                                    {{-- <option value="{{$subject->id}}" >{{$subject->name}}</option> --}}
                                    @error('subject')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    </select>
                                    
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 ">
                                    <input type="text" class=" form-control ms-2 me-2" name="comment[]">
                                    @error('comment')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                
                            @endforeach

                            {{-- @endforeach --}}\
                            
                        </div>
                    </div>
                </div>

            <!-- End personal info  -->
            <!-- Start functional info  -->
            <h3 class="container-title">{{__('follow_up.food and bathroom')}}</h3>
            <div class="container containers-style">
                <div class="row ">
                    <!-- 1 -->
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5  ">
                        <img class=" student-img h-100 w-50" src="{{asset('assets/icons/toilet.jpg')}}" alt="">
                        <select class="col form-select form-control" name="bath">
                            <option value="{{__('public.none')}}">{{__('public.none')}}</option>
                            <option value="{{__('public.some')}}">{{__('public.one')}}</option>
                            <option value="{{__('public.all')}}">{{__('public.tow')}}</option>
                        </select>
                        @error('bath')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5 ">
                        <img class=" student-img h-100 w-50" src="{{asset('assets/icons/food-1.jpg')}}" alt="">
                        <select class="col form-select form-control" name="snack">
                            <option value="{{__('public.none')}}">{{__('public.none')}}</option>
                            <option value="{{__('public.some')}}">{{__('public.some')}}</option>
                            <option value="{{__('public.all')}}">{{__('public.all')}}</option>
                        </select>
                        @error('snack')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-4 col-md-4 col-ms-12 mb-5">
                        <img class=" student-img h-100 w-50" src="{{asset('assets/icons/food-2.jpg')}}" alt="">
                        <select class="col form-select form-control" name="food">
                            <option value="{{__('public.none')}}">{{__('public.none')}}</option>
                            <option value="{{__('public.some')}}">{{__('public.some')}}</option>
                            <option value="{{__('public.all')}}">{{__('public.all')}}</option>
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
            <h3 class="container-title">{{__('follow_up.add info')}}</h3>
            <div class="container containers-style">
                <div class="box row">
                    <div class="notes col-lg-12 col-md-12">
                        <label class="form-label " for="st_dNote">{{__('follow_up.note')}}</label>
                        <textarea class="form-control" name="note" cols="50" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class=" row">
                <div class="box ">
                    <input class="save-button " type="submit" value="Save">
                    <input class="clear-button " type="reset" value="clear">
                </div>
            </div>
            <!-- End final box -->
        </form>
</section>
@endsection
