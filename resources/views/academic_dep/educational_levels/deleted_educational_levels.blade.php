@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('DELETED EDUCATIONAL LEVELS')}}</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('students.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row"> 
                            <label class="col-10">
                                <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <!-- table-hover table-striped -->
    {{-- the table --}}
    <div class=" shadow-none mt-4 ">
        <div class="table-section card  ">
            <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <label for="" class=" n_rect">
                                {{__('public.num')}}
                            </label>
                        </th>
                        
                        <th>
                            <div class="th-head-1">{{__('public.id')}}</div>
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
                    @foreach($levels as $Level)
                        <tr>
                            <td>
                                <div class="td_rect">
                                1
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$Level->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$Level->name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$Level->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                {{$Level->updated_at}}
                                </div>
                            </td>
                            <td>
                                <a href="{{route('educational_levels.restore',$Level->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.restore')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$Level->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.force delete')}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$Level->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$Level->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post"
                                                      action="{{route('educational_levels.forceDelete',$Level->id)}}">
                                                    @method('get')
                                                    @csrf.
                                                    <button type="submit"
                                                            class="btn btn-primary">{{__('public.ok')}}
                                                    </button>
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
