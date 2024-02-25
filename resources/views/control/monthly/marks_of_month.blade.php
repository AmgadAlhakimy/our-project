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
            <div class="row">
                <div class="col">
                    <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()" id="select_bt">{{__('public.select')}}</button>
                    <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
                </div>
                <div class="col row mt-2">
                    <label class="col title-5"> محصلة <span class="title-3"> شهر 1</span> </label>
                    <label class="col title-5 ">للعام الدراسي <span class="title-3">2024-2025</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="table-section">
            <div class="card table-section ">
                <table class=" mark_table" id="check_table" >
                    <thead >
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
                            <th class="th-hea " colspan="3">قرآن كريم</th>
                            <th class="th-hea " colspan="3">التربية الأسلامية</th>
                            <th class="th-hea " colspan="3">اللغة العربية</th>
                            <th class="th-hea " colspan="3">اللغة الأنجليزية</th>
                            <th class="th-hea " colspan="3">العلوم</th>
                            <th class="th-hea " colspan="3">الرياضيات</th>
                            <th class="th-hea " colspan="3">الكمبيوتر</th>
                            

                            {{-- <th class="th-hea">
                                Exam<div>60</div>
                            </th>
                            <th class="th-hea">
                                H.W<div>20</div>                                
                            </th>
                            <th class="th-hea">
                                Oral.E<div>10</div>
                            </th>
                            <th class="th-hea">
                                سلوك<div>10</div>
                            </th> --}}
                            
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
                            <th class="th-hea">Percent<div>100%</div></th>
                            
                            {{-- sub 2 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>
                            <th class="th-hea">Percent<div>100%</div></th>
                            
                            {{-- sub 3 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>
                            <th class="th-hea">Percent<div>100%</div></th>
                            
                            {{-- sub 4 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>
                            <th class="th-hea">Percent<div>100%</div></th>
                            
                            {{-- sub 5 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>
                            <th class="th-hea">Percent<div>100%</div></th>
                            
                            {{-- sub 6 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>
                            <th class="th-hea">Percent<div>100%</div></th>
                            
                            {{-- sub 7 --}}
                            <th class="th-hea">Total<div>100</div></th>
                            <th class="th-hea">محصلة<div>20</div></th>
                            <th class="th-hea">Percent<div>100%</div></th>

                            {{-- last info --}}
                        </tr>
                    </thead>
                    {{-- ====================== --}}

                    <tbody>
                        <tr class="test_1 ">
                            <td class="num_table"><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none"></td>
                            <td>id</td>
                            <td>khaled abdulnaser mansour</td>
                            <td><img src="#"
                                class="student-img" alt="photo">
                            </td>
                            {{-- td sub 1 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>
                            {{-- td sub 2 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>
                            {{-- td sub 3 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>
                            {{-- td sub 4 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>
                            {{-- td sub 5 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>
                            {{-- td sub 6 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>
                            {{-- td sub 7 --}}
                            <td>89</td>
                            <td>20</td>
                            <td>90%</td>

                            {{-- td info 8 --}}
                            <td class="text-dark font_bold">89</td>
                            <td class="text-success font_bold">100%</td>
                            <td class="text-danger font_bold">20</td>

                            {{-- td process 8 --}}
                            <td class="">
                                <a href='/all_m_marks'
                                    class="btn save-button btn-info ">
                                    <i class="fa-solid fa-info-circle"></i> {{__('Student.more info')}} </a>
                            </td>



                            {{-- buttons --}}
                            {{-- <td>
                                <a href="#"
                                    class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#">
                                    <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                                </button>
                                

                                <div class="modal fade" id="#}"
                                        tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete')}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="#">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td> --}}
                            {{-- واجهة المعلومات او الاستمارة الكاملة الخاصة بالطالب --}}
                            {{-- <td>
                                <a href="#"
                                    class="btn save-button btn-info w-100">
                                    <i class="fa-solid fa-info-circle"></i> {{__('Student.more info')}} </a>
                            </td> --}}
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
