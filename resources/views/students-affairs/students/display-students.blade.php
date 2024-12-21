<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="form-group container-title">{{__('students.students info JJJ')}}</h4>
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
    <!-- table-hover table-striped -->
    <div class="small text-muted rows_3 num_rows mt-3 ms-4 me-4">
        @if($isPaginate)
            <label class=""> {{__('public.number of rows:')}} </label>
            <select class=" num_rows" wire:model.live="pagination">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="75">75</option>
                <option value="100">100</option>
            </select>
        @endif
    </div>
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
                        <button wire:click="ordering('photo')" class="">
                            <div class="table_test form-label ">
                                {{__('public.photo')}}
                                @if($arrow and $showArrow === 'photo')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'photo')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
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
                                {{__('public.birthdate')}}
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
                                {{__('public.place_of_birth')}}
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
                                {{__('public.chick_medicine')}}
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
                                {{__('public.medicine_desc')}}
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
                                {{__('public.chick_allergy')}}
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
                                {{__('public.allergy_desc')}}
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
                                {{__('public.health_problem_desc')}}
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
                                {{__('public.chick_health_problem')}}
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
                                {{__('public.classroom_id')}}
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
                        <td>
                            <div class="td_rect">
                                {{$student->photo}}
                            </div>
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
                            <a href="{{route('students.edit',$student->id)}}"
                                class="btn save-button btn-success  w-25 me-1 ms-1 ">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                {{-- {{__('public.edit')}} --}}
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
        <div class="small text-muted rows_2 num_rows ">
            @if($isPaginate)
                <label class=""> {{__('public.number of rows:')}} </label>
                <select class=" num_rows" wire:model.live="pagination">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="75">75</option>
                    <option value="100">100</option>
                </select>
            @endif
        </div>
    </div>
</div>
