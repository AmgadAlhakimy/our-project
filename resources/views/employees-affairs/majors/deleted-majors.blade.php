@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('major.DELETED MAJORS')}}</h4>

            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <div class="">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.updated at')}}</div>
                        </th>
                        <th colspan="2">
                            <div class="th-head-4">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($majors as $major)
                        <tr>

                            <td>
                                <div class="td_rect">
                                    {{$major->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$major->name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$major->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$major->updated_at}}
                                </div>
                            </td>
                            <td>
                                <a href="{{route('majors.restore',$major->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$major->id}}">
                                    <i class="fa-solid fa-trash">
                                        </i> {{__('public.force delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$major->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$major->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('majors.forceDelete',$major->id)}}">
                                                    @method('get')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
