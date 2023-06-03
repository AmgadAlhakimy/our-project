@extends('layouts.master')
@section('content')
    <table class="table table-hover table-striped ">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Created at</th>
            <th scope="col">Updated at</th>
            <th scope="col">Processes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
            <tr>
                <td>{{$subject->id}}</td>
                <td>{{$subject->name}}</td>
                <td>{{$subject->created_at}}</td>
                <td>{{$subject->updated_at}}</td>
                <td><a href="{{route('subjects.edit',$subject->id)}}" class="btn btn-primary">Edit</a>
                    <form method="post" action="{{route('subjects.destroy',$subject->id)}}">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger mt-1">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
