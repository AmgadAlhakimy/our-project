<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="form-group container-title">{{__('activity.activity info')}}</h4>
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
                        <button wire:click="ordering('location')" class="">
                            <div class="table_test form-label ">
                                {{__('public.location')}}
                                @if($arrow and $showArrow === 'location')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'location')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-up"></i>
                                @endif
                            </div>
                        </button>
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
                        <button wire:click="ordering('date')" class="">
                            <div class="table_test form-label ">
                                {{__('public.date')}}
                                @if($arrow and $showArrow === 'date')
                                    <i class="me-2 ms-2  fa-solid fa-chevron-down"></i>
                                @elseif(!$arrow and $showArrow === 'date')
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
                    @can('who did this')
                        <th>
                            <div class="table_test form-label ">
                                {{__('user.user')}}
                            </div>
                        </th>
                    @endcan
                    <th colspan="">
                        <div class="th-head-3 form-label">{{__('public.processes')}} </div>
                    </th>
                    <th>
                        <div class="th-head-2 form-label">{{__('public.share')}} </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php $counter = 1 ?>
                @foreach($activities as $activity)
                    <tr>
                        <td class="num_table ">{{$counter}}</td>

                        <td>
                            <div class="td_rect">
                                {{$activity->name}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$activity->location}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$activity->contact}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$activity->date}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$activity->note}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$activity->created_at}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$activity->updated_at}}
                            </div>
                        </td>
                        @can('who did this')
                            <td>
                                <div class="td_rect">
                                    {{$activity->user->name}}
                                </div>
                            </td>
                        @endcan
                        <td>
                            @can('edit activity')
                                <a href="{{route('activities.edit',$activity->id)}}"
                                   class="btn save-button btn-success  w-25 me-1 ms-1 ">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    {{-- {{__('public.edit')}} --}}
                                </a>
                            @endcan
                            @can('delete activity')
                                <button wire:confirm="are you sure you want to delete"
                                        class="btn clear-button btn-danger w-25 me-1 ms-1 "
                                        data-bs-toggle="modal"
                                        data-bs-target="#delete{{$activity->id}}">
                                    <i class="fa-solid fa-trash"></i>
                                    {{-- {{__('public.delete')}} --}}
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="delete{{$activity->id}}"
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
                                                    {{$activity->name}}
                                                </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger clear-button ms-2 me-2"
                                                        data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post"
                                                      action="{{route('activities.destroy',$activity->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-primary save-button ms-2 me-2">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endcan
                        </td>
                        <td>
                            <a href=""
                               class="btn save-button btn-light btn-sm w-50 me-1 ms-1 ">
                                <i class="fas fa-share-alt"></i>
                            </a>
                        </td>
                    </tr>
                        <?php $counter++ ?>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class=" rows_style mt-2 ms-2 me-2">
            <div class="rows_1 sections_rows  ">
                @if($isPaginate)
                    <div class="links  ">
                        {{$activities->links()}}
                    </div>
                @endif
            </div>


            <!-- pagination down code -->
            @include('layouts.pagination.pagination_down')

        </div>
    </div>
</div>
