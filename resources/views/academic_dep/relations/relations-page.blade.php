@extends('layouts.sidebar')
@section('content')
<body>
    </header> 
    <main class="main ">
        <section class="section ">
            <h1 data-text="" class="p-relative title-1">ربط العلاقات</h1>


            <!-- Start final box -->
            <h3 class="container-title">اختر العلاقة</h3>
            <div class="container containers-style">
                    <div class="box row"> 

                        <div class="notes col-lg-6 col-md-6 col-sm-12">
                            <a href="/class-"class="li-link">
                                <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                    <div class="relation-title"> المرحلة الدراسية بالفصول </div></button>
                            </a>
                        </div>

                        <div class="notes col-lg-6 col-md-6 col-sm-12">
                            <a href="/class-subjects"class="li-link">
                                <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                    <div class="relation-title"> الفصول بالمواد الدراسية </div></button>
                            </a>
                        </div>

                        <div class="notes col-lg-6 col-md-6 col-sm-12">
                            <a href="/class-activites"class="li-link">
                                <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                    <div class="relation-title"> الفصل بالأنشطة   </div></button>
                            </a>
                        </div>

                        <div class="notes col-lg-6 col-md-6 col-sm-12">
                            <a href="/class-teatcher"class="li-link">
                                <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5">
                                    <div class="relation-title"> المدرس بفصولة التدريسية</div></button>
                            </a>
                        </div>

                        <div class="notes col-lg-12 col-md-12 col-sm-12">
                            <a href="/teacher-subjects"class="li-link">
                                <button class="relation-button pt-5 pb-5 " id="" cols="50" rows="5"><div class="relation-title">المدرس بالمواد الخاصة بة  </div></button>
                            </a>
                        </div>

                    </div>
            </div>
            <!-- End final box -->
    </main>
</body>
@endsection