{{-- اضافة نشاط جديد --}}
{{-- @extends('layouts.master') --}}
@extends('layouts.sidebar')
@section('content')
    <main class="main">
        <section class="section">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form action="{{route('activities.store')}}" method="post">
                @csrf
                <h3 class="container-title">{{__('Activity.Activity info')}}</h3>
                <div class="container  containers-style ">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label class="form-text"
                                   for="activity-name-e">{{__('Activity.Activity name in arabic')}}</label>
                            <input type="text" class="form-control" id='activity-name-e'
                                   name="name_ar" value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- ************** --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="form-text"
                                   for="activity-name-a">{{__('Activity.Activity name in english')}} </label>
                            <input type="text" class="form-control" id='activity-name-a'
                                   name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12">
                            <label class="form-text"
                                   for="area-name-e">{{__('Activity.Activity location in arabic')}}</label>
                            <input type="text" class="form-control " id='area-name-e' name="location_ar"
                                   value="{{old('location_ar')}}">
                            @error('location_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- *************** --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="form-text"
                                   for="area-name-a">{{__('Activity.Activity location in english')}}</label>
                            <input type="text" class="form-control " id='area-name-a' name="location"
                                   value="{{old('location')}}">
                            @error('location')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label class="form-text"
                                   for="area-number">{{__('Activity.Activity location contact')}}</label>
                            <input type="number" class="form-control " id='area-number' name="contact"
                                   value="{{old('contact')}}">
                            @error('contact')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 4 -->
                        <div class="box col-lg-6 col-md-6">
                            <label class="form-text" for="date-activities">{{__('Activity.date of Activity')}}</label>
                            <input type="date" class="form-control form-text" id='date-activities' name="date"
                                   value="{{old('date')}}">
                            @error('date')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- 5 -->
                <h3 class="container-title">{{__('Activity.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label form-text" for="std_Note">{{__('public.note')}}</label>
                            <textarea class="form-control" id="std_Note" cols="50" rows="5"
                                      name="note">{{old('note')}}</textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                {{-- 6 --}}
                <div class=" row">
                    <div class="box col ">
                        <input class="save-button " type="submit" value="{{__('public.save')}}">
                    </div>
                    <div class="box  col">
                        <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
