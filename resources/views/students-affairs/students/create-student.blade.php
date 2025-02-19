<main class="main">
    <section class="section ">
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <form wire:submit="save" enctype="multipart/form-data">
                @csrf
                <h3 class="container-title">{{__('student.choose superior')}}</h3>
                <div class="container  containers-style">
                    <div class="">
                        <!-- father name  -->
                        <div class="row box">
                            <div class="box w-100">
                                <input type="text" id="fatherSearch" list="fathersList"
                                       placeholder="{{ __('student.write the superior here') }}"
                                       class="form-control" wire:model.live.debounce.500ms="search"
                                       oninput="setParentId(this)">
                                <datalist id="fathersList" class="">
                                    @foreach($fathers as $father)
                                        <option value="{{ $father->father_name }}"
                                                data-id="{{ $father->id }}">{{ $father->father_name }}</option>
                                    @endforeach
                                </datalist>
                                @error('parents_id')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <script>
                                function setParentId(input) {
                                    const list = document.getElementById('fathersList');
                                    const options = list.getElementsByTagName('option');

                                    for (let option of options) {
                                        if (option.value === input.value) {
                                            @this.
                                            set('parents_id', option.getAttribute('data-id'));
                                            break;
                                        } else if (input.value.trim() === '') {
                                            @this.
                                            set('parents_id', null); // Clear if the input is empty
                                        } else {
                                            @this.
                                            set('parents_id', 0); // Set default if no match
                                        }
                                    }
                                }
                            </script>

                        </div>
                        <!-- garden number  -->
                    </div>
                </div>
                <!-- End parent info  -->
                <!-- Start personal info  -->
                <h3 class="container-title">{{__('student.new student')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        {{-- 1 --}}

                        {{--  --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3"
                                   for="arabic-name">{{__("student.student's name in arabic")}}</label>

                            <input type="text" class="form-control"
                                   wire:model.live.debounce.500ms="name_ar">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 2 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                   for="english-name">{{__("student.student's name in english")}}</label>
                            <input type="text" class="form-control"
                                   wire:model.live.debounce.500ms="name">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>


                        {{-- 3 --}}
                        <div class="">
                            <div class="row">
                                <div class="box col">
                                    <label class="" for="photo">{{__('student.photo')}}</label>
                                    <input type="file" class="form-control"

                                           id="fileInput" wire:model.live.debounce.500ms="photo" accept="image/*"
                                           onchange="validateFile(event)"
                                           value="{{old('photo')}}">

                                    <small class="form-text text-danger" id="fileError"></small>
                                    @error('photo')
                                    <small class="form-text text-danger" id="photoError">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if ($photo && $isValidImage)
                            <div class="box d-flex justify-content-center">
                                <img class="personal_img mt-4" alt="photo"
                                     src="{{$photo->temporaryUrl()}}">
                            </div>
                        @endif
                        {{-- 4 --}}
                        <script>
                            window.localizedMessages = {
                                imageError: "{{ __('validation.image') }}",
                                requiredError: "{{ __('validation.required') }}"
                            };
                        </script>


                        <div class="box col-lg-6 col-md-6">
                            <label for="address">{{__("student.student's address in arabic")}}</label>
                            <input type="text" class=" form-control" id='address'
                                   wire:model.live.debounce.500ms="address_ar"
                                   value="{{old('address_ar')}}">
                            @error('address_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- -- --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="address">{{__("student.student's address in english")}}</label>
                            <input type="text" class=" form-control" id="address"
                                   wire:model.live.debounce.500ms="address"
                                   value="{{old('address')}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        {{-- 5 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="gender">{{__('student.gender')}}</label>
                            <select class="col form-select form-control" id="gender"
                                    wire:model.live.debounce.500ms="gender">
                                <option value="" selected>{{__('public.please select the gender')}}</option>
                                <option class="text-center"
                                        value="{{__('student.male')}}">{{__('student.male')}}</option>
                                <option class="text-center"
                                        value="{{__('student.female')}}">{{__('student.female')}}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 6 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="age">{{__('student.birthdate')}}</label>
                            <input type="date" class="form-control" id="age"
                                   wire:model.live.debounce.500ms="birthdate"
                                   value="{{old('birthdate')}}">
                            @error('birthdate')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 7 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="english-birth-place">{{__('student.place of birth in arabic')}}</label>
                            <input type="text" class="form-control" id="english-birth-place"

                                   wire:model.live.debounce.500ms="place_of_birth_ar"
                                   value="{{old('place_of_birth_ar')}}">
                            @error('place_of_birth_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="arabic-birth-place">{{__('student.place of birth in english')}}</label>
                            <input type="text" class="form-control" id="arabic-birth-place"

                                   wire:model.live.debounce.500ms="place_of_birth"
                                   value="{{old('place_of_birth')}}">
                            @error('place_of_birth')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 8 --}}
                        <div class="box col-lg-6 col-md-6">
                            <label for="className" class="form-label">{{__('student.level')}}</label>
                            <select class="form-control" wire:model.live.debounce.500ms="selectedLevel">
                                @if(is_null($levels) )
                                    <option value="" selected>{{__('where is the level')}}</option>
                                @else
                                    <option value="" selected>{{__('public.select level')}}</option>
                                @endif
                                @foreach($levels as $level)
                                    <option class="text-center" value="{{$level->id}}">{{$level->name}}</option>
                                @endforeach
                            </select>
                            @error('selectedLevel')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="box col-lg-6 col-md-6">
                            <label for="classroom" class="form-label">{{__('classroom.classroom')}}</label>
                            <select id="classroom" class="form-control"
                                    wire:model.live.debounce.500ms="classroom_id">
                                @if(!is_null($selectedLevel))
                                    <option value="" selected>{{__('student.now select a classroom')}}</option>
                                    @foreach($classrooms as $classroom)
                                        <option value="{{$classroom->id}}">{{$classroom->name}}</option>
                                    @endforeach
                                @else
                                    <option value="" selected>{{__('student.select educational level first')}}</option>
                                @endif
                            </select>
                            @error('classroom_id')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End personal info  -->

                <!-- Start health info  -->
                <h3 class="container-title">{{__('student.health info')}}</h3>
                <div class="container containers-style mb-5">
                    <div class="box row">
                        {{-- 1 --}}
                        <label class="col-6 d-flex justify-content-end">{{__('student.takes any medicine?')}}</label>
                        <div class="col-6 mt-2 d-flex justify-content-start">
                            <input class="toggle" type="checkbox" wire:click="flip(0)"
                                   id="takesMedicineE" name="checked">
                            <label class="form-label  rounded" for="takesMedicineE"></label>
                        </div>
                        @error('takes_medicine')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        @if($checks[0])
                            <div class="row">

                                <input type="text" class=" form-control ms-1 me-1 col col-ms-12"
                                       placeholder="{{__('student.medicine name in English')}}"
                                       wire:model.live.debounce.500ms="medicine_desc"
                                       id="std_medicine_desc_1" value="{{old('medicine_desc')}}"
                                       aria-label="Text input with radio button">
                                @error('medicine_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col col-ms-12"
                                       placeholder="{{__('student.medicine name in Arabic')}}"
                                       wire:model.live.debounce.500ms="medicine_desc_ar"
                                       id="" value="{{old('medicine_desc_ar')}}"
                                       aria-label="Text input with radio button">
                                @error('medicine_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        @endif
                        <div class="row">
                            <hr class="mt-2">
                        </div>
                        {{-- 2 --}}
                        <label class="col-6 d-flex justify-content-end">{{__('student.has allergy?')}}</label>
                        <div class="col-6 mt-2 d-flex justify-content-start">
                            <input class="toggle " type="checkbox" wire:click="flip(1)"
                                   id="hasAllergy" value="{{old('has_allergy')}}">
                            <label class="form-label rounded" for="hasAllergy"></label>
                        </div>
                        @error('has_allergy')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        @if($checks[1])
                            <div class="row">
                                <input type="text" class=" form-control ms-1 me-1 col"
                                       placeholder="{{__('student.allergy description in English')}}"
                                       wire:model.live.debounce.500ms="allergy_desc"
                                       id="std_allergy_desc_1"
                                       aria-label="Text input with radio button" value="{{old('allergy_desc')}}"
                                >
                                @error('allergy_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}
                                <input type="text" class=" form-control ms-1 me-1 col"
                                       placeholder="{{__('student.allergy description in Arabic')}}"
                                       wire:model.live.debounce.500ms="allergy_desc_ar"
                                       id="std_allergy_desc_2" value="{{old('allergy_desc_ar')}}"
                                       aria-label="Text input with radio button">
                                @error('allergy_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        @endif
                        <div class="row">
                            <hr class="mt-2">
                        </div>
                        {{-- 3 --}}
                        <label
                            class="col-6 d-flex justify-content-end">{{__('student.has any health problem?')}}</label>
                        <div class="col-6 mt-2 d-flex justify-content-start">
                            <input class="toggle col" type="checkbox" wire:click="flip(2)"
                                   id="healthProblem" value="{{old('has_health_problem')}}">
                            <label class="form-label  rounded" for="healthProblem"
                                   id="healthProblem"></label>
                        </div>
                        @error('has_health_problem')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        {{-- -*- --}}
                        {{-- -*- --}}
                        @if($checks[2])
                            <div class="row">
                                <input type="text" class=" form-control ms-1 me-1 col"
                                       placeholder="{{__('student.health problem description in English')}}"
                                       wire:model.live.debounce.500ms="health_problem_desc"
                                       id="std_health_desc_1"
                                       aria-label="Text input with radio button"
                                       value="{{old('health_problem_desc')}}">
                                @error('health_problem_desc')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                {{-- -*- --}}

                                <input type="text" class=" form-control ms-1 me-1 col"
                                       placeholder="{{__('student.health problem description in Arabic')}}"
                                       wire:model.live.debounce.500ms="health_problem_desc_ar"
                                       id="std_health_desc_2"
                                       value="{{old('health_problem_desc_ar')}}"
                                       aria-label="Text input with radio button">
                                @error('health_problem_desc_ar')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        @endif
                        {{-- ----------------------------------- --}}
                    </div>
                </div>
                <!-- End health info  -->
                <!-- Start final box -->
                <h3 class="container-title">{{__('student.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="box col-lg-12 col-md-12">
                            <label class="form-label" for="std_Note">{{__('student.note')}}</label>
                            <textarea wire:model.live.debounce.500ms="note" class="form-control" id="std_Note"
                                      cols="50"
                                      rows="5">{{old('note')}}</textarea>
                        </div>
                    </div>
                </div>
                <div class=" row">
                    <div class="box col ">
                        <button type="submit" class="save-button text-center">
                            {{__('public.save')}}
                            <div wire:loading class="spinner-border spinner-border-sm"></div>
                        </button>
                    </div>
                    <div class="box  col">
                        <button type="reset" class=" clear-button text-center">
                            {{__('public.clear')}}
                        </button>
                    </div>
                </div>
                {{-- js code --}}
                @include('layouts.include.users_js')

            </form>
        </div>
    </section>
</main>
