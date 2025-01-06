@extends('layouts.sidebar')
@section('content')
    <main class="main">
        <section class="section">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <h3 class="container-title">{{__('classroom.create new class')}}</h3>
            <form method="post" action="{{route('classrooms.store')}}">
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name_ar">{{__('classroom.classroom name in arabic')}}</label>
                            <input type="text" id="c-name_ar" class="form-control" name="name_ar"
                                   value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- ************* --}}
                        <div class="box col-lg-6 col-md-12">
                            <label for="c-name">{{__('classroom.classroom name in english')}}</label>
                            <input type="text" id="c-name" class="form-control " name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="level">{{__('classroom.educational Level')}}</label>
                            <select class="form-control" id="level" name="level">
                                <option value=""
                                        disabled {{ old('Level') ? '' : 'selected' }}>{{ __('public.select level') }}</option>
                                    <?php $i = 0 ?>
                                @foreach($levels as $Level)
                                        <?php $i++ ?>
                                    <option class="text-center"
                                            value="{{$Level->id}}" {{ old('level') == $Level->id ? 'selected' : '' }}>
                                        {{$Level->name}}</option>
                                @endforeach
                            </select>
                            @if($i==0)
                                <small class="form-text text-danger">
                                    {{__('eduLevel.Sorry! you have to create Educational Level first')}}
                                </small>
                            @endif
                            @error('level')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}
                    </div>
                </div>
                {{-- 4 --}}
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
