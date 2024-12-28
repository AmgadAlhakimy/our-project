<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="form-group container-title">{{__('teacher.fggfgf info')}}</h4>
        <div class="row first-card mt-4">
            <div class="row">
                <label class="col">
                    <div class="row">

                        <label class="col">
                            <div class="search p-relative">
                                <input wire:model.live.debounce.500ms="search"
                                       type="text" class="form-control " name="search"
                                       placeholder="{{__('sidebar.search')}}">
                            </div>
                        </label>
                    </div>
                </label>
            </div>
        </div>
    </div>
    <!-- pagination up code -->
    @include('layouts.paginations.pagination_up')

    {{-- the table --}}
    <div class=" shadow-none mt-4 ">
        <div class="table-section card  ">
            <table class=" " id="check_table">
                <thead>
                <tr>
                    <th>
                        <button id="arrowButton" wire:click="ordering('id')" class="th-head-1 form-label ">
                            {{__('public.id')}}
                            @if($arrow and $showArrow === 'id')
                                <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                            @elseif(!$arrow and $showArrow === 'id')
                                <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                            @endif
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('name')" class="">
                            <div class="table_test form-label ">
                                {{__('public.name')}}
                                @if($arrow and $showArrow === 'name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <div>{{__('public.photo')}} </div>
                    </th>
                    <th>
                        <button wire:click="ordering('contact')" class="">
                            <div class="table_test form-label ">
                                {{__('public.contact')}}
                                @if($arrow and $showArrow === 'contact')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'contact')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('gender')" class="">
                            <div class="table_test form-label ">
                                {{__('public.gender')}}
                                @if($arrow and $showArrow === 'gender')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'gender')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('address')" class="">
                            <div class="table_test form-label ">
                                {{__('public.address')}}
                                @if($arrow and $showArrow === 'address')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'address')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('qualification')" class="">
                            <div class="table_test form-label ">
                                {{__('public.qualification')}}
                                @if($arrow and $showArrow === 'qualification')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'qualification')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('major')" class="">
                            <div class="table_test form-label ">
                                {{__('public.major')}}
                                @if($arrow and $showArrow === 'major')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'major')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('note')" class="">
                            <div class="table_test form-label ">
                                {{__('public.note')}}
                                @if($arrow and $showArrow === 'note')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'note')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('created_at')" class=" ">
                            <div class="table_test form-label ">
                                {{__('public.created at')}}
                                @if($arrow and $showArrow === 'created_at')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'created_at')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('updated_at')" class="">
                            <div class="table_test form-label ">
                                {{__('public.updated at')}}
                                @if($arrow and $showArrow === 'updated_at')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'updated_at')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th colspan="">
                        <div class="th-head-3 form-label">{{__('public.processes')}} </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>
                            <div class="td_rect">
                                {{$teacher->id}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->name}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                <img src="{{asset($teacher->photo)}}"
                                     class="student-img" alt="photo">
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->contact}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->gender}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->address}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->qualification}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->major}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->note}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->created_at}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$teacher->updated_at}}
                            </div>
                        </td>
                        <td>
                            <a href="{{route('teachers.edit',$teacher->id)}}"
                               class="btn save-button btn-success w-25 me-1 ms-1 ">
                                <i class="fa-solid fa-pen-to-square"></i>
                                {{-- {{__('public.edit')}} --}}
                            </a>
                            <button wire:confirm="are you sure you want to delete"
                                    class="btn clear-button btn-danger w-25 me-1 ms-1"
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete{{$teacher->id}}">
                                <i class="fa-solid fa-trash"></i>
                                 {{-- {{__('public.delete')}} --}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$teacher->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-title">
                                                <i class="fa-solid fa-trash-can danger_msg"></i>
                                            </div>
                                        </div>
                                        <div class="modal-bodyform-label">
                                            {{__('public.are you sure you want to delete').$teacher->name}}
                                        </div>
                                        <div class="modal-footer form-label">
                                            <button type="button" class="btn btn-danger clear-button ms-2 me-2" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post"
                                                  action="{{route('teachers.destroy',$teacher->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                        class="btn btn-primary save-button ms-2 me-2">{{__('public.ok')}}</button>
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
        <div class=" rows_style mt-2 ms-2 me-2">
            <div class="rows_1 sections_rows  ">
                @if($isPaginate)
                    <div class="links  ">
                        {{$teachers->links()}}
                    </div>
                @endif
            </div>

            {{-- pagination down code --}}
                @include('layouts.paginations.pagination_down')

        </div>
    </div>
</div>
