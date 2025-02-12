@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <h3 class="container-title">{{__('classroom.update classroom').$classroom->name}}</h3>
            <form method="post" action="{{route('classrooms.update',$classroom->id)}}">
                @method('PUT')
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name">{{__('classroom.classroom name in english')}}</label>
                            <input type="text" id="c-name" class="form-control " name="name"
                                   value="{{$classroom->getTranslation('name','en')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name_ar">{{__('classroom.classroom name in arabic')}}</label>
                            <input type="text" id="c-name_ar" class="form-control" name="name_ar"
                                   value="{{$classroom->getTranslation('name','ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-12 col-md-12">
                            <label for="level">{{__('classroom.educational Level')}}</label>
                            <select class="form-control" id="level" name="level">
                                @foreach($levels as $Level)
                                    <option class="text-center" value="{{$Level->id}}"
                                            @if($Level->id==$classroom->edu_id) selected @endif>
                                        {{$Level->name}}</option>
                                @endforeach
                            </select>
                            @error('levels')
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
                        @can('display classrooms')
                            <div class="box  col">
                                <a href="{{route('display-classrooms')}}" class="btn clear-button"><i
                                        class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                            </div>
                        @endcan
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection

