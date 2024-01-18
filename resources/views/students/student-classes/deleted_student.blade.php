@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <div class="table-header">

            {{-- the title and search --}}
            <div class="row frist-card ">
                <h4 class="col container-title mt-2">{{__('DELETED CLASSES')}}</h4>
                <div class="row col ">
                    <input class="col search2" placeholder="{{__('public.search')}}">
                    <button class="col-1 save-button search-button ">{{__('public.search')}}</button>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" ">
                    <thead>
                    <tr>
                        <th>
                            <div class="th-head-1">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.cost')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.educational level')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.updated at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.processes')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3"></div>
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
                                <a href="{{route('classes.restore',$class->id)}}" class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$class->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$class->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$class->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('classes.forceDelete',$class->id)}}">
                                                    @method('get')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
