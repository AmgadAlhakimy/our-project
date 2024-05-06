<div>
    <main class="main">
        <section class="section ">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            {{-- <!-- Start parent info  --> --}}
            <h3 class="container-title">{{__('Student.parent info')}}</h3>
            <div class="container  containers-style ">
                <div class="row">
                    <!-- father name  -->
                    <div class="box ">
                        <label for="father">{{__('Student.parent info')}}</label>
                        <div class="w-100 mt-5">
                            <button wire:click="resetFather"
                               class=" save-button  w-full mt-3 p-3">{{__('Student.change father')}}</button>
                        </div>
                    </div>
                    <div class="box">
                        <label for="className " class="form-label">{{__('Student.parent info')}}</label>
                        @if(sizeof($fathers) < 1 or $showSelect === true)
                            <select id="className " class="form-control" wire:model="studentForm.relative_id"
                                    value="{{old('relative_id')}}">
                                <option value="" selected disabled>{{__('student.please select the father')}}</option>
                                @foreach($relatives as $relative)
                                    <option class="text-center"
                                            value="{{$relative->id}}">{{$relative->father_name}}</option>
                                @endforeach
                            </select>
                            @error('studentForm.relative_id')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        @else
                            <h1>{{$father}}</h1>
                        @endif
                    </div>
                    <!-- garden number  -->
                </div>
            </div>
            <!-- End parent info  -->
{{--            <form method="post" action="{{route('students.store')}}" enctype="multipart/form-data">--}}
                <form wire:submit="storeStudent">
                @csrf
                <!-- Start personal info  -->
                <h3 class="container-title">{{__('create Student')}}</h3>
                <div class="container containers-style ">
                    <div class="row">
                        {{-- 1 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3 "
                                   for="english-name">{{__("Student.Student's name in arabic")}}</label>
                            <input type="text" class="form-control" id='name_ar' wire:model="studentForm.name_ar"
                                   value="{{old('name_ar')}}">
                            @error('studentForm.name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 2 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                   for="arab-name">{{__("Student.Student's name in english")}}</label>
                            <input type="text" class="form-control " id='arab-name' wire:model="studentForm.name"
                                   value="{{old('name')}}">
                            @error('studentForm.name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}

                        <div class="box col">
                            <label class="" for="photo">{{__('Student.photo')}}</label>
                            <input type="file" class="form-control " id="photo" wire:model.live="studentForm.photo"
                                   value="{{old('photo')}}">
                            @error('studentForm.photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 4 --}}
                        <div class="box row">
                            <div class="col-lg-6 col-md-6">
                                <label for="address">{{__("Student.Student's address in arabic")}}</label>
                                <input type="text" class=" form-control ms-2 me-2" id='address'
                                       wire:model="studentForm.address_ar"
                                       value="{{old('address_ar')}}">
                                @error('studentForm.address_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- -- --}}
                            <div class="col-lg-6 col-md-6 ">
                                <label for="address">{{__("Student.Student's address in english")}}</label>
                                <input type="text" class=" form-control ms-2 me-2" id="address"
                                       wire:model="studentForm.address"
                                       value="{{old('address')}}">
                                @error('studentForm.address')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        {{-- 5 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="gender">{{__('Student.gender')}}</label>
                            <select class="col form-select form-control" id="gender" wire:model="studentForm.gender">
                                <option value="" selected>{{__('public.please select the gender')}}</option>
                                <option class="text-center"
                                        value="{{__('Student.male')}}">{{__('Student.male')}}</option>
                                <option class="text-center"
                                        value="{{__('Student.female')}}">{{__('Student.female')}}</option>
                            </select>
                            @error('studentForm.gender')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <input type="hidden" name="gender_ar_m" value="{{__('Student.male_ar')}}">
                        <input type="hidden" name="gender_ar_f" value="{{__('Student.female_ar')}}">
                        {{-- 6 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('Student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age" wire:model="studentForm.birthdate"
                                   value="{{old('birthdate')}}">
                            @error('studentForm.birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 7 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="english-birth-place">{{__('Student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place"
                                   wire:model="studentForm.place_of_birth_ar"
                                   value="{{old('place_of_birth_ar')}}">
                            @error('studentForm.place_of_birth_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('Student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place"
                                   wire:model="studentForm.place_of_birth"
                                   value="{{old('place_of_birth')}}">
                            @error('studentForm.place_of_birth')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="className" class="form-label">{{__('Student.level')}}</label>
                            <label for="educational_level">Select an Educational Level:</label>
                            <select  class="form-control" wire:model.live="selectedLevel">
                                <option value="" selected>{{__('public.select level')}}</option>
                                @foreach($levels as $level)
                                    <option class="text-center" value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                            </select>
                            @error('studentForm.educational_level')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        @if(!is_null($selectedLevel))
                        <div class="box col-lg-6 col-md-6 ">
                            <label for="classroom">Select a Classroom:</label>
                            <select id="classroom" class="form-control" wire:model="studentForm.selectedClassrooms">
                                <option value="">Select Educational Level First</option>
                                @foreach($classrooms as $classroom)
                                <option value="{{$classroom->id}}">{{$classroom->name}}</option>
                                @endforeach
                            </select>
                            @error('studentForm.selectedClassrooms')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        @endif
                    </div>
                </div>
                <!-- End personal info  -->

                <!-- Start health info  -->
                <h3 class="container-title ">{{__('Student.health info')}}</h3>
                <div class="container containers-style mb-5">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <h4 class="p-1 ">{{__('Student.does the Student')}}</h4>

                            {{-- 1 --}}
                            <label class="mt-4">{{__('Student.take any medicine ?')}}</label>
                            {{-- ---- --}}
                            <div class="row ">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" wire:model="studentForm.take_medicine"
                                           id="takeMedicineE"
                                           value="{{old('take_medicine')}}" onchange="toggleInput()">
                                    <label class="form-label col rounded" for="takeMedicineE"></label>
                                </div>
                                {{-- -*- --}}
                                @error('studentForm.take_medicine')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col " wire:model="studentForm.medicine_desc"
                                       id="std_medicine_desc_1" value="{{old('medicine_desc')}}"
                                       aria-label="Text input with radio button" placeholder="desc in english" hidden>
                                @error('studentForm.medicine_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col"
                                       wire:model="studentForm.medicine_desc_ar"
                                       id="std_medicine_desc_2" value="{{old('medicine_desc_ar')}}"
                                       aria-label="Text input with radio button" placeholder="desc in arabic" hidden>
                                @error('studentForm.medicine_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            {{-- 2 --}}
                            {{-- -------------------------------- --}}
                            <label class="mt-4">{{__('Student.have an allergy ?')}}</label>
                            {{-- ---- --}}
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" wire:model="studentForm.have_allergy"
                                           id="haveAllergy"
                                           value="{{old('have_allergy')}}" onchange="toggleInput()">

                                    <label class="form-label col rounded" for="haveAllergy"></label>
                                </div>
                                {{-- -*- --}}
                                @error('studentForm.have_allergy')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" wire:model="studentForm.allergy_desc"
                                       id="std_allergy_desc_1"
                                       aria-label="Text input with radio button" value="{{old('allergy_desc')}}"
                                       placeholder="desc in english" hidden>
                                @error('studentForm.allergy_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col" wire:model="studentForm.allergy_desc_ar"
                                       id="std_allergy_desc_2" value="{{old('allergy_desc_ar')}}"
                                       aria-label="Text input with radio button" placeholder="desc in arabic" hidden>
                                @error('studentForm.allergy_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- 3 --}}
                            {{-- -------------------------------- --}}
                            <label class="mt-4">{{__('Student.have any health problem ?')}}</label>
                            {{-- ---- --}}
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                    <input class="toggle col" type="checkbox" wire:model="studentForm.have_health_problem"
                                           id="healthProblem" value="{{old('have_health_problem')}}"
                                           onchange="toggleInput()">
                                    <label class="form-label col rounded" for="healthProblem"
                                           id="healthProblem"></label>
                                </div>
                                {{-- -*- --}}
                                @error('studentForm.have_health_problem')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col"
                                       wire:model="studentForm.health_problem_desc"
                                       id="std_health_desc_1"
                                       aria-label="Text input with radio button" value="{{old('health_problem_desc')}}"
                                       placeholder="desc in english" hidden>
                                @error('studentForm.health_problem_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col"
                                       wire:model="studentForm.health_problem_desc_ar"
                                       id="std_health_desc_2"
                                       value="{{old('health_problem_desc_ar')}}"
                                       aria-label="Text input with radio button" placeholder="desc in arabic" hidden>
                                @error('studentForm.health_problem_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            {{-- ----------------------------------- --}}
                        </div>
                    </div>
                </div>
                <!-- End health info  -->
                <!-- Start final box -->
                <h3 class="container-title">{{__('Student.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note">{{__('Student.note')}}</label>
                            <textarea wire:model="studentForm.note" class="form-control" id="std_Note" cols="50"
                                      rows="5">{{old('note')}}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">
                    Next
                    <div wire:loading class="spinner-border spinner-border-sm"></div>
                </button>
                <!-- End final box -->
            </form>
        </section>
    </main>
</div>

