@extends('layouts.sidebar')
@section('content')
<div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Outcame for the month</h4>
                <div class="row col ">
                    <input class="col search2" placeholder="{{__('public.search')}}">
                    <button class="col-1 save-button search-button ">{{__('public.search')}}</button>
                </div>
            </div>
            {{--  --}}
            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="{{old('sex')}}">
                    <option class="text-center"
                            value="{{__('student.male')}}">{{__('student.male')}}</option>
                    <option class="text-center"
                            value="{{__('student.female')}}">{{__('student.female')}}</option>
                </select>
                @error('sex')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            {{-- the thacher name and the month --}}

            <div class="cards-container  third-card">
                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Techer</h4>
                    <h4 class=" Names">mohammad mohsen</h4>
                </div>

                <div class="card-info card-info_2 col ms-2 me-2">
                    <h4 class=" me-2 ms-2">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
        <div class=" table-section ">
            <div class="card table-section ">
            <table class=" " >
                <thead>
                    <tr class="">
                        <th scope="col"><div class="th-head-1 " >id</div></th>
                        <th scope="col"><div class="th-head-3" >Name</div></th>
                        <th scope="col"><div class="th-head-2" >photo</div></th>
                        <th scope="col"><div class="th-head-1" >Exam</div></th>
                        <th scope="col"><div class="th-head-1" >H.W</div></th>
                        <th scope="col"><div class="th-head-1" >Oral.E</div></th>
                        <th scope="col"><div class="th-head-1" >سلوك</div></th>
                        <th scope="col"><div class="th-head-1 " >Total</div></th>
                        <th scope="col"><div class="th-head-1" >محصلة</div></th>
                        <th scope="col"><div class="th-head-1" >Percent</div></th>
                        <th scope="col"><div class="th-head-2">Processes</div></th>
                        <th scope="col"><div class="th-head-2" ></div></th>
                        <th scope="col"><div class="th-head-2" >Print</div></th>
                        <th scope="col"><div class="th-head-1" ></div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-01.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-02.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                </thead>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-01.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-02.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                </thead>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-01.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-02.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                </thead>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-01.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../../public/assets/images/layouts/skills-02.jpg" class="student-img" alt=""></td>
                        <td><input type="number" class=" form-control " id='Exam-Mark' placeholder="_" min="0" max="40"></td>
                        <td><input type="number" class=" form-control " id='HW-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='Oral-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='behavior-Mark' placeholder="_" min="0" max="20"></td>
                        <td><input type="number" class=" form-control " id='total-Mark' placeholder="_" min="" max=""></td>
                        <td><label for="">33</label></td>
                        <td><input type="number" class=" form-control " id='Percent-Mark' placeholder="_" min="" max=""></td>
                        <td><button class="save-button btn-success w-100">Edit <i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100">Delet <i class="fa-solid fa-trash"></i></button></td>
                        <td><button class="btn save-button btn-info me-5 w-100">Print<i class="ms-5 fa-solid fa-print"></i></button></td>
                        <td></td>
                    </tr>
                </tbody>


                        </div>
        </div>
    </div>
</div>
@endsection

