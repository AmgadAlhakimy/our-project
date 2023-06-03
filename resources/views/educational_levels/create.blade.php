{{--@extends('layouts.master')--}}
{{--@section('content')--}}
{{--    <main class="main ">--}}
{{--        <section class="section card-body">--}}
{{--            @if(Session::has('success'))--}}
{{--                <div class="alert alert-success" role="alert">--}}
{{--                    {{Session::get('success')}}--}}
{{--                </div>--}}
{{--            @endif--}}
{{--            <form method="post" action="{{route('educational_levels.store')}}">--}}
{{--                @csrf--}}
{{--                <h3 class="text-center">{{__('eduLevel.create  new educational level')}}</h3>--}}
{{--                <div class="container card col-md-10 section-color mb-5 text-center">--}}
{{--                    <div class="row">--}}
{{--                        <div class="row mt-2">--}}
{{--                            <div class=" col-md-1"></div>--}}
{{--                            <div class="box col-md-10 text-center">--}}
{{--                                <label for="c-name">{{__('eduLevel.educational Level name in english')}}</label>--}}
{{--                                <input type="text" class="form-control " name="name" value="{{old('name')}}">--}}
{{--                                @error('name')--}}
{{--                                <small class="form-text text-danger">{{$message}}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-md-1"></div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-2">--}}
{{--                            <div class="box mb-3">--}}
{{--                                <input class="save-button" type="submit" value="{{__('public.save')}} " name="add">--}}
{{--                                <input class="clear-button" type="reset" value="{{__('public.clear')}}" name="add">--}}

{{--                                --}}{{--                                <button type="submit" class="save-button"><i class="fa-solid fa-floppy-disk"></i>--}}
{{--                                  {{__('public.save')}}--}}
{{--                                </button>--}}
{{--                                <button class="clear-button" type="reset"><i class="fa-solid fa-broom"></i>--}}
{{--                                    {{__('public.clear')}}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </section>--}}
{{--    </main>--}}
{{--@endsection--}}

@extends('layouts.master')
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
                <h3 class="text-center">{{__('semester.create new semester')}}</h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class=" col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="c-name">{{__('semester.semester name in english')}}</label>
                            <input type="text" class="form-control" name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                        <div class="box col-md-10 text-center">
                            <label for="cname">{{__('semester.semester name in arabic')}}</label>
                            <input type="text" class="form-control" name="name_ar" value="{{old('name_ar')}}">
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
                </div>
            </form>
        </section>
    </main>
@endsection

