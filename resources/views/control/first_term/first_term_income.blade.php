{{-- واجهة استعراض بيانات الطلاب العامة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">{{__('contol.the first term marks')}}</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('students.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row">
                            <label class="col-10">
                                <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-header  mt-3 mb-3">
            <div class="row">
                <div class="col">
                    <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()" id="select_bt">{{__('public.select')}}</button>
                    <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
                </div>
                <div class="col row mt-2">
                    <label class="col title-5"> محصلة <span class="title-3">الترم الأول</span> </label>
                    <label class="col title-5 ">للعام الدراسي <span class="title-3">2024-2025</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" mark_table" id="check_table" >
                    <thead >
                        {{-- <tr>
                            <th colspan="">المحصلة الختامية الترم الأول</th>
                        </tr> --}}
                        <tr class="">
                            <th class="num_table " rowspan="2">
                                <div class=" ">
                                    <input type="checkbox" id="select_all"
                                    style="display: none" >
                                </div>
                                <div class=" ">
                                    {{__('public.num')}}
                                </div>
                                
                            </th>
                            <th class="" >id</th>
                            <th class="" >  Name </th>
                            <th class="th-hea" > photo </th>

                            {{-- 1 --}}
                            <th class="th-hea " >شهر 1 <div>20</div></th>
                            <th class="th-hea " >شهر 2 <div>20</div></th>
                            <th class="th-hea " >شهر 3 <div>20</div></th>
                            <th class="th-hea text-dark" >المحصلة النهائية <div>20</div></th>
                            <th class="th-hea text-dark" >الأختبار النهائي <div>30</div></th>
                            <th class="th-hea text-danger" >المجموع <div>700</div></th>
                            <th class="th-hea text-success" >المحصلة النصفية <div>20</div></th>
                            <th class="th-hea text-info" >Percent <div>100%</div></th>
                            <th class="th-hea text-danger" >النتيجة <div>700</div></th>
                            <th class="th-hea text-success" >الترتيب <div>700</div></th>
                            <th class="th-hea " >mor info</th>
                                {{-- buttons --}}
                                    
                        </tr>
                    </thead>
                    {{-- ====================== --}}

                    <tbody>
                        <tr class="test_1">
                            <td class="num_table"><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none"></td>
                            <td>id</td>
                            <td>khaled abdulnaser mansour</td>
                            <td><img src="#"
                                class="student-img" alt="photo">
                            </td>
                            {{-- td sub 1 --}}
                            <td>10</td>
                            <td>20</td>
                            <td>20</td>
                            
                            <td class="text-dark font_bold">20</td>
                            <td class="text-dark font_bold">30</td>
                            <td class="text-danger font_bold">700</td>
                            <td class="text-success font_bold">20</td>
                            <td class="text-info font_bold">90%</td>
                            <td class="text-danger font_bold">ناجح</td>
                            <td class="text-success font_bold">الأول</td>

                            {{-- td process 8 --}}
                            <td class="">
                                <a href='/all_marks_of_first_term'
                                    class="btn save-button text-info ">
                                    <i class="text-info fa-solid fa-info-circle"></i> {{__('Student.more info')}} </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
