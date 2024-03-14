{{-- واجهة استعراض الغياب من الفصول عبر مشرف الفصل--}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Absect Students</h4>
                <div class="row col ">
                    <input class="col search2" placeholder="{{__('public.search')}}">
                    <button class="col-1 save-button search-button ">{{__('public.search')}}</button>
                </div>
            </div>
            {{--  --}}
            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="{{old('sex')}}">
                    <option class="text-center"
                            value="{{__('Student.male')}}">{{__('Student.male')}}</option>
                    <option class="text-center"
                            value="{{__('Student.female')}}">{{__('Student.female')}}</option>
                </select>
                @error('sex')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class="table-section shadow-none">
        <div class="card table-section ">
            <table class=" " >
                <thead>
                    <tr>
                        <th ><div class="th-head-1  " >id</div></th>
                        <th ><div class="th-head-3" >Name</div></th>
                        <th ><div class="th-head-2" >photo</div></th>
                        <th ><div class="th-head-2" >class</div></th>
                        <th ><div class="th-head-4" >note</div></th>
                        <th ><div class="th-head-2" >processes</div></th>
                        <th ><div class="th-head-1" ></div></th>
                        <th ><div class="th-head-1" ></div></th>

                    </tr>
                </thead>
                <tbody>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            {{----------------**************--------------}}
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        {{-- <td><button class="btn save-button btn-info me-5 w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td> --}}
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection

<!-- <th ><div class="th-head-3" >father name</div></th>
<th ><div class="th-head-3" >father work</div></th>
<th ><div class="th-head-3" >father contact 1</div></th>
<th ><div class="th-head-3" >father contact 2</div></th>
<th ><div class="th-head-3" >mother name</div></th>
<th ><div class="th-head-3" >mother work</div></th>
<th ><div class="th-head-3" >mother contact 1</div></th>
<th ><div class="th-head-3" >mother contact 2</div></th>
<th ><div class="th-head-3" >next to kin</div></th>
<th ><div class="th-head-3" >next to kin relationship</div></th>
<th ><div class="th-head-3" >next to kin contact</div></th>
<th ><div class="th-head-4" >note</div></th>
<th ><div class="th-head-2" >processes</div></th>
<th ><div class="th-head" > </div></th>
-->

<!--
<main class=" m-3">
<table class="table my-card table-hover table-striped ">
    <thead>
    <tr>
        <th ><div class="th-head-1  " >id</div></th>
        <th ><div class="th-head-3" >Name</div></th>
        <th ><div class="th-head-2" >photo</div></th>
        <th ><div class="th-head-4" >address 1</div></th>
        <th ><div class="th-head-4" >address 2</div></th>
        <th ><div class="th-head-1" >sex</div></th>
        <th ><div class="th-head-2" >birth date</div></th>
        <th ><div class="th-head-3 " >place of birth</div></th>
        <th ><div class="th-head-3" >date of joining</div></th>
        <th ><div class="th-head-3" >take medicine</div></th>
        <th ><div class="th-head-3" >medicine description</div></th>
        <th ><div class="th-head-3" >have allergy</div></th>
        <th ><div class="th-head-3" >allergy description</div></th>
        <th ><div class="th-head-3" >health problem</div></th>
        <th ><div class="th-head-4 ">health problem description</div> </th>

        <th ><div class="th-head-3" >father name</div></th>
        <th ><div class="th-head-3" >father work</div></th>
        <th ><div class="th-head-3" >father contact 1</div></th>
        <th ><div class="th-head-3" >father contact 2</div></th>
        <th ><div class="th-head-3" >mother name</div></th>
        <th ><div class="th-head-3" >mother work</div></th>
        <th ><div class="th-head-3" >mother contact 1</div></th>
        <th ><div class="th-head-3" >mother contact 2</div></th>
        <th ><div class="th-head-3" >next to kin</div></th>
        <th ><div class="th-head-3" >next to kin relationship</div></th>
        <th ><div class="th-head-3" >next to kin contact</div></th>
        <th ><div class="th-head-4" >note</div></th>
        <th ><div class="th-head-2" >processes</div></th>
        <th ><div class="th-head" > </div></th>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 1</td>
            <td>khalid abdulnasser mansour</td>
            <td>no photo in this moment </td>
            <td>darsalm after the aljaady hosbital</td>
            <td>alsafia after the alkhateb resturant</td>
            <td>male</td>
            <td>12-10-2004</td>
            <td>sana'a</td>
            <td>12-2-2020</td>
            <td>no</td>
            <td>none</td>
            <td>yes</td>
            <td>from same frots</td>
            <td>yes</td>
            <td>he can't preth verey will</td>
            <td>ali muhammad</td>
            <td>taxi driver</td>
            <td>32423432434</td>
            <td>234324324</td>
            <td>fatima</td>
            <td>house ceber</td>
            <td>234324324</td>
            <td>234324434</td>
            <td>salim mohammed</td>
            <td>uncle</td>
            <td>3209409432</td>
            <td>Lorem ipsum dolor, sit amet </td>


            {{-- <td><a href="{{route('classrooms.edit',$class->id)}}" class="save-button btn w-100 mt-1">Edit</a></td>
                <form method="post" action="{{route('classrooms.destroy',$class->id)}}">
            <td><button class="btn clear-button w-100 mt-1">Delete</button></td>
                </form> --}}



        </tr>
    </tbody>
</table>
</main> -->
