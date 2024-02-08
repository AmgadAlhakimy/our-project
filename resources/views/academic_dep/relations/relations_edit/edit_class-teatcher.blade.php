@extends('layouts.sidebar')
@section('content')
<body>
    <main class="main ">
        <section class="section" > 
            <!-- <h2 class="p-relative title-1">اختر فصول المدرس</h2> -->
            <form action="">
                <h3 class="container-title">{{__('relations.edit classes for teacher')}}</h3>
                <div class="container containers-style">
                    <div class="">
                        <div class="row">
                            <!-- 1 -->
                            <div class="box col-12 ">
                                <label for="level-class">{{__('relations.teacher')}}</label>
                                <select class="form-select form-control " id="level-class">
                                    <option  value="">ahmad</option>
                                    <option  value="">khalid</option>
                                    <option  value="">amgad</option>
                                </select>
                            </div>
                            <div>
                                <hr class=" ">
                            </div>
                            <!-- 2 -->
                                <div class="box mb-1">
                                    <label class="" for="level-class">{{__('relations.classes')}}</label>
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
                        <input class="save-button me-2 ms-2" type="submit" value="Save">
                        <input class="clear-button me-2 ms-2" type="reset" value="clear">
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>
@endsection
