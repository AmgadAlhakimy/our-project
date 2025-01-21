
@extends('layouts.sidebar')
@section('content')  


<div class="section me-2 ms-2">
    <div class="containers-style">
        {{-- --------------------------- section الاكاديمي ---------------------------------------------- --}}
        <div class="row ">
            <div class="container-title">
                {{__('public.الاكاديمي')}}
            </div>
            <!-- مربع ادارة المراحل الدراسية -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('eduLevel.educational Level')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('eduLevel.create new educational Level')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('eduLevel.update educational Level')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            
                                            {{__('eduLevel.DELETED EDUCATIONAL LEVELS')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مربع ادارة الفصول -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('classroom.classroom')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('classroom.create new class')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('classroom.update classroom')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('classroom.delete classrooms')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('classroom.HHHHH')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مربع ادارة الأنشطة -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('activity.activity')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('activity.create new Activity')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('activity.update Activity')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('activity.DELETED ACTIVITIES')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('activity.HHHHH')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مربع ادارة المواد الدراسية -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('subject.subjects')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('subject.create new Subject')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('subject.update Subject')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('subject.DELETED SUBJECTS')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('subject.HHHHH')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مربع ادارة المعلم -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('teacher.teachers')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('teacher.add new teacher')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('teacher.update teacher')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('teacher.deleted teachers')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('teacher.HHHHH')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
            {{-- --------------------------- section شؤون الطلاب ---------------------------------------------- --}}
        <div class="row ">
            <div class="container-title">
                {{__('public.الطلاب')}}
            </div>
            <!-- مربع ادارة  اولياء الامور -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('public.ولي_امر')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('public.اضافة')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.تعديل')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('public.عرض')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.حذف')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مربع ادارة الطلاب -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('public.طالب')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('public.اضافة')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.تعديل')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('public.عرض')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.حذف')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
            {{-- --------------------------- section المعلمين ---------------------------------------------- --}}
        <div class="row ">
            <div class="container-title">
                {{__('public.المعلمين')}}
            </div>
            <!-- مربع ادارة دفتر المتابعه -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('public.دفتر_المتابعه')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('public.اضافه')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.تعديل')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('public.عرض')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 4 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.حذف')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 5 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.سلة_المهملات')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="delete"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- مربع ادارة التحضير والغياب -->
            <div class="  col-lg-6 col-md-6 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('public.تحضير')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('public.تسجيل_الحضور_والغياب')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col title-3 me-1 ms-1">
                                            {{__('public.عرض_الغائبين')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="view"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 3 --}}
                            <br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
            {{-- --------------------------- section الانصراف---------------------------------------------- --}}
        <div class="row ">
            <div class="container-title">
                {{__('public.الانصراف')}}
            </div>
            <!-- مربع ادارة الانصراف -->
            <div class="  col-lg-12 col-md-12 col-sm-12 mb-2">
                <div class="cards_info_style">
                    <label class="mt-2">
                        <div class="form-label row ">
                            <div class="check_div mt-2">  
                                <label class="check_style col me-1 ms-1 " >
                                    <input type="checkbox" class="" id="classMain" >
                                    <i class=""></i>
                                </label>
                            </div>
                                {{__('public.الانصراف')}}
                        </div>
                    </label>
                    <hr>
                    <div class="permission class">
                        <div class="sub-permissions">
                            {{-- 1 --}}
                            <label class="mb-2">
                                <div class=" check_style">
                                    <label class="row">
                                        <label for="" class="col  title-3 me-1 ms-1">
                                            {{__('public.تسجيل_النصراف')}}
                                        </label>
                                        <input class="col-1" type="checkbox" name="add"><i></i>
                                    </label>
                                </div>
                            </label>
                            {{-- 2 --}}
                            <label  class="mb-2">
                                <div class=" check_style ">
                                    <label class="row ">
                                        <label for="" class="col   title-3 me-1 ms-1">
                                            {{__('public.عرض_الانصراف')}}
                                        </label> 
                                        <input class="col-1" type="checkbox" name="edit"><i></i>
                                    </label>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
