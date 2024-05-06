



<div class="section">
    <div>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <!-- Start parent info  -->
        @if($currentStep === 1)
        <h3 class="container-title">{{__('Student.the parents')}}</h3>
            <div class="container containers-style">
                <div>
                    <div class="row mb-3 text-center">
                        {{-- frist select the father if he exsist in the sestem --}}
                        <label class="col">
                            {{__('student.if the father exists write it here')}}
                            <input type="text" class="form-control" wire:model.live="search"
                            placeholder="{{__('student.please select the father first')}}">
                        </label>
                        @if(sizeof($fathers) > 0)
                            <div class="dropdown-menu d-block py-0 text-center mt-7 form-label pointer ">
                                @foreach($fathers as $father)
                                    <div class="px-3 py-1 border-bottom">
                                        <div class="d-flex flex-column ">
                                            
                                        </div>
                                    </div>
                                    <span wire:click="myFather('{{$father->father_name}}')">
                                        {{$father->father_name}}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <h3 class="container-title">{{__('Student.parent info')}}</h3>
            <div class="container  containers-style ">
                <form wire:submit="storeRelative">
                    <div class="row">  
                    <!-- father name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="father">{{__("Student.father's name in english")}}</label>
                            <input type="text" class="form-control" id='father' wire:model.blur="form.father_name"
                                value="{{old('father_name')}}">
                            @error('form.father_name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="father_ar">{{__("Student.father's name in arabic")}}</label>
                            <input type="text" class="form-control" id='father_ar' wire:model.live="form.father_name_ar"
                                value="{{old('father_name_ar')}}">
                            @error('form.father_name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work">{{__("Student.father's work in english")}}</label>
                            <input type="text" class="form-control" id='father_work' wire:model="form.father_work"
                                value="{{old('father_work')}}">
                            @error('form.father_work')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="father_work_ar">{{__("Student.father's work in arabic")}}</label>
                            <input type="text" class="form-control" id='father_work_ar' wire:model="form.father_work_ar"
                                value="{{old('father_work_ar')}}">
                            @error('form.father_work_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- father contacts  -->
                        <div class="box ">
                            <label for="f-numbers">{{__("Student.father's contacts")}}</label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='f-numbers'
                                    wire:model="form.father_contact1" value="{{old('father_contact1')}}">
                                @error('form.father_contact1')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <input type="number" class="col form-control me-2 ms-2" id='f-numbers'
                                    wire:model="form.father_contact2" value="{{old('father_contact2')}}">
                                @error('form.father_contact2')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- mother name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="arab-mother-name">{{__("Student.mother's name in english")}}</label>
                            <input type="text" class="form-control" id='arab-mother-name'
                                    wire:model.live.debounce.500ms="form.mother_name"
                                    value="{{old('mother_name')}}">
                            @error('form.mother_name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="english-mother-name">{{__("Student.mother's name in arabic")}}</label>
                            <input type="text" class="form-control" id='english-mother-name'
                                    wire:model="form.mother_name_ar"
                                    value="{{old('mother_name_ar')}}">
                            @error('form.mother_name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- mother work  -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="arab-mother-work">{{__("Student.mother's work in english")}}</label>
                            <input type="text" class="form-control" id='arab-mother-work' wire:model="form.mother_work"
                                    value="{{old('mother_work')}}">
                            @error('form.mother_work')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="work">{{__("Student.mother's work in arabic")}}</label>
                            <input type="text" class="form-control" id='work' wire:model="form.mother_work_ar"
                                    value="{{old('mother_work_ar')}}">
                            @error('form.mother_work_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- mother contacts  -->
                        <div class="box ">
                            <label for="m-numbers">{{__("Student.mother's contacts")}}</label>
                            <div class="row ">
                                <input type="number" class="col form-control ms-2 me-2" id='m-numbers'
                                        wire:model="form.mother_contact1" value="{{old('mother_contact1')}}">
                                @error('form.mother_contact1')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                                <input type="number" class="col form-control me-2 ms-2" id='m-numbers'
                                        wire:model="form.mother_contact2" value="{{old('mother_contact2')}}">
                                @error('form.mother_contact2')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- garden name  -->
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-a">{{__('Student.kin name in english')}}</label>
                            <input type="text" class="form-control" id='name-a' wire:model="form.kin_name"
                                    value="{{old('kin_name')}}">
                            @error('form.kin_name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="name-e">{{__('Student.kin name in arabic')}}</label>
                            <input type="text" class="form-control" id='name-e' wire:model="form.kin_name_ar"
                                    value="{{old('kin_name_ar')}}">
                            @error('form.kin_name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- garden relationship -->
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-a">{{__('Student.kin relationship in english')}}</label>
                            <input type="text" class="form-control" id='relation-a' wire:model="form.kin_relationship"
                                   value="{{old('kin_relationship')}}">
                            @error('form.kin_relationship')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-6">
                            <label for="relation-e">{{__('Student.kin relationship in arabic')}}</label>
                            <input type="text" class="form-control" id='relation-e' wire:model="form.kin_relationship_ar"
                                   value="{{old('kin_relationship_ar')}}">
                            @error('form.kin_relationship_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- garden number  -->
                        <div class="box col-12">
                            <label for="number">{{__('Student.kin contact')}}</label>
                            <input type="number" class="form-control " id='number' wire:model="form.kin_contact"
                                   value="{{old('kin_contact')}}">
                            @error('form.kin_contact')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="box mt-4 col-12">
                        <button type="submit" class=" save-button text-center">
                            {{__('public.next')}}
                            <div wire:loading class="spinner-border spinner-border-sm"></div>
                        </button>
                    </div>
                    
                </div>
                </form>
    
        @elseif($currentStep === 2)
            @include('livewire.student')
    
            {{-- --- --}}
    
            {{--        <div class=" row">--}}
            {{--            <div class="box col ">--}}
            {{--                <input class="save-button" wire:model="nextStep" value="{{__('public.next')}}">--}}
            {{--            </div>--}}
            {{--            <div class="box  col">--}}
            {{--                <input class="clear-button " type="reset" value="{{__('public.clear')}}">--}}
            {{--            </div>--}}
            {{--        </div>--}}
        @endif
        <div class="row">
            <div class="box col">
                @if($currentStep>2)
                    <button wire:click="decrementSteps" class="btn btn-primary">Previous</button>
                @endif
                {{--                @if($currentStep<$totalSteps)--}}
                {{--                    <button wire:click="incrementSteps" class="btn btn-primary">Next</button>--}}
                {{--                @endif--}}
                @if($currentStep === $totalSteps)
                    <button wire:click="submit" class="btn btn-success">
                        Submit
                    </button>
                @endif
            </div>
        </div>
    </div>
</div>

