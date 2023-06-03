@extends('layouts.master')


@section('content')
    <main class="main">
        <section class="section">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <h1 class="p-relative title-1"> {{__('activity.create new activity')}} </h1>
            <form action="{{route('activities.store')}}" method="post">
                @csrf
                <h3 class="container-title">{{__('activity.activity info')}}</h3>
            <div class="container containers-style ">
                <div class="row">
                    <!-- 1 -->
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="activity-name-a">{{__('activity.activity name in english')}} </label>
                        <input type="text" class="form-control" id='activity-name-a'  placeholder="in english" name="name">
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="activity-name-e">{{__('activity.activity name in arabic')}}</label>
                        <input type="text" class="form-control " id='activity-name-e'  placeholder="in arabic"  name="name_ar">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- 2 -->
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="area-name-a">{{__('activity.activity location in english')}}</label>
                        <input type="text" class="form-control " id='area-name-a' name="location"  placeholder="in english">
                        @error('location')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="area-name-e">{{__('activity.activity location in arabic')}}</label>
                        <input type="text" class="form-control " id='area-name-e' name="location_ar"  placeholder="in arabic">
                        @error('location_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-6 col-md-6">
                        <label class="" for="area-number">{{__('activity.activity location contact')}}</label>
                        <input type="number" class="form-control " id='area-number' name="contact"  placeholder="">
                        @error('contact')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- 5 -->
                    <div class="box col-lg-6 col-md-6">
                        <label class="" for="date-activities">{{__('activity.date of activity')}}</label>
                        <input type="date" class="form-control " id='date-activities' name="date">
                        @error('date')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
                <h3 class="container-title">{{__('activity.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note">{{__('activity.note')}}</label>
                    <textarea class="form-control" id="std_Note" cols="50" rows="5" name="note"></textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="box col-7 ">
                        <input class="save-button " type="submit" value="{{__('public.save')}}" >
                        <input class="clear-button " type="reset" value="{{__('public.clear')}}" >
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
