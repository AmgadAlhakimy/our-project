<div class="offset-3 col-6">
    <h3 class="container-title">{{__('Student.parent info')}}</h3>
    <div class="container  containers-style ">
        <div class="row">
            <!-- father name  -->
            <div class="box col-lg-6 col-md-12">
                <label for="father">{{__("Student.father's name in english")}}</label>
                <input type="text" class="form-control" id='father' wire:model="father_name" value="{{old('father_name')}}">
                @error('father_name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="box col-lg-6 col-md-12">
                <label for="father_ar">{{__("Student.father's name in arabic")}}</label>
                <input type="text" class="form-control" id='father_ar' wire:model="father_name_ar" value="{{old('father_name_ar')}}">
                @error('father_name_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- father work  -->
            <div class="box col-lg-6 col-md-6">
                <label for="father_work">{{__("Student.father's work in english")}}</label>
                <input type="text" class="form-control" id='father_work' wire:model="father_work" value="{{old('father_work')}}">
                @error('father_work')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="box col-lg-6 col-md-6">
                <label for="father_work_ar">{{__("Student.father's work in arabic")}}</label>
                <input type="text" class="form-control" id='father_work_ar' wire:model="father_work_ar" value="{{old('father_work_ar')}}">
                @error('father_work_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- father contacts  -->
            <div class="box ">
                <label for="f-numbers">{{__("Student.father's contacts")}}</label>
                <div class="row ">
                    <input type="number" class="col form-control ms-2 me-2" id='f-numbers' wire:model="father_contact1" value="{{old('father_contact1')}}">
                    @error('father_contact1')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                    <input type="number" class="col form-control me-2 ms-2" id='f-numbers' wire:model="father_contact2" value="{{old('father_contact2')}}">
                    @error('father_contact2')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <!-- mother name  -->
            <div class="box col-lg-6 col-md-12">
                <label for="arab-mother-name">{{__("Student.mother's name in english")}}</label>
                <input type="text" class="form-control" id='arab-mother-name' wire:model="mother_name" value="{{old('mother_name')}}">
                @error('mother_name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="box col-lg-6 col-md-12">
                <label for="english-mother-name">{{__("Student.mother's name in arabic")}}</label>
                <input type="text" class="form-control" id='english-mother-name' name="mother_name_ar" value="{{old('mother_name_ar')}}">
                @error('mother_name_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- mother work  -->
            <div class="box col-lg-6 col-md-6">
                <label for="arab-mother-work">{{__("Student.mother's work in english")}}</label>
                <input type="text" class="form-control" id='arab-mother-work' wire:model="mother_work" value="{{old('mother_work')}}">
                @error('mother_work')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="box col-lg-6 col-md-6">
                <label for="work">{{__("Student.mother's work in arabic")}}</label>
                <input type="text" class="form-control" id='work' wire:model="mother_work_ar" value="{{old('mother_work_ar')}}">
                @error('mother_work_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- mother contacts  -->
            <div class="box ">
                <label for="m-numbers">{{__("Student.mother's contacts")}}</label>
                <div class="row ">
                    <input type="number" class="col form-control ms-2 me-2" id='m-numbers' wire:model="mother_contact1" value="{{old('mother_contact1')}}">
                    @error('mother_contact1')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                    <input type="number" class="col form-control me-2 ms-2" id='m-numbers' wire:model="mother_contact2" value="{{old('mother_contact2')}}">
                    @error('mother_contact2')
                    <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <!-- garden name  -->
            <div class="box col-lg-6 col-md-12">
                <label for="name-a">{{__('Student.kin name in english')}}</label>
                <input type="text" class="form-control" id='name-a' wire:model="kin_name"  value="{{old('kin_name')}}">
                @error('kin_name')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="box col-lg-6 col-md-12">
                <label for="name-e">{{__('Student.kin name in arabic')}}</label>
                <input type="text" class="form-control" id='name-e' wire:model="kin_name_ar"  value="{{old('kin_name_ar')}}">
                @error('kin_name_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- garden relationship -->
            <div class="box col-lg-6 col-md-6">
                <label for="relation-a">{{__('Student.kin relationship in english')}}</label>
                <input type="text" class="form-control" id='relation-a' wire:model="kin_relationship" value="{{old('kin_relationship')}}">
                @error('kin_relationship')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="box col-lg-6 col-md-6">
                <label for="relation-e">{{__('Student.kin relationship in arabic')}}</label>
                <input type="text" class="form-control" id='relation-e' wire:model="kin_relationship_ar" value="{{old('kin_relationship_ar')}}">
                @error('kin_relationship_ar')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <!-- garden number  -->
            <div class="box col">
                <label for="number">{{__('Student.kin contact')}}</label>
                <input type="number" class="form-control " id='number' wire:model="kin_contact" value="{{old('kin_contact')}}">
                @error('kin_contact')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
    </div>
    <div class=" row">
        <div class="box col ">
            <input class="save-button" wire:click="nextStep"  value="{{__('public.next')}}">
        </div>
        <div class="box  col">
            <input class="clear-button " type="reset" value="{{__('public.clear')}}">
        </div>
     </div>

</div>
