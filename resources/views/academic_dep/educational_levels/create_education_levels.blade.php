@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section card-body">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form method="post" action="{{route('educational_levels.store')}}">
                @csrf
                <h3 class="container-title">{{__('eduLevel.create new educational level')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="row mt-2">
                            <div class=" col-md-1"></div>
                            <div class="box col-lg-12 col-md-12">
                                <label for="edu_name"
                                    for="c-name">{{__('eduLevel.educational Level name in english')}}</label>
                                <input type="text" id="edu_name" class="form-control" name="name"
                                    value="{{old('name')}}">
                                @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                            <div class="box col-lg-12 col-md-12">
                                <label for="edu_name_ar">{{__('eduLevel.educational Level name in arabic')}}</label>
                                <input type="text" id="edu_name_ar" class="form-control" name="name_ar"
                                    value="{{old('name_ar')}}">
                                @error('name_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button " type="submit" value="{{__('public.save')}}">
                        </div>
                        <div class="box  col">
                            <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
