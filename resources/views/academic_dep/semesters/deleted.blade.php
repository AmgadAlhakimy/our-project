@extends('layouts.sidebar')
@section('content')
    <div class="table">
        <div class="table-header">
            <h3>Deleted Semesters</h3>
            <div>
                <input class="" placeholder="SEARCH">
                <button class="add-new">Search</button>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" ">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1">id</div>
                        </th>
                        <th>
                            <div class="th-head-2">Name</div>
                        </th>
                        <th>
                            <div class="th-head-3">Deleted at</div>
                        </th>
                        <th>
                            <div class="th-head-3">created at</div>
                        </th>
                        <th>
                            <div class="th-head-3">Updated at</div>
                        </th>
                        <th>
                            <div class="th-head-2">processes</div>
                        </th>
                        <th>
                            <div class="th-head-1"></div>
                        </th>
                        <th>
                            <div class="th-head-1"></div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($semesters as $Semester)
                        <tr>
                            <td>{{$Semester->id}}</td>
                            <td>{{$Semester->name}}</td>
                            <td>{{$Semester->created_at}}</td>
                            <td>{{$Semester->deleted_at}}</td>
                            <td>{{$Semester->updated_at}}</td>
                            <td><a href="{{route('semesters.restore',$Semester->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i> Restore</a></td>
                            <td>
                                <form method="get" action="{{route('semesters.forceDelete',$Semester->id)}}">
                                    @csrf
                                    <button class="clear-button btn-danger w-100">
                                        <i class="fa-solid fa-trash"></i> By Force
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
    </div>
@endsection
