
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
                    <div class=" col text-center ">
                        <div class="cards_sup_title">{{$classroom->name}}</div>
                    </div>
                    <div class=" col text-center ">
                        <div class="cards_title">{{$month}}</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="table-header mt-3">
            <div class="col-12  row">
                <a href="{{route('follow_up_children.editAllChildren',$classroom->id)}}"
                    class=" save-button col me-1 ms-1 p-0">
                     <div class="form-label mt-">{{__('follow_up.edit for all students')}}</div>
                 </a>
                <a href="{{ route('display-followUpMonthly',$classroom->id) }}"
                    class="save-button col me-1 ms-1 p-0">
                    <div class="form-label mt-">{{ __('follow_up.whole notebook') }}</div>
                </a>
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
                    <th class="num_table ">{{__('public.num')}}</th>

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

                    <th colspan="">
                        <div class="th-head-2 form-label">{{__('public.processes')}} </div>
                    </th>

                </tr>
                </thead>
                <tbody>
                    <?php $counter = 1 ?>
                    @foreach($followups as $followup)
                    <tr>
                        <td class="num_table ">{{$counter}}</td>
                        <?php $counter++ ?>
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
                            <td >
                                <div class="td_rect ">
                                    {{$homework}}
                                </div>
                            </td>
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
                            <a href="{{route('follow_up_children.editChild',
                                            ['child_id' => $followup->id, 'classroom_id' => $classroom->id])}}"
                               class="btn save-button btn-success w-50 me-1 ms-1 ">
                                <i class="fa-solid fa-pen-to-square"></i>
                                {{-- {{__('public.edit')}} --}}
                            </a>
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
