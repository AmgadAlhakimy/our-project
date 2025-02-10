<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="col container-title mt-2">Subject Information</h4>
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
                    <th colspan="">
                        <div class="th-head-4 form-label">{{__('public.processes')}} </div>
                    </th>

                </tr>
                </thead>
                <tbody>
                <?php $counter = 1 ?>
                @foreach($subjects as $subject)
                    <tr>
                        <td class="num_table ">{{$counter}}</td>
                            <?php $counter++ ?>

                        <td>
                            <div class="td_rect">
                                {{$subject->name}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$subject->created_at}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$subject->updated_at}}
                            </div>
                        </td>
                        @can('who did this')
                            <td>
                                <div class="td_rect">
                                    {{$subject->user->name}}
                                </div>
                            </td>
                        @endcan
                        <td>
                            @can('edit subject')
                                <a href="{{route('subjects.edit',$subject->id)}}"
                                   class="btn save-button btn-success  w-25 me-1 ms-1">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    {{-- {{__('public.edit')}} --}}
                                </a>
                            @endcan
                            @can('delete subject')
                                <button wire:confirm="are you sure you want to delete"
                                        class="btn clear-button btn-danger  w-25 me-1 ms-1"
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete{{$subject->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                    {{-- {{__('public.delete')}} --}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$subject->id}}"
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
                                                    {{$subject->name}}
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger clear-button ms-2 me-2 "
                                                        data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post"
                                                      action="{{route('subjects.destroy',$subject->id)}}">
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
                        {{$subjects->links()}}
                    </div>
                @endif
            </div>
            <!-- pagination down code -->
            @include('layouts.pagination.pagination_down')

        </div>
    </div>
</div>

