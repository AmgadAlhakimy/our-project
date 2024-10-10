{{-- اضهار المراحل الدراسية المنشئة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}

{{--        <livewire:search-edu-level/>--}}
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}

        <!-- table-hover table-striped -->
        <div class="modal fade" id="delete_all"
            tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"
                            id="exampleModalLabel">{{__('public.delete')}} </h5>
                    </div>
                    <div class="modal-body">
                        {{--                            {{__('public.are you sure you want to delete').$Level->name}}--}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            {{__('public.cancel')}}</button>
                        <form method="post">
                        {{--                                  action="{{route('educational_levels.destroy',$Level->id)}}">--}}
                        @method('DELETE')
                        @csrf
                        <button type="submit"
                                class="btn btn-primary">{{__('public.ok')}}</button>
                            <label for="delete_all_id"></label><input type="text" id="delete_all_id" name="delete_all_id" value=''>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
