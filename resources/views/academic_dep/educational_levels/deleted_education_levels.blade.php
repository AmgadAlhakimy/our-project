@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <div class="table-header">
            <h3 class="container-title">{{__('eduLevel.educational level info')}}</h3>
            <div>
                <label>
                    <input class="" placeholder="{{__('public.search')}}">
                </label>
                <button class="add-new">{{__('public.search')}}</button>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="card table-section">
            <table class=" ">
                <thead>
                <tr>
                    <th>
                        <div class="th-head-1">{{__('public.id')}}</div>
                    </th>
                    <th>
                        <div class="th-head-3">{{__('public.name')}}</div>
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
                        <div class="th-head-1"></div>
                    </th>
                    <th>
                        <div class="th-head-1"></div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($levels as $level)
                    <tr>
                        <td>{{$level->id}}</td>
                        <td>{{$level->name}}</td>
                        <td>{{$level->created_at}}</td>
                        <td>{{$level->updated_at}}</td>
                        <td>
                            <a href="{{route('educational_levels.restore',$level->id)}}"
                               class="btn my-save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                        </td>
                        <td>
                            <button class="btn my-clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$level->id}}">
                                <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$level->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete').$level->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post"
                                                  action="{{route('educational_levels.forceDelete',$level->id)}}">
                                                @method('get')
                                                @csrf.
                                                <button type="submit"
                                                        class="btn btn-primary">{{__('public.ok')}}</button>
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
@endsection
