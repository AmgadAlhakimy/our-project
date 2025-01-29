
<div class="my-table mt-5">
        <!-- Start personal info  -->
        <div class="row ">
            <label class="col-12 container-title mb-2">{{__('student.personal info')}}</label>

            <div class="table-header ">
                {{-- the title and search --}}
                <h4 class="form-group container-title">{{__('student.student notebook')}}</h4>
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


            {{-- ---------------------------------- --}}

            <div class="col-12 ">
                <div class="cards_info_style ">
                    <div class=" pt-3 pb-3 me-4 ms-4">
                        {{-- 1 --}}
                        <input type="date" class="form-control  cards_title  text-center  "></input>
                    </div>
                </div>
            </div>


            <div class=" shadow-none mt-4 ">
                <div class="table-section card  ">
                    @if(!$isPaginate)
                        <table class=" " id="check_table">
                            <thead>
                            <tr>
                                <th class="num_table ">{{__('public.num')}}</th>

                                <th>
                                    <button id="arrowButton" wire:click="ordering('student_id')"
                                            class="th-head-1 form-label ">
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
                            @foreach($students as $student)
                                <tr>
                                    <td class="num_table ">{{$counter}}</td>
                                        <?php $counter++ ?>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->id}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->name}}
                                        </div>
                                    </td>
                                    <td><img
                                            src="{{asset('storage/'.$student->photo)}}"
                                            class="student-img" alt="photo">
                                    </td>


                                    @foreach($student->homework as $homework)
                                        <td>
                                            <div class="td_rect ">
                                                {{$homework}}
                                            </div>
                                        </td>
                                    @endforeach
                                    <td>
                                        <div class="td_rect">
                                            {{$student->food}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->snack}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->bath}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->note}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->created_at}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="td_rect">
                                            {{$student->updated_at}}
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{route('follow_up_children.editChild',
                                            ['child_id' => $student->id, 'classroom_id' => $classroom->id])}}"
                                           class="btn save-button btn-success w-50 me-1 ms-1 ">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            {{__('public.more info')}}
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            @endif
                        </table>
                </div>
                <div class=" rows_style mt-2 ms-2 me-2">
                    <div class="rows_1 sections_rows  ">
                        @if($isPaginate)
                            <div class="links  ">
                                {{$students->links()}}
                            </div>
                        @endif
                    </div>
                    {{-- pagination down code --}}
                    @include('layouts.pagination.pagination_down')
                </div>
            </div>


            <div class="mt-5 row">
                <div class="box col ">
                    <button type="submit" class=" save-button text-center">
                        {{__('public.show')}}
                        <div wire:loading class="spinner-border spinner-border-sm"></div>
                    </button>
                    <button type="reset" class=" clear-button text-center">
                        {{__('public.clear')}}
                    </button>
                </div>
            </div>
        </div>
    </div>


{{-- <div class="col-ms-12 col-md-6 col-lg- ">
    <div class="cards_info_style row me-1 ms-1 pt-3 pb-3">
            <label class="col  cards_title  text-center   "> 17/12/2025</label>
    </div>
</div> --}}
