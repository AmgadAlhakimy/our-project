<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="form-group container-title ">{{__('student.student info')}}</h4>
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
    <div class="row">
        <div class="col text-center mt-3 form-label">{{$classroom->name}}</div>
        <div class="col">
            @include('layouts.pagination.pagination_up')
        </div>
    </div>
    {{-- the table --}}
    <div class=" shadow-none mt-4 ">
        <div class="table-section card  ">
            <table class=" " id="check_table">
                <thead>
                <tr>
                    <th class="num_table ">{{__('public.num')}}</th>

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
                        <div class="table_test form-label ">
                            {{__('public.photo')}}
                        </div>
                    </th>
                    {{-- 1 --}}
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
                    {{-- 1 --}}
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
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('birthdate')" class="">
                            <div class="table_test form-label ">
                                {{__('student.birthdate')}}
                                @if($arrow and $showArrow === 'birthdate')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'birthdate')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('place_of_birth')" class="">
                            <div class="table_test form-label ">
                                {{__('student.birth place')}}
                                @if($arrow and $showArrow === 'place_of_birth')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'place_of_birth')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('takes_medicine')" class="">
                            <div class="table_test form-label ">
                                {{__('student.takes any medicine?')}}
                                @if($arrow and $showArrow === 'takes_medicine')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'takes_medicine')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('has_allergy')" class="">
                            <div class="table_test form-label ">
                                {{__('student.has allergy?')}}
                                @if($arrow and $showArrow === 'has_allergy')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'has_allergy')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('health_problem_desc')" class="">
                            <div class="table_test form-label ">
                                {{__('student.has any health problem?')}}
                                @if($arrow and $showArrow === 'health_problem_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'health_problem_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('note')" class="">
                            <div class="table_test form-label">
                                {{__('public.note')}}
                                @if($arrow and $showArrow === 'note')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'note')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('classroom_id')" class="">
                            <div class="table_test form-label ">
                                {{__('classroom.classroom')}}
                                @if($arrow and $showArrow === 'classroom_id')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'classroom_id')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
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
                    @can('who did this')
                    <th>
                        <div class="table_test form-label ">
                            {{__('user.user')}}
                        </div>
                    </th>
                    @endcan
                    <th colspan="3">
                        <div class="th-head-3 form-label">{{__('public.processes')}} </div>
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
                        <td>
                            <div class="td_rect">
                                {{$student->address}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->gender}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->birthdate}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->place_of_birth}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->takes_medicine}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->has_allergy}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->has_health_problem}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->note}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->classroom->name}}
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
                        @can('who did this')
                            <td>
                                <div class="td_rect">
                                    {{$student->user->name}}
                                </div>
                            </td>
                        @endcan
                        <td>
                            @can('edit student')
                                <a href="{{route('edit-student',$student->id)}}"
                                   class="btn save-button btn-success w-50 me-1 ms-1 btn-sm">
                                    <i class="fa-solid fa-pen-to-square"></i>

                                </a>
                            @endcan
                            @can('delete student')
                                <button wire:confirm="are you sure you want to delete"
                                        class="btn clear-button btn-danger w-25 me-1 ms-1 "
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete{{$student->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                    {{-- {{__('public.delete')}} --}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$student->id}}"
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
                                                    {{$student->name}}
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger clear-button ms-2 me-2 "
                                                        data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post"
                                                      action="{{route('students.destroy',$student->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-primary save-button ms-2 me-2 ">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endcan
                            {{-- MORE INFO --}}
                        </td>
                        <td>
                            @can('student more info')
                                <a href="{{route('student-more-info',$student->id)}}"
                                   class="btn save-button btn-info w-100 me-1 ms-1 btn-sm">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                            @endcan
                        </td>
                        {{-- daily book --}}

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
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
