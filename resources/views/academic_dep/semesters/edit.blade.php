@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section card-body">
            <form method="post" action="{{route('semesters.update',$Semester->id)}}">
                @method('PUT')
                @csrf
                <h3 class="text-center">
                    {{__('Semester.update Semester')}} <span class="text-danger">
                        {{$Semester->name}}</span></h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class=" col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="c-name">{{__('Semester.Semester name in english')}}</label>
                            <input type="text" class="form-control " name="name" value="{{$Semester->getTranslation('name','en')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class=" col-md-1"></div>
                        <div class=" col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="c-name">{{__('Semester.Semester name in arabic')}}</label>
                            <input type="text" class="form-control " name="name_ar" value="{{$Semester->getTranslation('name','ar')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="box mb-3  ">
                                <input class="save-button" type="submit" value="{{__('public.update')}}" name="add">
                                <a href="{{route('semesters.index')}}" class="btn clear-button">{{__('public.cancel')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
