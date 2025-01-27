@extends('layouts.sidebar')
@section('content')
    <section class="section card-body">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{route('follow_up_children.updateChild',
                                    ['child_id' => $child->id, 'classroom_id' => $classroom->id])}}">
            @method('HEAD')
            @csrf
            {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
            {{-- the table header with bottuns and search input --}}
            <div class="table-header container mt-2">
                {{-- the title and search --}}
                <div class="row first-card text-center">
                    <div class="col ">
                        <img class="cards_img" src="{{$child->student->photo}}" alt="skills"/>
                    </div>
                    <div class="center_y_x col">
                        <div class=" text-center ">
                            <div class="cards_title">{{$child->student->name}}</div>
                            <div class="cards_sup_title">{{$child->student->id}}</div>
                        </div>
                    </div>
                </div>
                {{-- the thacher name and the month --}}
                <hr class=" ms-2 me-2 shadow">

                <div class="cards-container mt-4 third-card row">
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
                        @foreach($subjects_homework as $subject => $homework)
                            <div class="col-12 col-sm-4 col-lg-4">
                                <label class="form-control ">{{$subject}}</label>
                            </div>
                            <div class="col-12 col-sm-8 col-lg-8">
                                <input type="text" id="homework" class="form-control "
                                       name="homework[{{$index}}]" value="{{$homework}}">
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
                            <option value="{{__('public.none')}}"
                                    @if($child->getTranslation('bath','en') == 'none') selected @endif>
                                {{__('public.none')}}</option>
                            <option value="{{__('public.once')}}"
                                    @if($child->getTranslation('bath','en') == 'once') selected @endif>
                                {{__('public.once')}}</option>
                            <option value="{{__('public.twice')}}"
                                    @if($child->getTranslation('bath','en') == 'twice') selected @endif>
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
                            <option value="{{__('public.none')}}"
                                    @if($child->getTranslation('snack','en') == 'none') selected @endif>
                                {{__('public.none')}}</option>
                            <option value="{{__('public.some')}}"
                                    @if($child->getTranslation('snack','en') == 'some') selected @endif>
                                {{__('public.some')}}</option>
                            <option value="{{__('public.all')}}"
                                    @if($child->getTranslation('snack','en') == 'all') selected @endif>
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
                            <option value="{{__('public.none')}}"
                                    @if($child->getTranslation('food','en') == 'none') selected @endif>
                                {{__('public.none')}}</option>
                            <option value="{{__('public.some')}}"
                                    @if($child->getTranslation('food','en') == 'some') selected @endif>
                                {{__('public.some')}}</option>
                            <option value="{{__('public.all')}}"
                                    @if($child->getTranslation('food','en') == 'all') selected @endif>
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
                        <textarea class="form-control" name="note" id="note" cols="50"
                            rows="5">{{$child->note}}</textarea>
                    </div>
                </div>
            </div>
            <div class=" ">
                <div class="box">
                    <input class="save-button " type="submit" value="{{__('public.update')}}">

                    <a href="{{route('follow_up_children-display',$classroom->id)}}" class="btn clear-button"><i
                        class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                </div>
            </div>
            <!-- End final box -->
        </form>
    </section>
@endsection
