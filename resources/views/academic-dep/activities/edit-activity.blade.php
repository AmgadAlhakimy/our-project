@extends('layouts.sidebar')
@section('content')
    <main class="main">
        <section class="section">
            <h1 class="p-relative title-1">{{__('Activity.update Activity'). $activity->name}}</h1>
            <form method="post" action="{{route('activities.update',$activity->id)}}">
                @method('PUT')
                @csrf
                <h3 class="container-title">{{__('Activity.update Activity')}}</h3>
            <div class="container containers-style ">
                <div class="row">
                    <!-- 1 -->
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="activity-name-a">{{__('Activity.Activity name in english')}} </label>
                        <input type="text" class="form-control" id='activity-name-a'  required  name="name" value="{{$activity->getTranslation('name','en')}}">
                        @error('name')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="activity-name-e">{{__('Activity.Activity name in arabic')}}</label>
                        <input type="text" class="form-control " id='activity-name-e'  placeholder="in arabic"  name="name_ar"
                            value="{{$activity->getTranslation('name','ar')}}">
                        @error('name_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- 2 -->
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="area-name-a">{{__('Activity.Activity location in english')}}</label>
                        <input type="text" class="form-control " id='area-name-a' name="location"  placeholder="in english"
                            value="{{$activity->getTranslation('location','en')}}">
                        @error('location')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-6 col-md-12">
                        <label class="" for="area-name-e">{{__('Activity.Activity location in arabic')}}</label>
                        <input type="text" class="form-control " id='area-name-e' name="location_ar"  placeholder="in arabic"
                            value="{{$activity->getTranslation('location','ar')}}">
                        @error('location_ar')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="box col-lg-6 col-md-6">
                        <label class="" for="area-number">{{__('Activity.Activity location contact')}}</label>
                        <input type="number" class="form-control " id='area-number' value="{{$activity->contact}}" name="contact"  placeholder="">
                        @error('contact')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <!-- 5 -->
                    <div class="box col-lg-6 col-md-6">
                        <label class="" for="date-activities">{{__('Activity.date of Activity')}}</label>
                        <input type="date" class="form-control " id='date-activities' value="{{$activity->date}}" name="date">
                        @error('date')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
            </div>
                <h3 class="container-title">{{__('Activity.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note">{{__('Activity.note')}}</label>
                    <textarea class="form-control" id="std_Note" cols="50" rows="5"  name="note">{{$activity->note}}</textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button" type="submit" value="{{__('public.update')}}">
                        </div>
                        <div class="box  col">
                            <a href="{{route('display-activities')}}" class="btn clear-button"><i
                                    class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
