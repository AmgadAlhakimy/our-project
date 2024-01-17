@extends('layouts.sidebar')
@section('content')
    <main class="main">
        <section class="section">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <h3 class="container-title">{{__('class.create new class')}}</h3>
            <form method="post" action="{{route('classes.store')}}">
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name">{{__('class.class name in english')}}</label>
                            <input type="text" id="c-name" class="form-control " name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name_ar">{{__('class.class name in arabic')}}</label>
                            <input type="text" id="c-name_ar" class="form-control" name="name_ar"
                                    value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="level">{{__('class.educational level')}}</label>
                            <select class="form-control" id="level" name="level">
                                @foreach($levels as $level)
                                    <option class="text-center" value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                            </select>
                            @error('level')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="cost">{{__('class.class cost')}}</label>
                            <input type="number" id="cost" class="form-control" name="cost" minlength="0"
                                    placeholder="$"
                                    value="{{old('cost')}}">
                            @error('cost')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
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
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
