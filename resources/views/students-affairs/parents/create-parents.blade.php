<div class="section">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    <h3 class="container-title">{{__('student.parent info')}}</h3>
    <div class="container  containers-style ">
        <form wire:submit="save" action="">
            @csrf
            <div class="row">
                <!-- father name  -->
                <div class="box col-lg-6 col-md-12">
                    <label for="father">{{__("student.father's name in english")}}</label>
                    <input type="text" class="form-control" id='father'
                           wire:model="parentsForm.father_name">
                    @error('parentsForm.father_name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-12">
                    <label for="father_ar">{{__("student.father's name in arabic")}}</label>
                    <input type="text" class="form-control" id='father_ar'
                           wire:model="parentsForm.father_name_ar"
                           >
                    @error('parentsForm.father_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- father work  -->
                <div class="box col-lg-6 col-md-6">
                    <label for="father_work">{{__("student.father's work in english")}}</label>
                    <input type="text" class="form-control" id='father_work'
                            wire:model="parentsForm.father_work"
                           >
                    @error('parentsForm.father_work')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-6">
                    <label for="father_work_ar">{{__("student.father's work in arabic")}}</label>
                    <input type="text" class="form-control" id='father_work_ar'
                            wire:model="parentsForm.father_work_ar"
                        >
                    @error('parentsForm.father_work_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- father contacts  -->
                <div class="box ">
                    <label for="f-numbers">{{__("student.father's contacts")}}</label>
                    <div class="row ">
                        <input type="number" class="col form-control ms-2 me-2" id='f-numbers'
                                wire:model="parentsForm.father_contact1" >
                        @error('parentsForm.father_contact1')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        <input type="number" class="col form-control me-2 ms-2" id='f-numbers'
                                wire:model="parentsForm.father_contact2" >
                        @error('parentsForm.father_contact2')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!-- mother name  -->
                <div class="box col-lg-6 col-md-12">
                    <label for="arab-mother-name">{{__("student.mother's name in english")}}</label>
                    <input type="text" class="form-control" id='arab-mother-name'
                           wire:model="parentsForm.mother_name"
                        >
                    @error('parentsForm.mother_name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-12">
                    <label for="english-mother-name">{{__("student.mother's name in arabic")}}</label>
                    <input type="text" class="form-control" id='english-mother-name'
                            wire:model="parentsForm.mother_name_ar"
                           >
                    @error('parentsForm.mother_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- mother work  -->
                <div class="box col-lg-6 col-md-6">
                    <label for="arab-mother-work">{{__("student.mother's work in english")}}</label>
                    <input type="text" class="form-control" id='arab-mother-work'
                            wire:model="parentsForm.mother_work"
                        >
                    @error('parentsForm.mother_work')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-6">
                    <label for="work">{{__("student.mother's work in arabic")}}</label>
                    <input type="text" class="form-control" id='work'  wire:model="parentsForm.mother_work_ar"
                      >
                    @error('parentsForm.mother_work_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- mother contacts  -->
                <div class="box ">
                    <label for="m-numbers">{{__("student.mother's contacts")}}</label>
                    <div class="row ">
                        <input type="number" class="col form-control ms-2 me-2" id='m-numbers'
                                wire:model="parentsForm.mother_contact1" >
                        @error('parentsForm.mother_contact1')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        <input type="number" class="col form-control me-2 ms-2" id='m-numbers'
                                wire:model="parentsForm.mother_contact2" >
                        @error('parentsForm.mother_contact2')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                </div>
                <!-- garden name  -->
                <div class="box col-lg-6 col-md-12">
                    <label for="name-a">{{__('student.kin name in english')}}</label>
                    <input type="text" class="form-control" id='name-a'  wire:model="parentsForm.kin_name"
                           >
                    @error('parentsForm.kin_name')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-12">
                    <label for="name-e">{{__('student.kin name in arabic')}}</label>
                    <input type="text" class="form-control" id='name-e'  wire:model="parentsForm.kin_name_ar"
                         >
                    @error('parentsForm.kin_name_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- garden relationship -->
                <div class="box col-lg-6 col-md-6">
                    <label for="relation-a">{{__('student.kin relationship in english')}}</label>
                    <input type="text" class="form-control" id='relation-a'
                            wire:model="parentsForm.kin_relationship"
                           >
                    @error('parentsForm.kin_relationship')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="box col-lg-6 col-md-6">
                    <label for="relation-e">{{__('student.kin relationship in arabic')}}</label>
                    <input type="text" class="form-control" id='relation-e'
                            wire:model="parentsForm.kin_relationship_ar"
                           >
                    @error('parentsForm.kin_relationship_ar')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <!-- garden number  -->
                <div class="box col-12">
                    <label for="number">{{__('student.kin contact')}}</label>
                    <input type="number" class="form-control " id='number'
                           wire:model.live.debounce.150ms="parentsForm.kin_contact"
                         >
                    @error('parentsForm.kin_contact')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="box mt-4 col-12">
                <button  type="submit" class=" save-button text-center">
                    {{__('public.next')}}
                    <div wire:loading class="spinner-border spinner-border-sm"></div>
                </button>
            </div>
        </form>

    </div>

