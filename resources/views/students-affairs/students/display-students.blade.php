<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="form-group container-title">{{__('student.student info')}}</h4>
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
                        <button wire:click="ordering('chick_medicine')" class="">
                            <div class="table_test form-label ">
                                {{__('student.take any medicine ?')}}
                                @if($arrow and $showArrow === 'chick_medicine')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'chick_medicine')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('medicine_desc')" class="">
                            <div class="table_test form-label ">
                                {{__('student.student medicines')}}
                                @if($arrow and $showArrow === 'medicine_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'medicine_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('chick_allergy')" class="">
                            <div class="table_test form-label ">
                                {{__('student.have an allergy ?')}}
                                @if($arrow and $showArrow === 'chick_allergy')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'chick_allergy')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('allergy_desc')" class="">
                            <div class="table_test form-label ">
                                {{__('student.student allergy')}}
                                @if($arrow and $showArrow === 'allergy_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'allergy_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('health_problem_desc')" class="">
                            <div class="table_test form-label ">
                                {{__('student.have any health problem ?')}}
                                @if($arrow and $showArrow === 'health_problem_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'health_problem_desc')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    <th>
                        <button wire:click="ordering('chick_health_problem')" class="">
                            <div class="table_test form-label ">
                                {{__('student.student health problem')}}
                                @if($arrow and $showArrow === 'chick_health_problem')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'chick_health_problem')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 1 --}}
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
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('classroom_id')" class="">
                            <div class="table_test form-label ">
                                {{__('classroom.classroom id')}}
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
                    <th colspan="">
                        <div class="th-head-3 form-label">{{__('public.processes')}} </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $student)
                    <tr>
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
                                class="student-img" alt="photo"></td>
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
                                {{$student->chick_medicine}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->medicine_desc}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->chick_allergy}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->allergy_desc}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->chick_health_problem}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->health_problem_desc}}
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
                        <td>
                            <a href="{{route('edit-student',$student->id)}}"
                               class="btn save-button btn-success  w-25 me-1 ms-1 ">
                                <i class="fa-solid fa-pen-to-square"></i>

                            </a>
                            <button wire:confirm="are you sure you want to delete"
                                    class="btn clear-button btn-danger w-25 me-1 ms-1 "
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete{{$student->id}}">
                                <i class="fa-solid fa-trash"></i>
                                {{--                                     {{__('public.delete')}}--}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$student->id}}"
                                 tabindex="-1" aria-labelledby="exampleModalLabel"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">{{__('public.delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete').$student->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post"
                                                  action="{{route('students.destroy',$student->id)}}">
                                                @method('DELETE')
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
    <div class=" rows_style mt-2 ms-2 me-2">
        <div class="rows_1 sections_rows  ">
            @if($isPaginate)
                <div class="links  ">
                    {{$students->links()}}
                </div>
            @endif
        </div>

        {{-- pagination down code --}}
        @include('layouts.paginations.pagination_down')

    </div>
</div>
