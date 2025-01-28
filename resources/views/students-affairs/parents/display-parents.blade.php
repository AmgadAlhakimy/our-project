<div class="my-table mt-5">
    <div class="table-header ">

        <h4 class="form-group container-title">{{__('student.superior info')}}</h4>
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
    @include('layouts.pagination.pagination_up')

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
                    {{-- 1 --}}
                    <th>
                        <button wire:click="ordering('father_name')" class="">
                            <div class="table_test form-label ">
                                {{__('student.father name')}}
                                @if($arrow and $showArrow === 'father_name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'father_name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 2 --}}
                    <th>
                        <button wire:click="ordering('father_work')" class="">
                            <div class="table_test form-label ">
                                {{__('student.father work')}}
                                @if($arrow and $showArrow === 'father_work')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'father_work')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 3 --}}
                    <th>
                        <button wire:click="ordering('father_contact1')" class="">
                            <div class="table_test form-label ">
                                {{__('student.father contact 1')}}
                                @if($arrow and $showArrow === 'father_contact1')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'father_contact1')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 4 --}}
                    <th>
                        <button wire:click="ordering('father_contact2')" class="">
                            <div class="table_test form-label ">
                                {{__('student.father contact 2')}}
                                @if($arrow and $showArrow === 'father_contact2')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'father_contact2')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 5 --}}
                    <th>
                        <button wire:click="ordering('mother_name')" class="">
                            <div class="table_test form-label ">
                                {{__('student.mother name')}}
                                @if($arrow and $showArrow === 'mother_name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'mother_name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 6 --}}
                    <th>
                        <button wire:click="ordering('mother_work')" class="">
                            <div class="table_test form-label ">
                                {{__('student.mother work')}}
                                @if($arrow and $showArrow === 'mother_work')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'mother_work')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 7 --}}
                    <th>
                        <button wire:click="ordering('mother_contact1')" class="">
                            <div class="table_test form-label ">
                                {{__('student.mother contact 1')}}
                                @if($arrow and $showArrow === 'mother_contact1')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'mother_contact1')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 7 --}}
                    <th>
                        <button wire:click="ordering('mother_contact2')" class="">
                            <div class="table_test form-label ">
                                {{__('student.mother contact 2')}}
                                @if($arrow and $showArrow === 'mother_contact2')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'mother_contact2')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 7 --}}
                    <th>
                        <button wire:click="ordering('kin_name')" class="">
                            <div class="table_test form-label ">
                                {{__('student.kin name')}}
                                @if($arrow and $showArrow === 'kin_name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'kin_name')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 7 --}}
                    <th>
                        <button wire:click="ordering('kin_relationship')" class="">
                            <div class="table_test form-label ">
                                {{__('student.kin relationship')}}
                                @if($arrow and $showArrow === 'kin_relationship')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'kin_relationship')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 7 --}}
                    <th>
                        <button wire:click="ordering('kin_contact')" class="">
                            <div class="table_test form-label ">
                                {{__('student.kin contact')}}
                                @if($arrow and $showArrow === 'kin_contact')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'kin_contact')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
                    </th>
                    {{-- 7 --}}
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
                    {{-- 0 --}}
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
                    {{-- 0 --}}
                    <th colspan="">
                        <div class="th-head-4 form-label">{{__('public.processes')}} </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                    <?php $counter = 1 ?>
                    @foreach($parents as $parent)
                    <tr>
                        <td class="num_table ">{{$counter}}</td>
                        <?php $counter++ ?>
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
                            <a href="{{route('edit-parents',$parent->id)}}"
                               class="btn save-button btn-success  w-25 me-1 ms-1 ">
                                <i class="fa-solid fa-pen-to-square"></i>
                                {{-- {{__('public.edit')}} --}}
                            </a>
                            <button wire:confirm="are you sure you want to delete"
                                    class="btn clear-button btn-danger w-25 me-1 ms-1 "
                                    data-bs-toggle="modal"
                                    data-bs-target="#delete{{$parent->id}}">
                                <i class="fa-solid fa-trash"></i>
                                {{-- {{__('public.delete')}} --}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$parent->id}}"
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
                                                {{$parent->father_name}}
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger clear-button ms-2 me-2 "
                                                    data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post"
                                                  action="{{route('parents.destroy',$parent->id)}}">
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
                        {{$parents->links()}}
                    </div>
                @endif
            </div>

            {{-- pagination down code --}}
            @include('layouts.pagination.pagination_down')

        </div>
    </div>
</div>
