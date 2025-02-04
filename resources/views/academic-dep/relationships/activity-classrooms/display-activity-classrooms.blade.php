<div class="my-table mt-5">
    <div class="table-header ">
        {{-- the title and search --}}
        <h4 class="col container-title mt-2">{{__('relationships.display activities for classes')}}</h4>
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
                                {{__('public.classroom')}}
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
                            {{__('public.activities')}}
                        </div>
                    </th>
                    <th colspan="2">
                        <div class="th-head-3 form-label">{{__('public.processes')}} </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php $counter = 1 ?>
                @foreach($classrooms as $classroom)
                    <tr>
                        <td class="num_table ">{{$counter}}</td>
                            <?php $counter++ ?>

                        <td>
                            <div class="td_rect">
                                {{$classroom->name}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                @foreach($classroom->activities as $activity)
                                    {{$activity->name}} &emsp;
                                @endforeach
                            </div>
                        </td>
                        <td>
                            @can('edit classes-activities')
                                <a href="{{route('activity-classrooms.edit',$classroom->id)}}"
                                   class="btn save-button btn-success  w-50 me-1 ms-1   ">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                    {{-- {{__('public.edit')}} --}}
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
                        {{$classrooms->links()}}
                    </div>
                @endif
            </div>


            <!-- pagination down code -->
            @include('layouts.pagination.pagination_down')

        </div>
    </div>
</div>
