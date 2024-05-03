<div>
    <div class="table-header">
        {{-- the title and search --}}
        <h4 class="form-group container-title">{{__('eduLevel.educational Level info')}}</h4>
        <div class="row first-card mt-4">
            <div class="row">
                <label class="col">
            <div class="row" >
                <label class="col-11">
                    <input wire:model.live.debounce.500ms="search"
                    type="text" class="form-control" name="search">
                </label>
                <i class="col-2 mt-3 fa-regular fa-bell fa-fw"></i>
            </div>
        </div>
    </div>
    </div>

    <div class="table-header mt-3 mb-3" id="paginated">
        <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()"
                id="select_bt">{{__('public.select')}}</button>

        <button class="save-button btn-danger me-1 ms-1"
                type="button" id="btn_delete_all"
            {{--data-bs-target="#delete_all"--}}>
            {{__('public.delete all')}}</button>
    </div>
    <!-- table-hover table-striped -->

    <div class="ms-4 me-4">
        <label class=""> {{__('public.number of rows:')}} </label>
        <select class="num_rows "  wire:model.live="pagination">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="75">75</option>
            <option value="100">100</option>
        </select>
    </div>
    {{-- ------------------------------- --}}

    <div class="table-section shadow-none" >
        <div class="card table-section">
            <table class=" " id="check_table">
                <thead>
                <tr>
                    <th class=" me-4 ms-4">
                        <input type="checkbox" id="select_all"
                            style="display: none">
                    </th>
                    <th>
                        <button id="arrowButton" wire:click="ordering('id')" class="th-head-1">{{__('public.id')}}  <span class="icon-arrow">&UpArrow;</span></button>
                    </th>
                    <th>
                        <button wire:click="ordering('name')" class="th-head-3">{{__('public.name')}} <span class="icon-arrow">&UpArrow;</span></button>
                    </th>
                    <th>
                        <button wire:click="ordering('created_at')"
                            class="th-head-2">{{__('public.created at')}} <span class="icon-arrow">&UpArrow;</span></button>
                    </th>
                    <th>
                        <button wire:click="ordering('updated_at')"
                            class="th-head-2">{{__('public.updated at')}} <span class="icon-arrow">&UpArrow;</span></button>
                    </th>
                    <th colspan="2">
                        <div class="th-head-4">{{__('public.processes')}} </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($levels as $Level)
                    <tr>
                        <td><input type="checkbox" class="check_item ms-2 me-2"
                            value="{{$Level->id}}" id="checkbox" style="display:none"></td>
                        <td>{{$Level->id}}</td>
                        <td>{{$Level->name}}</td>
                        <td>{{$Level->created_at}}</td>
                        <td>{{$Level->updated_at}}</td>
                        <td><a href="{{route('educational_levels.edit',$Level->id)}}"
                            class="btn save-button btn-success w-100">
                                <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                        </td>
                        <td>
                            <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                    data-bs-target="#delete{{$Level->id}}">
                                <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="delete{{$Level->id}}"
                                tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title"
                                                id="exampleModalLabel">{{__('public.delete')}}</h5>
                                        </div>
                                        <div class="modal-body">
                                            {{__('public.are you sure you want to delete').$Level->name}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                {{__('public.cancel')}}</button>
                                            <form method="post"
                                                action="{{route('educational_levels.destroy',$Level->id)}}">
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

    <div class="me-4 ms-4 mt-3">
        {{$levels->links('pagination::bootstrap-5')}}
    </div>
    
<br><br><br><br>
</div>
{{--
السكرول
البحث العدسة بالداخل او غيرها
السهم في رأس الجدول 
--}}
