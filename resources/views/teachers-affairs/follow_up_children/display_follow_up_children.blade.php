
<div class="my-table mt-5">
        <div class="table-header ">
            {{-- the title and search --}}
            <h4 class="form-group container-title">{{__('student.followup notebook')}}</h4>
            <div class="row first-card mt-4">
                <div class="row">
                    <label class="col">
                        <div class="row">

                            <label class="col">
                                <div class="search p-relative">
                                    {{-- <i class="fa-solid fa-magnifying-glass"></i> --}}
                                    <input wire:model.live.debounce.500ms="search"
                                           type="text" class="form-control " name="search"
                                           placeholder="{{__('sidebar.search')}}">
                                </div>
                            </label>

                        </div>
                    </label>
                </div>



            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class="Names ">{{$classroom->name}}</h4>
                </div>
                <a href="{{route('follow_up_children.editAllChildren',$classroom->id)}}"
                   class="card-info card-info_2 col btn save-button">
                    <h4 class="topic-title mt-2">{{__('follow_up.edit for all students')}}</h4>
                    <p class="text-center ">{{__('follow_up.click her')}}</p>
                </a>
                <div class="card-info card-info_2 col ">
                    <h4 class=" Names">{{$month}}</h4>
                </div>
            </div>
        </div>

    </div>

    {{-- pagination up code --}}
    @include('layouts.pagination.pagination_up')

    {{-- the table --}}
    <div class=" shadow-none mt-4 ">
        <div class="table-section card  ">
            <table class=" " id="check_table">
                <thead>
                <tr>
                    <th>
                        <label for="" class="form-label ">
                            {{__('public.num')}}
                        </label>
                    </th>
                    <th>
                        <button id="arrowButton" wire:click="ordering('student_id')" class="th-head-1 form-label ">
                            {{__('public.id')}}
                            @if($arrow and $showArrow === 'student_id')
                                <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                            @elseif(!$arrow and $showArrow === 'student_id')
                                <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                            @endif
                        </button>
                    </th>
                    <th>
                            <div class="table_test form-label ">
                                {{__('public.name')}}

                            </div>
                    </th>
                    <th>
                        <div class="table_test form-label ">
                            {{__('public.photo')}}
                        </div>
                    </th>
                    @foreach($classroom->subjects as $subject)
                        <th>
                            <div class="table_test form-label ">
                                {{$subject->name}}
                            </div>
                        </th>
                    @endforeach
                    <th>
                        <button wire:click="ordering('food')" class="">
                            <div class="table_test form-label ">
                                {{__('follow_up.food')}}
                                @if($arrow and $showArrow === 'food')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'food')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('snack')" class="">
                            <div class="table_test form-label ">
                                {{__('follow_up.snack')}}
                                @if($arrow and $showArrow === 'snack')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'snack')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('bath')" class="">
                            <div class="table_test form-label ">
                                {{__('follow_up.bath')}}
                                @if($arrow and $showArrow === 'bath')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'bath')
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

                    <th colspan="2">
                        <div class="th-head-4 form-label">{{__('public.processes')}} </div>
                    </th>

                </tr>
                </thead>
                <tbody>
                @foreach($followups as $followup)
                    <tr>
                        <td>
                            <div for="" class="td_rect "> 1</div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->student->id}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->student->name}}
                            </div>
                        </td>
                        <td><img
                                src="{{asset('storage/'.$followup->student->photo)}}"
                                class="student-img" alt="photo">
                        </td>
                        @foreach($followup->homework as $homework)
                            <td class="th-head-1">{{$homework}}</td>
                        @endforeach
                        <td>
                            <div class="td_rect">
                                {{$followup->food}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->snack}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->bath}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->note}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->created_at}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$followup->updated_at}}
                            </div>
                        </td>
                        <td>
                        </td>
                        <td>
                            <a href="{{route('educational-levels.edit',$followup->id)}}"
                               class="btn save-button btn-success w-25 me-1 ms-1 ">
                                <i class="fa-solid fa-pen-to-square"></i>
                                {{-- {{__('public.edit')}} --}}
                            </a>

                            <button wire:confirm="are you sure you want to delete"
                                    class="btn clear-button btn-danger  w-25 me-1 ms-1 "
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete{{$followup->id}}">
                                <i class="fa-solid fa-trash"></i>
                                {{-- {{__('public.delete')}} --}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$followup->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <div class="modal-title">
                                                <i class="fa-solid fa-trash-can danger_msg"></i>
                                            </div>
                                        </div>
                                        <div class="modal-body form-label row">
                                            <div class="col-12">
                                                {{__('public.are you sure you want to delete')}}
                                            </div>
                                            <div class="col-12">
                                                {{$followup->name}}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger clear-button ms-2 me-2 "
                                                    data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post"
                                                  action="{{route('educational-levels.destroy',$followup->id)}}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                        class="btn btn-primary save-button ms-2 me-2 ">{{__('public.ok')}}</button>
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
                        {{$followups->links()}}
                    </div>
                @endif
            </div>

            {{-- pagination down code --}}
            @include('layouts.pagination.pagination_down')


        </div>
    </div>
</div>
