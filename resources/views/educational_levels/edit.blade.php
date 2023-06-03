@extends('layouts.master')
@section('content')
    <main class="main ">
        <section class="section card-body">
            <form method="post" action="{{route('educational_levels.update',$level->id)}}">
                @method('PUT')
                @csrf
                <h3 class="text-center">UPDATE EDUCATIONAL LEVEL :
                    <span class="text-danger"> {{$level->name}}</span></h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class="row mt-2">
                            <div class=" col-md-1"></div>
                            <div class="box col-md-10 text-center">
                                <label for="c-name">Educational Level Name:</label>
                                <input type="text" class="my-form-control " name="name" value="{{$level->name}}">
                                @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row mt-2">
                            <div class="box mb-3  ">
                                <button class="my-save-button" type="submit"><i class="fa-solid fa-wrench"></i> Update
                                </button>
                                <a href="{{route('educational_levels.index')}}" class="btn my-clear-button"><i
                                            class="fa-solid fa-ban"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
