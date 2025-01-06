<main class="main">
    <section class="section ">
        <div>
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <h3 class="container-title">{{__('student.choose parents')}}</h3>
            <div class="container  containers-style">
                <div class="">
                    <div class="row box">
                        <div class="box w-100">
                            <input type="text" id="fatherSearch" list="fathersList"
                                   placeholder="{{ __('student.search for father') }}"
                                   class="form-control" wire:model.live.debounce.500ms="search"
                                   oninput="setParentId(this)">
                            <datalist id="fathersList" class="">
                                @foreach($fathers as $father)
                                    <option value="{{ $father->father_name }}"
                                            data-id="{{ $father->id }}">{{ $father->father_name }}</option>
                                @endforeach
                            </datalist>
                            @error('parent_id')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <script>
                            function setParentId(input) {
                                const list = document.getElementById('fathersList');
                                const options = list.getElementsByTagName('option');
                                for (let option of options) {
                                    if (option.value === input.value) {
                                    @this.set('parent_id', option.getAttribute('data-id'));
                                        break;
                                    }else {
                                    @this.set('parent_id', 0);
                                    }
                                }
                            }
                        </script>
                    </div>
                    <!-- garden number  -->
                </div>
            </div>
            <!-- End parent info  -->
            <form wire:submit="update" enctype="multipart/form-data">
                @csrf
                <!-- Start personal info  -->
                <h3 class="container-title">{{__('student.create student')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        {{-- 1 --}}

                        {{--  --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="  title-3"
                                   for="arabic-name">{{__("student.student's name in arabic")}}</label>

                            <input type="text" class="form-control"
                                   wire:model.live.debounce.500ms="name_ar"
                                   value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 2 --}}
                        <div class="box col-lg-6 col-md-12">
                            <label class="text-center"
                                   for="english-name">{{__("student.student's name in english")}}</label>
                            <input type="text" class="form-control"
                                   wire:model.live.debounce.500ms="name"
                                   value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        {{-- 3 --}}
                        <div class="">
                            <div class="row">
                                <div class="box col">
                                    <label class="" for="photo">{{__('student.photo')}}</label>
                                    <input type="file" class="form-control" id="photo"
                                           wire:model.live.debounce.500ms="photo"
                                           value="{{old('photo')}}">
                                    @error('photo')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        @if($current_photo === $student->photo and $photo == null)
                            <div class="box d-flex justify-content-center">
                                <img class="personal_img mt-4" alt="photo"
                                     src="{{asset('storage/'.$current_photo)}}">
                            </div>
                        @elseif($photo != null and $photo != $student->photo)
                            <div class="box d-flex justify-content-center">
                                <img class="personal_img mt-4" alt="photo"
                                     src="{{$photo->temporaryUrl()}}">
                            </div>
                        @endif

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
                                        value="{{__('public.male')}}">{{__('public.male')}}</option>
                                <option class="text-center"
                                        value="{{__('public.female')}}">{{__('public.female')}}</option>
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
                            <label for="classroom" class="form-label">{{__('classroom.classroom')}}</label>
                            <select id="classroom" class="form-control"
                                    wire:model.live.debounce.500ms="classroom_id">
                                @if(!is_null($selectedLevel))
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
                    <div class="row">
                        <div class="box col-lg-12 col-md-12 row">
                            {{-- 1 --}}
                            <label class="col d-flex justify-content-end">{{__('student.take any medicine ?')}}</label>
                            <div class="col mt-2 d-flex justify-content-start">
                                <input class="toggle" type="checkbox" wire:click="flip(0)"
                                       id="takeMedicineE" {{($checks[0]) ? 'checked' :''}}
                                       value="{{old('takes_medicine')}}">
                                <label class="form-label  rounded" for="takeMedicineE"></label>
                            </div>
                            {{-- -*- --}}
                            @if($checks[0])
                                <div class="row">
                                    <input type="text" class=" form-control ms-1 me-1 col"
                                           wire:model.live.debounce.500ms="medicine_desc"
                                           id="std_medicine_desc_1" value="{{old('medicine_desc')}}"
                                           aria-label="Text input with radio button" placeholder="desc in english">
                                    @error('medicine_desc')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    {{-- -*- --}}
                                    <input type="text" class=" form-control ms-1 me-1 col"
                                           wire:model.live.debounce.500ms="medicine_desc_ar"
                                           id="" value="{{old('medicine_desc_ar')}}"
                                           aria-label="Text input with radio button" placeholder="desc in arabic">
                                    @error('medicine_desc_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            @endif

                            {{-- 2 --}}
                            {{-- -------------------------------- --}}
                            <label class="mt-4">{{__('student.have an allergy ?')}}</label>
                            {{-- ---- --}}
                            <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                <input class="toggle col" type="checkbox" wire:click="flip(1)"
                                       id="haveAllergy"  {{($checks[1]) ? 'checked' :''}}
                                       value="{{old('have_allergy')}}">

                                <label class="form-label col rounded" for="haveAllergy"></label>
                            </div>

                            {{-- -*- --}}
                            {{-- -*- --}}
                            @if($checks[1])
                                <div class="row">
                                    <input type="text" class=" form-control ms-1 me-1 col"
                                           wire:model.live.debounce.500ms="allergy_desc"
                                           id="std_allergy_desc_1"
                                           aria-label="Text input with radio button" value="{{old('allergy_desc')}}"
                                           placeholder="desc in english">
                                    @error('allergy_desc')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    {{-- -*- --}}
                                    <input type="text" class=" form-control ms-1 me-1 col"
                                           wire:model.live.debounce.500ms="allergy_desc_ar"
                                           id="std_allergy_desc_2" value="{{old('allergy_desc_ar')}}"
                                           aria-label="Text input with radio button" placeholder="desc in arabic">
                                    @error('allergy_desc_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            @endif
                            {{-- 3 --}}
                            {{-- -------------------------------- --}}
                            <label class="mt-4">{{__('student.have any health problem ?')}}</label>
                            {{-- ---- --}}
                            <div class="col-lg-12 col-md-12 col-ms-12 mt-2">
                                <input class="toggle col" type="checkbox" wire:click="flip(2)"
                                       id="healthProblem" value="{{old('have_health_problem')}}"
                                    {{($checks[2]) ? 'checked' :''}}
                                >
                                <label class="form-label col rounded" for="healthProblem"
                                       id="healthProblem"></label>
                            </div>
                            {{-- -*- --}}
                            @if($checks[2])
                                <div class="row">
                                    <input type="text" class=" form-control ms-1 me-1 col"
                                           wire:model.live.debounce.500ms="health_problem_desc"
                                           id="std_health_desc_1"
                                           aria-label="Text input with radio button"
                                           value="{{old('health_problem_desc')}}"
                                           placeholder="desc in english">
                                    @error('health_problem_desc')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                    {{-- -*- --}}
                                    <input type="text" class=" form-control ms-1 me-1 col"
                                           wire:model.live.debounce.500ms="health_problem_desc_ar"
                                           id="std_health_desc_2"
                                           value="{{old('health_problem_desc_ar')}}"
                                           aria-label="Text input with radio button" placeholder="desc in arabic">
                                    @error('health_problem_desc_ar')
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            @endif
                            {{-- ----------------------------------- --}}
                        </div>
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
                    <div class="box col">
                        <button type="submit" class=" save-button">
                            {{__('public.update')}}
                            <div wire:loading class="spinner-border spinner-border-sm"></div>
                        </button>
                    </div>
                    <div class="box  col">
                        <a href="{{route('display-students')}}" class="btn clear-button"><i
                                class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </div>
    </section>
</main>
