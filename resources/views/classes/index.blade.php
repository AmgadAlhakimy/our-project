@extends('layouts.master')
@section('content')
    <div class="my-table">
        <div class="table-header">
            <h3>Classes Info</h3>
            <div>
                <input class="" placeholder="SEARCH">
                <button class="add-new">Search</button>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="card table-section ">
            <table class=" ">
                <thead>
                <tr>
                    <th>
                        <div class="th-head-1">Id</div>
                    </th>
                    <th>
                        <div class="th-head-2">Name</div>
                    </th>
                    <th>
                        <div class="th-head-2">Cost</div>
                    </th>
                    <th>
                        <div class="th-head-3">Education Level</div>
                    </th>
                    <th>
                        <div class="th-head-3">Created at</div>
                    </th>
                    <th>
                        <div class="th-head-3">Updated at</div>
                    </th>
                    <th>
                        <div class="th-head-2">Processes</div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                </tr>
                </thead>
                @foreach($classes  as $class )
                    <tbody>
                    <tr>
                        <td>{{$class->id}}</td>
                        <td>{{$class->name}}</td>
                        <td>{{$class->cost}}</td>
                        <td>{{\App\Models\EducationalLevel::findorFail($class->edu_id)->name}}</td>
                        <td>{{$class->created_at}}</td>
                        <td>{{$class->updated_at}}</td>
                        <td>
                            <a href="{{route('classes.edit',$class->id)}}" class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> Edit </a>
                        </td>
                        <td>
                            <form method="post" action="{{route('classes.destroy',$class->id)}}">
                                @method('DELETE')
                                @csrf
                                <button class="my-clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                    </tbody>
            </table>
        </div>
    </div>
@endsection
