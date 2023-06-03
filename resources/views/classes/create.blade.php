@extends('layouts.master')
@section('content')
    <main class="main ">
        <section class="section card-body">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form method="post" action="{{route('classes.store')}}">
                @csrf
                <h3 class="text-center">{{__('classs.CREATE NEW CLASS')}}</h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class="row mt-2">
                            <div class=" col-md-1"></div>
                            <div class="box col-md-10 text-center">
                                <label for="c-name">{{__('classs.Class Name')}}</label>
                                <input type="text" class="my-form-control " name="name" value="{{old('name')}}">
                                @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-1"></div>
                            <div class="box mb-3 col-md-5">
                                <label for="sex">{{__('classs.Education Level')}}</label>
                                <select class="form-select my-form-control" name="edu_id">
                                    <option value="1">First</option>
                                    <option value="2">First</option>
                                    @foreach($levels as $level)
                                        <option class="text-center" value="{{$level->id}}">{{$level->name}}</option>
                                    @endforeach
                                </select>
                                @error('edu_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="box mb-3 col-md-5 ">
                                <label for="age">{{__('classs.Class Cost')}}</label>
                                <input type="number" class="my-form-control" name="cost" minlength="0" placeholder="$"
                                       value="{{old('cost')}}">
                                @error('cost')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1">

                            </div>
                            <div class="box mb-3  ">
                                <button type="submit" class="my-save-button"><i class="fa-solid fa-floppy-disk"></i>
                                    {{__('classs.Save')}}
                                </button>
                                <button class="my-clear-button" type="reset"><i class="fa-solid fa-broom"></i>
                                    {{__('classs.Clear')}}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
