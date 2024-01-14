@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <h3 class="container-title">{{__('class.update class').$class->name}}</h3>
                <form method="post" action="{{route('classes.update',$class->id)}}">
                    @method('PUT')
                    @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name">{{__('class.class name in english')}}</label>
                            <input type="text" id="c-name" class="form-control " name="name" value="{{$class->getTranslation('name','en')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name_ar">{{__('class.class name in arabic')}}</label>
                            <input type="text" id="c-name_ar" class="form-control" name="name_ar"
                                   value="{{$class->getTranslation('name','ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="level">{{__('class.educational level')}}</label>
                            <select class="form-control" id="level" name="level">
                                @foreach($levels as $level)
                                    <option class="text-center" value="{{$level->id}}"
                                    @if($level->id==$class->edu_id) selected @endif
                                    >{{$level->name}}</option>
                                @endforeach
                            </select>
                            @error('levels')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="cost">{{__('class.class cost')}}</label>
                            <input type="number" id="cost" class="form-control" name="cost" minlength="0" placeholder="$"
                                   value="{{$class->cost}}">
                            @error('cost')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="row mt-2">
                            <div class=" row">
                                <div class="box col ">
                                    <input class="save-button" type="submit" value="{{__('public.update')}}">
                                </div>
                                <div class="box  col">
                                    <a href="{{route('classes.index')}}" class="btn clear-button"><i
                                            class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection

