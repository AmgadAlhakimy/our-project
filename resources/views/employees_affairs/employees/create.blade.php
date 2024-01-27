@extends('layouts.sidebar')
@section('content')
    <main class="main ">
        <section class="section card-body">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form action="{{route('employees.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <!-- Start personal info  -->
                <h3 class="text-center">CREATE NEW EMPLOYEE</h3>
                <div class="ms-5 me-5 container card section-color mb-5">
                    <div class="row">
                        <div class="box mb-3 col-lg-12 col-md-12">
                            <label for="name">name</label>
                            <input type="text" class="my-form-control" name="name" value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-12 ">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" name="photo" value="{{old('photo')}}">
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
                            <input type="date" class="my-form-control" name="birthdate" value="{{old('birthdate')}}">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-qualification">Qualification</label>
                            <input type="text" class="my-form-control" name="qualification"
                                   value="{{old('qualification')}}">
                            @error('qualification')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-number">Contact 1</label>
                            <input type="number" class="col my-form-control ms-2 me-2" name="contact1"
                                   value="{{old('contact1')}}">
                            @error('contact1')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3 col-lg-6 col-md-6 ">
                            <label for="e-number">Contact 2</label>
                            <input type="number" class="col my-form-control ms-2 me-2" name="contact2"
                                   value="{{old('contact2')}}">
                            @error('contact2')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box mb-3  ">
                            <label for="e-address">address</label>
                            <input type="text" class="col my-form-control ms-2 me-2" name="address"
                                   value="{{old('address')}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                
                <!-- Start final box -->
                <h3 class="text-center">EXTRA NOTES</h3>
                <div class="container card card-header mb-5">
                    <div class="row">
                        <div class="box mb-3 col-lg-12 col-md-12">
                            <label class="form-label" for="stdNote">NOTE:</label>
                            <textarea class="my-form-control text-start" name="note" id="" cols="50"
                                      rows="5"></textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- <div class="box mt-3 col">--}}
                        {{-- <input class="btn my-save-button form-control me-0 ms-0" type="submit" value="Save Student"
                            name="add">--}}
                        {{-- <input class="btn my-clear-button form-control me-0 ms-0" type="reset" value="clear "
                            name="add">--}}
                        {{-- </div>--}}
                        <div class="box mb-3  ">
                            <button type="submit" class="my-save-button"><i class="fa-solid fa-floppy-disk"></i>
                                Save
                            </button>
                            <button class="my-clear-button" type="reset"><i class="fa-solid fa-broom"></i> Clear
                            </button>
                        </div>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
@endsection
