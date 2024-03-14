{{-- واجهة اسعراض كل كل الدرجات الشهرية --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row ">
                <div class="box mb-1 mt-2 col-4">
                    <img  class=" cards_img" src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="skills"/>
                </div>
                <div class="text-center col row center_y_x me-1 ms-1">
                    <label class="col-12 cards_title mt-1 mb-1"> Emad nasr mansour </label>
                    <label class="col-12 cards_sup_title mt-1 mb-1">i7676</label>
                    <div class="col row">
                        <label class="col title-5"> محصلة شهر <span class="title-3">يناير</span> </label>
                        <label class="col title-5 ">للعام الدراسي <span class="title-3">2024-2025</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-section">
            <div class="card table-section ">
                <table class=" mark_table" id="check_table" >
                    <thead >
                        <tr class="">
                            <th class="" rowspan="2"> المادة </th>
                            <th class="th-hea">سلوك<div>10</div></th>
                            <th class="th-hea">Oral.E<div>10</div></th>
                            <th class="th-hea"> H.W<div>20</div> </th>
                            <th class="th-hea">Exam<div>60</div></th>
                            <th class="th-hea text-dark" rowspan="">total <div>100</div></th>
                            <th class="th-hea text-success">كتابة</th>
                            <th class="th-hea text-danger">التقدير</th>
                            
                            
                        </tr>
                    </thead>
                    {{-- ====================== --}}
                    <tbody>
                        {{-- sub 1 --}}
                        <tr class="test_1">
                            <td class="num_table" >رياضيات</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                        {{-- sub 2 --}}
                        <tr class="test_1 mt-4">
                            <td class="num_table" >علوم</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                        {{-- sub 3 --}}
                        <tr class="test_1 mt-4">
                            <td class="num_table" >قران</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                        {{-- sub 4 --}}
                        <tr class="test_1 mt-4">
                            <td class="num_table" >عربي</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                        {{-- sub 5 --}}
                        <tr class="test_1 mt-4">
                            <td class="num_table" >الأنجليزية</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                        {{-- sub 6 --}}
                        <tr class="test_1 mt-4">
                            <td class="num_table" >اسلامية</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                        {{-- sub 7 --}}
                        <tr class="test_1 mt-4">
                            <td class="num_table" >كمبيوتر</td>
                            <td>10</td>
                            <td>10</td>
                            <td>20</td>
                            <td>60</td>
                            <td class="text-dark font_bold">100</td>
                            <td class="text-success font_bold">مائة درجة</td>
                            <td class="text-danger font_bold">ممتاز</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" mark_table" id="check_table" >
                    <thead >
                        <tr class="">
                            <th class="text-dark" colspan="4"> المجموع <div>700</div></th>
                            <th class="th-hea text-success " colspan="">700</th>
                            <th class="" colspan="2"> ايام الغياب </th>
                            <th class="text-warning" colspan="1"> 8 </th>
                        </tr>
                        <tr>
                            
                            <th class="text-dark" colspan="4"> المجموع بعد خصم الغياب </th>
                            <th class="th-hea text-success " colspan="2">700</th>
                            <th class="th-hea " colspan="2">سبعمائة درجه</th>
                        </tr>
                        <tr class="">
                            <th class="th-hea  "> المعدل<div>100%</div></th>
                            <th class="th-hea text-success " colspan="">100%</th>
                            <th class="th-hea ">التقدير</th>
                            <th class="th-hea text-success " colspan="2">ممتاز</th>
                            <th class="th-hea " colspan="">النتيجة النهائية</th>
                            <th class="th-hea text-info bg-success" colspan="2">ناجح</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        <div class="box mt-4">

            {{-- <a href='/'
                    class="btn save-button btn-info me-2 ms-2 ">
                    <i class="fa-solid fa-info-circle"></i> {{__('Student.more info')}} </a> --}}

                <a href="#"
                    class="btn save-button btn-success me-2 ms-2 ">
                    <i class="fa-solid fa-print"></i> {{__('public.print')}} </a>
        </div>
    </div>
@endsection
