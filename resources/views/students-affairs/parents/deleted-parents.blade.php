@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">


        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('classroom.delete classrooms')}}</h4>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th>
                            <div class="n_rect">{{__('public.id')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.father_name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.father_work')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.father_contact1')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.father_contact2')}}</div>
                        </th>
                        <th>
                            <div class="th-head-3">{{__('public.mother_name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.mother_work')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.mother_contact1')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.mother_contact2')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.kin_name')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.kin_relationship')}}</div>
                        </th>
                        <th>
                            <div class="th-head-1">{{__('public.kin_contact')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.created at')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('public.updated at')}}</div>
                        </th>
                        <th colspan="">
                            <div class="th-head-3">{{__('public.processes')}}</div>
                        </th>
                    </tr>
                    </thead>
                    @foreach($parents  as $parent )
                        <tbody>
                        <tr>
                            <td>
                                <div class="td_rect">
                                    {{$parent->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_work}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_contact1}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->father_contact2}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_work}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_contact1}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->mother_contact2}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->kin_name}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->kin_relationship}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->kin_contact}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->created_at}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$parent->updated_at}}
                                </div>
                            </td>
                            <td>
                                <a href="{{route('parents.restore',$parent->id)}}"
                                   class="btn save-button btn-success  w-25 me-1 ms-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    {{-- {{__('public.restore')}} --}}
                                </a>
                                <button class="btn clear-button btn-danger  w-25 me-1 ms-1" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$parent->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                    {{-- {{__('public.force delete')}} --}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$parent->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="exampleModalLabel">{{__('public.force delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to completely delete').$parent->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post"
                                                      action="{{route('parents.forceDelete',$parent->id)}}">
                                                    @method('get')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-primary">{{__('public.ok')}}</button>
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
