@extends('layouts.sidebar')
@section('content')
<body>
    <main class="main ">
        <section class="section" >
            <!-- <h1 class="p-relative title-1">اضافة كلاس</h1> -->
            <form action="">
                <h3 class="container-tilte">اضف المواد الخاصة بالمدرس</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">the Teacher</label>
                                <select class="form-select form-control " id="level-class">
                                    <option  value="">امجد</option>
                                    <option  value="">خالد</option>
                                </select>
                            </div>
                            <hr>
                            <!-- 2 -->
                                <div class="box mb-1">
                                    <label class="" for="level-class">choose the subjects please</label>
                                </div>

                                <div class="box ">
                                    <div class="btn-container ">
                                        <!-- <div class="btn-menu "> -->
                                            <div class="btnl-container  row">
                                                <!-- -------- start buttons  -->
                                                <label class="btnl-lable col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">قرآن</span>
                                                </label>
                                                <label class="btnl-lable col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">اسلامية</span>
                                                </label>
                                                <label class="btnl-lable col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">علوم</span>
                                                </label>
                                                <label class="btnl-lable col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">رياضة</span>
                                                </label>
                                                <label class="btnl-lable col ">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">رياضيات</span>
                                                </label>
                                                <label class="btnl-lable col">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text"> عربي</span>
                                                </label>
                                                <label class="btnl-lable col">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">انجليزي </span>
                                                </label>
                                                <label class="btnl-lable col">
                                                    <input class="light-btn" type="checkbox" >
                                                    <span class="btnl-text">اجتماعيات</span>
                                                </label>

                                                <!-- -------- end buttons  -->
                                            </div>
                                    </div>
                                </div>
                            <!-- </div> -->
                        </div>



                    </div>
                </div>
                <div class=" row">
                    <div class="box ">
                        <input class="save-button " type="submit" value="Save " >
                        <input class="clear-button " type="reset" value="clear" >
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
@endsection
