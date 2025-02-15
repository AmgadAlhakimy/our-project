
<div class="my-table mt-5">
        <!-- Start personal info  -->
            <div class="table-header ">
                {{-- the title and search --}}
                <h4 class="form-group container-title">{{__('follow_up.follow-up notebook')}}</h4>
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


            <div class=" shadow-none mt-4 ">
                <div class="table-section card  ">
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
                                @can('who did this')
                                    <th>
                                        <div class="table_test form-label ">
                                            {{__('user.user')}}
                                        </div>
                                    </th>
                                @endcan
                                <th colspan="" class="">
                                    <div class="th-head-3 text-center form-label">{{__('public.processes')}} </div>
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
                                    @can('who did this')
                                        <td>
                                            <div class="td_rect">
                                                {{$student->user->name}}
                                            </div>
                                        </td>
                                    @endcan
                                    <td>
                                        @can('whole notebook for specific student')
                                        <a href="{{route('display-follow-up-notebook',$student->id)}}"
                                           class="btn save-button btn-success w-100 me-1 ms-1 ">
                                            <i class="fa-solid fa-book"></i>
                                             {{__('follow_up.follow-up notebook')}}
                                        </a>
                                        @endcan
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
                                {{$students->links()}}
                            </div>
                        @endif
                    </div>
                    {{-- pagination down code --}}
                    @include('layouts.pagination.pagination_down')
                </div>
            </div>
    </div>
