{{--@extends('layouts.master')--}}
{{--@section('content')--}}
{{--    <main class="main ">--}}
{{--        <section class="section card-body">--}}
{{--            <form method="post" action="{{route('employees.update',$employee->id)}}">--}}
{{--                @method('PUT')--}}
{{--                @csrf--}}
{{--                <h3 class="text-center">--}}
{{--                    UPDATE <span class="text-danger">--}}
{{--                        {{$employee->name}}</span> CLASS</h3>--}}
{{--                <div class="container card col-md-10 section-color mb-5 text-center">--}}
{{--                    <div class="row">--}}
{{--                        <div class="row">--}}
{{--                            <div class=" col-md-1"></div>--}}
{{--                            <div class="box col-md-10 text-center">--}}
{{--                                <label for="c-name">Class Name:</label>--}}
{{--                                <input type="text" class="my-form-control " name="name" value="{{$employee->name}}">--}}
{{--                                @error('name')--}}
{{--                                <small class="form-text text-danger">{{$message}}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-md-1"></div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-1"></div>--}}
{{--                            <div class="box mb-3 col-md-5  ">--}}
{{--                                <label for="sex">Education Level:</label>--}}
{{--                                <select class="form-select my-form-control" name="edu_id">--}}
{{--                                    @foreach($levels as $level)--}}
{{--                                        <option class="text-center" value="{{$level->id}}"--}}
{{--                                                @if(\App\Models\EducationalLevel::findorFail($employee->edu_id)->name==$level->name)--}}
{{--                                                    selected @endif>{{$level->name}}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                                @error('edu_id')--}}
{{--                                <small class="form-text text-danger">{{$message}}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="box mb-3 col-md-5 ">--}}
{{--                                <label for="age">Class Cost: $$</label>--}}
{{--                                <input type="number" class="my-form-control" name="cost" minlength="0"--}}
{{--                                       value="{{$employee->cost}}">--}}
{{--                                @error('cost')--}}
{{--                                <small class="form-text text-danger">{{$message}}</small>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="col-md-1"></div>--}}
{{--                            <div class="box mb-3  ">--}}
{{--                                <button class="my-save-button" type="submit"><i class="fa-solid fa-wrench"></i> Update--}}
{{--                                </button>--}}
{{--                                <a href="{{route('employees.index')}}" class="btn my-clear-button"><i--}}
{{--                                            class="fa-solid fa-ban"></i> Cancel</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </section>--}}
{{--    </main>--}}
{{--@endsection--}}

@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section card-body">
            <form method="post" action="{{route('employees.update',$employee->id)}}">
                @method('PUT')
                @csrf
                <!-- Start personal info  -->
                <h3 class="text-center">UPDATE EMPLOYEE</h3>
                <div class="ms-5 me-5 container card section-color mb-5">
                    <div class="row">
                        <div class="box mb-3 col-lg-12 col-md-12">
                            <label for="name">name</label>
                            <input type="text" class="my-form-control" name="name" value="{{$employee->name}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-12 ">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo">
                            <img src="{{URL::asset('images/employees/'.$employee->photo)}}" width="70"
                                 height="70" alt="Does not have image">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="sex">sex</label>
                            <select class="col form-select my-form-control" name="sex" id="sex">
                                <option class="text-center" value="male">male</option>
                                <option class="text-center" value="female">female</option>
                            </select>
                            @error('sex')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="age">birthdate</label>
                            <input type="date" class="my-form-control" name="birthdate"
                                   value="{{$employee->birthdate}}">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-qualification">Qualification</label>
                            <input type="text" class="my-form-control" name="qualification"
                                   value="{{$employee->qualification}}">
                            @error('qualification')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-number">Contact 1</label>
                            <input type="number" class="col my-form-control ms-2 me-2" name="contact1"
                                   value="{{$employee->contact1}}">
                            @error('contact1')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-number">Contact 2</label>
                            <input type="number" class="col my-form-control ms-2 me-2" name="contact2"
                                   value="{{$employee->contact2}}">
                            @error('contact2')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3  ">
                            <label for="e-address">address</label>
                            <input type="text" class="col my-form-control ms-2 me-2" name="address"
                                   value="{{$employee->address}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col-md-1"></div>
                        <div class="box mb-3  ">
                            <button class="my-save-button" type="submit"><i class="fa-solid fa-wrench"></i>
                                Update
                            </button>
                            <a href="{{route('employees.index')}}" class="btn my-clear-button"><i
                                    class="fa-solid fa-ban"></i> Cancel</a>
                        </div>
                    </div>
                </div>
                {{--                <h3 class="text-center">EXTRA NOTES</h3>--}}
                {{--                <div class="container card card-header mb-5">--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="box mb-3 col-lg-12 col-md-12">--}}
                {{--                            <label class="form-label" for="stdNote">NOTE:</label>--}}
                {{--                            <textarea class="my-form-control text-start" name="note" id="" cols="50" value="{{$employee->note}}"--}}
                {{--                                                            rows="5"></textarea>--}}
                {{--                            {{$employee->note}}--}}
                {{--                            @error('note')--}}
                {{--                            <small class="form-text text-danger">{{$message}}</small>--}}
                {{--                            @enderror--}}
                {{--                        </div>--}}
                {{--                        <div class="box mb-3  ">--}}
                {{--                            <button type="submit" class="my-save-button"><i class="fa-solid fa-floppy-disk"></i>--}}
                {{--                                Save--}}
                {{--                            </button>--}}
                {{--                            <button class="my-clear-button" type="reset"><i class="fa-solid fa-broom"></i> Clear--}}
                {{--                            </button>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                <!-- End final box -->
            </form>
        </section>
    </main>
@endsection

