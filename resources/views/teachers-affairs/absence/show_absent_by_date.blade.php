{{--   واجهة معلومات الطالب كاملة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="section  ">
        <div class="table-header">
            <div class="col container-title mt-2 ">{{__('absent.absent children today')}}</div>
            <div class="cards-container mt-1 third-card row">
                <div class=" col text-center ">
                    <div class="cards_sup_title">{{$classroom->name}}</div>
                </div>
                <div class=" col text-center ">
                    <div class="cards_title">{{$month}}</div>
                </div>
            </div>
        </div>

        {{-- ---------------------------------- --}}
        <div class=" mt-4">
            <div class="cards_info_style">
                <div class=" pt-3 pb-3 me-4 ms-4">
                    {{-- 1 --}}
                    <label>
                        <input type="date" class="form-control  cards_title  text-center  ">
                    </label>
                </div>
                <div class="mt-3 row">
                    <div class="box col ">
                        <button type="submit" class=" save-button text-center">
                            {{__('public.show')}}
                            <div wire:loading class="spinner-border spinner-border-sm"></div>
                        </button>
                        <button type="reset" class=" clear-button text-center">
                            {{__('public.clear')}}
                        </button>
                    </div>
                </div>
            </div>
        </div>


        <!-- table-hover table-striped -->
        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                        <thead>
                        <tr>
                            <th class="th-head-1 num_table form-label">{{__('public.num')}}</th>
                            <th class="th-head-3 form-label">{{__('public.name')}}</th>
                            <th class="th-head-2 form-label">{{__('public.photo')}}</th>
                            <th class="th-head-1 form-label ">{{__('absent.days of absence')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $counter = 1; ?>
                        @foreach($classroom->students  as $student )
                            <tr class=" ">
                                <td class="num_table ">{{$counter}}</td>
                                <td>
                                    <div class="td_rect">
                                        {{$student->name}}
                                    </div>
                                </td>
                                <td><img
                                        src="{{asset('storage/'.$student->photo)}}"
                                        class="student-img" alt="photo"></td>
                                <td>
                                    <div class="title-3 ">
                                        12
                                    </div>
                                </td>
                                <?php $counter++ ?>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection





