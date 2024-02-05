@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section card-body">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form method="post" action="{{route('semesters.store')}}">
                @csrf
                <h3 class="text-center">{{__('Semester.create new Semester')}}</h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class=" col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="c-name">{{__('Semester.Semester name in english')}}</label>
                            <input type="text" id="c-name" class="form-control" name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="cname">{{__('Semester.Semester name in arabic')}}</label>
                            <input type="text" id="cname" class="form-control" name="name_ar" value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-1"></div>
                        <div class="box mb-3  ">
                            <input class="save-button" type="submit" value="{{__('public.save')}} " name="add">
                            <input class="clear-button" type="reset" value="{{__('public.clear')}}" name="add">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
