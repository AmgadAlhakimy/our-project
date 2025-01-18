{{------------ واجهة قائمة الطلاب الخاصة بفصل معين ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}        
        <div class="table-header">
            {{-- the title and search --}}
            <form method="post" action="{{route('students.search')}}">
            <div class="row first-card ">
                <h4 class="col-12 container-title mt-2">{{__('teacher.create check out')}}</h4>
                        @method('GET')
                        @csrf
                <label class="col-12">
                    <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                </label>
            </div>
            </form>
            {{-- the thacher name and the month --}}

            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center Names">frist grade</h4>
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
    <div class=" shadow-none mt-4 ">
        <div class="table-section card  ">
            <table class=" " id="check_table">
                <thead>
                    <tr class="">
                        <th class="th-head-1 form-label">{{__('public.id')}}</th>
                        <th class="th-head-4 form-label">{{__('public.name')}}</th>
                        <th class="th-head-1 form-label">{{__('public.photo')}}</th>
                        <th class="th-head-1 form-label ">{{__('public.leaving')}}</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="td_rect">
                                324
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                mohanad naser mansour
                            </div>
                        </td>
                        <td>
                            <img class="student-img" src="../../../public/assets/images/layouts/skills-01.jpg" alt="">
                        </td>
                        <td class="">
                            <div class="mt-2 check_style">
                                <label >
                                    <input class=" " type="checkbox" name=""  id="" value="{{old('')}}"  >
                                    <i></i>
                                </label>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
        </div>
        
        <div class=" mt-5">
            <div class="box row ">
                <div class="col">
                    <input class="save-button" type="submit" value="{{__('public.save')}}">
                </div>
                <div class="col">
                    <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                </div>
            </div>
        </div>
        
    </div>
@endsection
