<div class="section">
    <div>
        <!-- Start parent info  -->
        @if($currentStep === 1)
            <div class="box row me-5 ms-5 mb-2">
                <button class="col save-button me-5 ms-5 " wire:click="increment">
                    {{__('student.the father already exists')}}
                </button>
            </div>
            <div class="">
                <tr>
            </div>
            <h3 class="container-title">{{__('student.parent info')}}</h3>
            <div class="container  containers-style ">
                <form wire:submit="storeRelative">
                    <div class="row">
                        <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="father">{{__("student.father's name in english")}}</label>
                            <input type="text" class="form-control" id='father'
                                   wire:model.blur="relativeForm.father_name"
                                   value="{{old('father_name')}}">
                            @error('relativeForm.father_name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="father_ar">{{__("student.father's name in arabic")}}</label>
                            <input type="text" class="form-control" id='father_ar'
                                   wire:model.live.debounce.500ms="relativeForm.father_name_ar"
                                   value="{{old('father_name_ar')}}">
                            @error('relativeForm.father_name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work">{{__("student.father's work in english")}}</label>
                            <input type="text" class="form-control" id='father_work'
                                   wire:model="relativeForm.father_work"
                                   value="{{old('father_work')}}">
                            @error('relativeForm.father_work')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work_ar">{{__("student.father's work in arabic")}}</label>
                            <input type="text" class="form-control" id='father_work_ar'
                                   wire:model="relativeForm.father_work_ar"
                                   value="{{old('father_work_ar')}}">
                            @error('relativeForm.father_work_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father contacts  -->
                        <div class="box ">
                            <label for="f-numbers">{{__("student.father's contacts")}}</label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='f-numbers'
                                       wire:model="relativeForm.father_contact1" value="{{old('father_contact1')}}">
                                @error('relativeForm.father_contact1')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <input type="number" class="col form-control me-2 ms-2" id='f-numbers'
                                       wire:model="relativeForm.father_contact2" value="{{old('father_contact2')}}">
                                @error('relativeForm.father_contact2')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- mother name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-mother-name">{{__("student.mother's name in english")}}</label>
                            <input type="text" class="form-control" id='arab-mother-name'
                                   wire:model.live.debounce.500ms="relativeForm.mother_name"
                                   value="{{old('mother_name')}}">
                            @error('relativeForm.mother_name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="english-mother-name">{{__("student.mother's name in arabic")}}</label>
                            <input type="text" class="form-control" id='english-mother-name'
                                   wire:model="relativeForm.mother_name_ar"
                                   value="{{old('mother_name_ar')}}">
                            @error('relativeForm.mother_name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- mother work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="arab-mother-work">{{__("student.mother's work in english")}}</label>
                            <input type="text" class="form-control" id='arab-mother-work'
                                   wire:model="relativeForm.mother_work"
                                   value="{{old('mother_work')}}">
                            @error('relativeForm.mother_work')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="work">{{__("student.mother's work in arabic")}}</label>
                            <input type="text" class="form-control" id='work' wire:model="relativeForm.mother_work_ar"
                                   value="{{old('mother_work_ar')}}">
                            @error('relativeForm.mother_work_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- mother contacts  -->
                        <div class="box ">
                            <label for="m-numbers">{{__("student.mother's contacts")}}</label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers'
                                       wire:model="relativeForm.mother_contact1" value="{{old('mother_contact1')}}">
                                @error('relativeForm.mother_contact1')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers'
                                       wire:model="relativeForm.mother_contact2" value="{{old('mother_contact2')}}">
                                @error('relativeForm.mother_contact2')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- garden name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-a">{{__('student.kin name in english')}}</label>
                            <input type="text" class="form-control" id='name-a' wire:model="relativeForm.kin_name"
                                   value="{{old('kin_name')}}">
                            @error('relativeForm.kin_name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-e">{{__('student.kin name in arabic')}}</label>
                            <input type="text" class="form-control" id='name-e' wire:model="relativeForm.kin_name_ar"
                                   value="{{old('kin_name_ar')}}">
                            @error('relativeForm.kin_name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- garden relationship -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-a">{{__('student.kin relationship in english')}}</label>
                            <input type="text" class="form-control" id='relation-a'
                                   wire:model="relativeForm.kin_relationship"
                                   value="{{old('kin_relationship')}}">
                            @error('relativeForm.kin_relationship')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-e">{{__('student.kin relationship in arabic')}}</label>
                            <input type="text" class="form-control" id='relation-e'
                                   wire:model="relativeForm.kin_relationship_ar"
                                   value="{{old('kin_relationship_ar')}}">
                            @error('relativeForm.kin_relationship_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- garden number  -->
                        <div class="box col-12">
                            <label for="number">{{__('student.kin contact')}}</label>
                            <input type="number" class="form-control " id='number' wire:model="relativeForm.kin_contact"
                                   value="{{old('kin_contact')}}">
                            @error('relativeForm.kin_contact')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="box mt-4 col-12">
                <button type="submit" class=" save-button text-center">
                    {{__('public.next')}}
                    <div wire:loading class="spinner-border spinner-border-sm"></div>
                </button>
            </div>
            </form>

        @elseif($currentStep === 2)
            @include('students-affairs.students.create-student')
        @endif
    </div>

