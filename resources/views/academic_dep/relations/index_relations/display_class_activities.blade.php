{{------------ واجهة تفت رالمتابعة الخاص بطلاب المدرسة ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card  ">
                <h4 class="col container-title mt-2">{{__('relations.display activities for classes')}}</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="">
                        @method('GET')
                        @csrf
                        <div class="row ">
                            <label class="col-9">
                                <input type="text" required class="form-control"
                                    name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- the select input --}}
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()" id="select_bt">{{__('public.select')}}</button>
            <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
        </div>
        <div class="table-section">
            <div class="card table-section ">
                <table id="check_table">
                    <thead>
                    <tr>
                        {{-- <th class=" me-4 ms-4">
                            
                        </th> --}}
                        <th class="num_table  ">
                            {{__('public.num')}}
                        </th>
                        <th class="th-head-1">{{__('public.id')}}</th>
                        <th class="th-head-3">{{__('public.name')}}</th>
                        <th class="th-head-1">activity 1</th>
                        <th class="th-head-1">activity 2</th>
                        <th class="th-head-1">activity 3</th>
                        <th class="th-head-1">{{__('public.processes')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="test_1 ">
                            <td class="num_table ">
                                num
                            </td>
                            <td>123213</td>
                            <td>classroom 1</td>
                            <td> activity 1</td>
                            <td> activity 2</td>
                            <td> activity 3</td>
                            <td><a href=""
                                class="btn save-button btn-success">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

















{{-- 
<th class="num_table  ">
    <div class="d-flex justify-content-between align-items-center ">
        <div class="me-1 ms-1 bg-primary">
            <input type="checkbox" id="select_all" 
            style="displa: none" >
        </div>
        <div class=" bg-success ms-1 me-1">
            {{__('public.num')}}
        </div>
    </div>
</th> --}}
