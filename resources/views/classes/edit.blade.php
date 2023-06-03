@extends('layouts.master')
@section('content')
    <main class="main ">
        <section class="section card-body">
            <form method="post" action="{{route('classes.update',$class->id)}}">
                @method('PUT')
                @csrf
                <h3 class="text-center">
                    UPDATE <span class="text-danger">
                        {{$class->name}}</span> CLASS</h3>
                <div class="container card col-md-10 section-color mb-5 text-center">
                    <div class="row">
                        <div class="row">
                            <div class=" col-md-1"></div>
                            <div class="box col-md-10 text-center">
                                <label for="c-name">Class Name:</label>
                                <input type="text" id="c-name" class="my-form-control" name="name" value="{{$class->name}}">
                                @error('name')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="box mb-3 col-md-5  ">
                                <label for="sex">Education Level:</label>
                                <select class="form-select my-form-control" name="edu_id" id="sex">
                                    @foreach($levels as $level)
                                        <option class="text-center" value="{{$level->id}}"
                                                @if(\App\Models\EducationalLevel::findorFail($class->edu_id)->name==$level->name)
                                                    selected @endif>{{$level->name}}</option>
                                    @endforeach
                                </select>
                                @error('edu_id')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="box mb-3 col-md-5 ">
                                <label for="age">Class Cost: $$</label>
                                <input type="number" class="my-form-control" id="age" name="cost" minlength="0"
                                       value="{{$class->cost}}">
                                @error('cost')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-md-1"></div>
                            <div class="box mb-3  ">
                                <button class="my-save-button" type="submit"><i class="fa-solid fa-wrench"></i> Update
                                </button>
                                <a href="{{route('classes.index')}}" class="btn my-clear-button"><i
                                            class="fa-solid fa-ban"></i> Cancel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </section>
    </main>
@endsection
