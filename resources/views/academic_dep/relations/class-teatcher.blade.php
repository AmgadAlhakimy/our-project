@extends('layouts.sidebar')
@section('content')
<body>
    <main class="main ">
        <section class="section" >
            <!-- <h2 class="p-relative title-1">اختر فصول المدرس</h2> -->
            <form action="">
                <h3 class="container-title">اضف فصول للمدرس</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">the Teacher</label>
                                <select class="form-select form-control " id="level-class">
                                    <option  value="">ahmad</option>
                                    <option  value="">khalid</option>
                                    <option  value="">amgad</option>
                                </select>
                            </div>
                            <hr>
                            <!-- 2 -->
                                <div class="box mb-1">
                                    <label class="" for="level-class">choose the classes please</label>
                                </div>

                                <div class="box ">
                                        <div class="btn-container ">
                                        <!-- <div class="btn-menu "> -->
                                        <div class="btn-l-container  row">
                                            <!-- -------- start buttons  -->
                                            <label class="btn-l-label col ">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">الصف الاول</span>
                                            </label>
                                            <label class="btn-l-label col">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">الصف الثاني</span>
                                            </label>
                                            <label class="btn-l-label col">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">حضانة </span>
                                            </label>
                                            <label class="btn-l-label col">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">kg1</span>
                                            </label>
                                            <label class="btn-l-label col">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">kg2</span>
                                            </label>
                                            <label class="btn-l-label col">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">الصف الثالث</span>
                                            </label>
                                            <label class="btn-l-label col">
                                                <input class="light-btn" type="checkbox" >
                                                <span class="btn-l-text">reception </span>
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
