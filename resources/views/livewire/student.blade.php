<div>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    {{-- <!-- Start parent info  --> --}}

    <h3 class="container-title">{{__('Student.choose parents')}}</h3>
    <div class="container  containers-style">

        <div class="">
            <!-- father name  -->
            <div class="row box">
                <label>
                    <input class="form-control col-12" type="text" list="relative" wire:model.live.debounce.500ms="studentForm.relative_id"
                    placeholder={{__('student.please select the father')}}/>

                </label>
                <datalist id="relative">
                    <option value="" selected>{{__('student.please select the father')}}</option>
                    @foreach($relatives as $relative)
                        <option value="{{$relative->id}}">{{$relative->father_name}}</option>
                    @endforeach
                </datalist>
                <br>
                @error('studentForm.relative_id')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror

            </div>
            <!-- garden number  -->
        </div>
    </div>
    <!-- End parent info  -->
    <form wire:submit="storeStudent">
        @csrf
        <!-- Start personal info  -->
        <h3 class="container-title">{{__('create Student')}}</h3>
        <div class="container containers-style">
            <div class="row">
                {{-- 1 --}}
                <div class="box col-lg-6 col-md-12">
                    <label class="  title-3"
                           for="english-name">{{__("Student.Student's name in arabic")}}</label>
                    <input type="text" class="form-control" id='name_ar'wire:model.live.debounce.500ms="studentForm.name_ar"
                           value="{{old('name_ar')}}">
                    @error('studentForm.name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- 2 --}}
                <div class="box col-lg-6 col-md-12">
                    <label class="text-center"
                           for="arab-name">{{__("Student.Student's name in english")}}</label>
                    <input type="text" class="form-control" id='arab-name'wire:model.live.debounce.500ms="studentForm.name"
                           value="{{old('name')}}">
                    @error('studentForm.name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- 3 --}}
                <div class="">
                    <div class="row">
                        <div class="box col-8">
                            <label class="" for="photo">{{__('Student.photo')}}</label>
                            <input type="file" class="form-control" id="photo"
                                   wire:model.live.debounce.500ms="studentForm.photo"
                                   value="{{old('photo')}}">
                            @error('studentForm.photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="col mt-4">
                            <button class="col w-100 save-button" wire:click="resetImage">Reset</button>
                        </div>
                    </div>
                </div>

                @if($studentForm->photo)
                    <div class="box d-flex justify-content-center">
                        <img class="personal_img mt-4" alt="photo"
                             src="{{$studentForm->photo->temporaryUrl()}}">
                    </div>
                @endif
                {{-- 4 --}}

                <div class="box col-lg-6 col-md-6">
                    <label for="address">{{__("Student.Student's address in arabic")}}</label>
                    <input type="text" class=" form-control" id='address'
                          wire:model.live.debounce.500ms="studentForm.address_ar"
                           value="{{old('address_ar')}}">
                    @error('studentForm.address_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- -- --}}
                <div class="box col-lg-6 col-md-6">
                    <label for="address">{{__("Student.Student's address in english")}}</label>
                    <input type="text" class=" form-control" id="address"
                          wire:model.live.debounce.500ms="studentForm.address"
                           value="{{old('address')}}">
                    @error('studentForm.address')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                {{-- 5 --}}
                <div class="box col-lg-6 col-md-6">
                    <label for="gender">{{__('Student.gender')}}</label>
                    <select class="col form-select form-control" id="gender"wire:model.live.debounce.500ms="studentForm.gender">
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
                    <input type="date" class="form-control" id="age"wire:model.live.debounce.500ms="studentForm.birthdate"
                           value="{{old('birthdate')}}">
                    @error('studentForm.birthdate')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- 7 --}}
                <div class="box col-lg-6 col-md-6">
                    <label for="english-birth-place">{{__('Student.place of birth in arabic')}}</label>
                    <input type="text" class="form-control" id="english-birth-place"

                          wire:model.live.debounce.500ms="studentForm.place_of_birth_ar"
                           value="{{old('place_of_birth_ar')}}">
                    @error('studentForm.place_of_birth_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- 8 --}}
                <div class="box col-lg-6 col-md-6">
                    <label for="arabic-birth-place">{{__('Student.place of birth in english')}}</label>
                    <input type="text" class="form-control" id="arabic-birth-place"

                          wire:model.live.debounce.500ms="studentForm.place_of_birth"
                           value="{{old('place_of_birth')}}">
                    @error('studentForm.place_of_birth')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                {{-- 8 --}}
                <div class="box col-lg-6 col-md-6">
                    <label for="className" class="form-label">{{__('Student.level')}}</label>
                    <select class="form-control" wire:model.live.debounce.500ms="selectedLevel">
                        <option value="" selected>{{__('public.select level')}}</option>
                        @foreach($levels as $level)
                            <option class="text-center" value="{{$level->id}}">{{$level->name}}</option>
                        @endforeach
                    </select>
                    @error('selectedLevel')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="box col-lg-6 col-md-6">
                    <label for="classroom">{{__('classroom.classroom')}}</label>
                    <select id="classroom" class="form-control"wire:model.live.debounce.500ms="studentForm.classroom_id">
                        <option value="" selected>{{__('student.select educational level first')}}</option>
                        @if(!is_null($selectedLevel))
                            @foreach($classrooms as $classroom)
                                <option value="{{$classroom->id}}">{{$classroom->name}}</option>
                            @endforeach
                        @endif
                    </select>
                    @error('studentForm.classroom_id')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
        </div>
        <!-- End personal info  -->

        <!-- Start health info  -->
        <h3 class="container-title">{{__('Student.health info')}}</h3>
        <div class="container containers-style mb-5">
            <div class="row">
                <div class="box col-lg-12 col-md-12 row">
                    <h4 class="p-1">{{__('Student.does the Student')}}</h4>

                    {{-- 1 --}}

                    <label class="col d-flex justify-content-end">{{__('Student.take any medicine ?')}}</label>
                    <div class="col mt-2 d-flex justify-content-start">
                        <input class="toggle" type="checkbox" wire:model.live.debounce.500ms="studentForm.take_medicine"
                               id="takeMedicineE"
                               value="{{old('take_medicine')}}" onchange="toggleInput()">
                        <label class="form-label  rounded" for="takeMedicineE"></label>
                    </div>
                    {{-- ---- --}}
                    <div class="row">
                        {{-- -*- --}}
                        @error('studentForm.take_medicine')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        <input type="text" class=" form-control ms-1 me-1 col" wire:model.live.debounce.500ms="studentForm.medicine_desc"
                               id="std_medicine_desc_1" value="{{old('medicine_desc')}}"
                               aria-label="Text input with radio button" placeholder="desc in english" hidden>
                        @error('studentForm.medicine_desc')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        <input type="text" class=" form-control ms-1 me-1 col"
                               live.debounce.500ms="studentForm.medicine_desc_ar"
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
                            <input class="toggle col" type="checkbox" wire:model.live.debounce.500ms="studentForm.have_allergy"
                                   id="haveAllergy"
                                   value="{{old('have_allergy')}}" onchange="toggleInput()">

                            <label class="form-label col rounded" for="haveAllergy"></label>
                        </div>
                        {{-- -*- --}}
                        @error('studentForm.have_allergy')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        <input type="text" class=" form-control ms-1 me-1 col" wire:model.live.debounce.500ms="studentForm.allergy_desc"
                               id="std_allergy_desc_1"
                               aria-label="Text input with radio button" value="{{old('allergy_desc')}}"
                               placeholder="desc in english" hidden>
                        @error('studentForm.allergy_desc')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        <input type="text" class=" form-control ms-1 me-1 col" wire:model.live.debounce.500ms="studentForm.allergy_desc_ar"
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
                            <input class="toggle col" type="checkbox" wire:model.live.debounce.500ms="studentForm.have_health_problem"
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
                               wire:model.live.debounce.500ms="studentForm.health_problem_desc"
                               id="std_health_desc_1"
                               aria-label="Text input with radio button" value="{{old('health_problem_desc')}}"
                               placeholder="desc in english" hidden>
                        @error('studentForm.health_problem_desc')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        <input type="text" class=" form-control ms-1 me-1 col"
                               wire:model.live.debounce.500ms="studentForm.health_problem_desc_ar"
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
                    <textarea wire:model.live.debounce.500ms="studentForm.note" class="form-control" id="std_Note" cols="50"
                              rows="5">{{old('note')}}</textarea>
                </div>
            </div>
        </div>
        <div class="box">
            <button type="submit" class="btn save-button">
                {{__('public.next')}}
                <div wire:loading class="spinner-border spinner-border-sm"></div>
            </button>
        </div>
        <!-- End final box -->
    </form>
</div>
