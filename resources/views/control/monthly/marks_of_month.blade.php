{{-- واجهة استعراض بيانات الطلاب العامة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Students Information</h4>
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
            {{-- <div class="row"> --}}
                <div class="col">
                    <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
                </div>
                <div class="col row mt-2">
                    <label class="col title-5"> الصف <span class="title-3">الثالث</span> </label>
                    <label class="col title-5"> محصلة <span class="title-3"> شهر 1</span> </label>
                    <label class="col title-5 ">للعام الدراسي <span class="title-3">2024-2025</span>
                    </label>
                </div>
            {{-- </div> --}}
        </div>
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" mark_table" id="check_table" >
                    <thead >
                        <tr class="">
                            <th rowspan="2" class="num_table">
                                <div class="check_style">
                                    <label >
                                        <input class=" " type="checkbox" name=""  id="select_all" value="">
                                        <i></i>
                                    </label>
                                </div>
                            </th>
                            <th class="num_table " rowspan="2">
                                <div class=" ">
                                    {{__('public.num')}}
                                </div>
                            </th>
                            <th class="" rowspan="2">
                                id
                            </th>
                            <th class="" rowspan="2">
                                Name
                            </th>
                            <th class="th-hea" rowspan="2">
                                photo
                            </th>

                            {{-- 1 --}}
                            <th class="th-hea " colspan="2">قرآن كريم</th>
                            <th class="th-hea " colspan="2">التربية الأسلامية</th>
                            <th class="th-hea " colspan="2">اللغة العربية</th>
                            <th class="th-hea " colspan="2">اللغة الأنجليزية</th>
                            <th class="th-hea " colspan="2">العلوم</th>
                            <th class="th-hea " colspan="2">الرياضيات</th>
                            <th class="th-hea " colspan="2">الكمبيوتر</th>


                            <th class="th-hea text-dark" rowspan="2">total <div>700</div></th>
                            <th class="th-hea  text-success" rowspan="2">Percent <div>100%</div></th>
                            <th class="th-hea text-danger" rowspan="2">المحصلة الختامية <div>20</div></th>

                            <th class="th-hea " rowspan="2">mor info</th>
                                {{-- buttons --}}

                        </tr>
                        <tr class="">
                            {{-- sub 1 --}}
                            <th class="th-head ">Total<div>100</div></th>
                            <th class="th-hea ">محصلة<div>20</div></th>

                            {{-- sub 2 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>

                            {{-- sub 3 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>

                            {{-- sub 4 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>

                            {{-- sub 5 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>

                            {{-- sub 6 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>

                            {{-- sub 7 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>

                            {{-- last info --}}
                        </tr>
                    </thead>
                    {{-- ====================== --}}

                    <tbody>
                        <tr class="test_1 ">
                            <td class="num_table">
                                <div class="check_style">
                                    <label >
                                        <input class="check_item" type="checkbox" name=""  id=" checkbox" value="">
                                        <i></i>
                                    </label>
                                </div>
                            </td>
                            <td class="num_table">
                                1
                            </td>
                            <td>id</td>
                            <td>khaled abdulnaser mansour</td>
                            <td><img src="#"
                                class="student-img" alt="photo">
                            </td>
                            {{-- td sub 1 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td sub 2 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td sub 3 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td sub 4 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td sub 5 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td sub 6 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td sub 7 --}}
                            <td>89</td>
                            <td>20</td>

                            {{-- td info 8 --}}
                            <td class="text-dark font_bold">89</td>
                            <td class="text-success font_bold">100%</td>
                            <td class="text-danger font_bold">20</td>

                            {{-- td process 8 --}}
                            <td class="">
                                <a href='/all_m_marks'
                                    class="btn save-button btn-info ">
                                    <i class="fa-solid fa-info-circle"></i> {{__('CreateStudent.more info')}} </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
