@extends('layouts.master')
@section('content')
    <div class="container col-5 text-center mt-5 pt-5">
        <form method="post" action="{{route('subjects.store')}}">
            @csrf
            <div class="mb-3">
                <label for="idname" class="form-label">Subject Name:</label>
                <input type="text" class="form-control" id="idname" name="name" value="{{old('name')}}">
                @error('name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save Subject</button>
            <button type="reset" class="btn btn-danger">Clear Data</button>
        </form>
    </div>
    @if(Session::has('success'))
        <div class="alert alert-success container mt-5" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
@endsection
