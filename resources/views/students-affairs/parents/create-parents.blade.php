<div class="section">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <h3 class="container-title">{{__('student.new superior')}}</h3>
    <div class="container  containers-style ">
        <form wire:submit="save" action="">
            @csrf
            <div class="row">

                <!-- father name  -->
                <div class="box col-lg-6 col-md-12">
                    <label for="father">{{__("student.father's name in english")}}</label>
                    <input type="text" class="form-control" id='father'
                           wire:model.live.debounce.500ms="father_name">
                    @error('father_name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-12">
                    <label for="father_ar">{{__("student.father's name in arabic")}}</label>
                    <input type="text" class="form-control" id='father_ar'
                           wire:model.live.debounce.500ms="father_name_ar"
                           >
                    @error('father_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- father work  -->
                <div class="box col-lg-6 col-md-6">
                    <label for="father_work">{{__("student.father's work in english")}}</label>
                    <input type="text" class="form-control" id='father_work'
                            wire:model.live.debounce.500ms="father_work"
                           >
                    @error('father_work')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-6 ">
                    <label for="father_work_ar">{{__("student.father's work in arabic")}}</label>
                    <input type="text" class="form-control" id='father_work_ar'
                            wire:model.live.debounce.500ms="father_work_ar"
                        >
                    @error('father_work_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- father contacts  -->
                <div class="box ">

                    <label for="f-numbers">{{__("student.father's contacts")}}</label>
                    <div class="row ">
                        <div class="col-lg-6 col-md-6">
                            <input type="number" class=" form-control ms-2 me-2" id='f-numbers'
                                    wire:model.live.debounce.500ms="father_contact1" >
                            @error('father_contact1')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <input type="number" class=" form-control me-2 ms-2" id='f-numbers'
                                    wire:model.live.debounce.500ms="father_contact2" >
                            @error('father_contact2')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- mother name  -->
                <div class="box col-lg-6 col-md-12">
                    <label for="arab-mother-name">{{__("student.mother's name in english")}}</label>
                    <input type="text" class="form-control" id='arab-mother-name'
                           wire:model.live.debounce.500ms="mother_name">
                    @error('mother_name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-12">
                    <label for="english-mother-name">{{__("student.mother's name in arabic")}}</label>
                    <input type="text" class="form-control" id='english-mother-name'
                            wire:model.live.debounce.500ms="mother_name_ar">
                    @error('mother_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- mother work  -->
                <div class="box col-lg-6 col-md-6">
                    <label for="arab-mother-work">{{__("student.mother's work in english")}}</label>
                    <input type="text" class="form-control" id='arab-mother-work'
                            wire:model.live.debounce.500ms="mother_work">
                    @error('mother_work')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-6">
                    <label for="work">{{__("student.mother's work in arabic")}}</label>
                    <input type="text" class="form-control" id='work'  wire:model.live.debounce.500ms="mother_work_ar"
                      >
                    @error('mother_work_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- mother contacts  -->
                <div class="box ">
                    <label for="m-numbers">{{__("student.mother's contacts")}}</label>
                    <div class="row ">
                        <input type="number" class="col form-control ms-2 me-2" id='m-numbers'
                                wire:model.live.debounce.500ms="mother_contact1" >
                        @error('mother_contact1')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        <input type="number" class="col form-control me-2 ms-2" id='m-numbers'
                                wire:model.live.debounce.500ms="mother_contact2" >
                        @error('mother_contact2')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!-- garden name  -->
                <div class="box col-lg-6 col-md-12">
                    <label for="name-a">{{__('student.kin name in english')}}</label>
                    <input type="text" class="form-control" id='name-a'  wire:model.live.debounce.500ms="kin_name"
                           >
                    @error('kin_name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-12">
                    <label for="name-e">{{__('student.kin name in arabic')}}</label>
                    <input type="text" class="form-control" id='name-e'  wire:model.live.debounce.500ms="kin_name_ar"
                         >
                    @error('kin_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- garden relationship -->
                <div class="box col-lg-6 col-md-6">
                    <label for="relation-a">{{__('student.kin relationship in english')}}</label>
                    <input type="text" class="form-control" id='relation-a'
                            wire:model.live.debounce.500ms="kin_relationship"
                           >
                    @error('kin_relationship')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-6">
                    <label for="relation-e">{{__('student.kin relationship in arabic')}}</label>
                    <input type="text" class="form-control" id='relation-e'
                            wire:model.live.debounce.500ms="kin_relationship_ar"
                           >
                    @error('kin_relationship_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- garden number  -->
                <div class="box col-12">
                    <label for="number">{{__('student.kin contact')}}</label>
                    <input type="number" class="form-control " id='number'
                           wire:model.live.debounce.150ms="kin_contact"
                         >
                    @error('kin_contact')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>

        </div>
        <div class=" row">
            <div class="box col ">
                <button  type="submit" class=" save-button text-center">
                    {{__('public.save')}}
                    {{-- <div wire:loading class="spinner-border spinner-border-sm"></div> --}}
                </button>
            </div>
            <div class="box  col">
                <button  type="reset" class=" clear-button text-center">
                    {{__('public.clear')}}
                    {{-- <div wire:loading class="spinner-border spinner-border-sm"></div> --}}
                </button>
            </div>
        </div>
    </form>
</div>

