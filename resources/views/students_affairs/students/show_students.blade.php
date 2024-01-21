{{-- واجهة استعراض بيانات الطلاب العامة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row frist-card ">
                <h4 class="col container-title mt-2">Student Information</h4>
                <div class="row col ">
                    <input class="col search2" placeholder="{{__('public.search')}}">
                    <button class="col-1 save-button search-button ">{{__('public.search')}}</button>
                </div>
            </div>
            {{--  --}}
                    <form method="get" action="{{route('students.create')}}">
            <div class="box col-lg-12 col-md-12 ">
                <label for="sex"></label><select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" >
                        @foreach($classes as $class)
                                    <button class="" type="submit">
                                <option class="text-center" value="{{$class->id}}">{{$class->name}}
                                </option>
                                    </button>
                        @endforeach
                </select>
                @error('sex')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
                </form>
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
        <div class="table-section">
            <div class="card table-section ">
                <table class=" " >
                    <thead>
                    <tr>
                        <th ><div class="th-head-1  " >id</div></th>
                        <th ><div class="th-head-3" >Name</div></th>
                        <th ><div class="th-head-2" >photo</div></th>
                        <th ><div class="th-head-4" >address</div></th>
                        <th ><div class="th-head-1" >sex</div></th>
                        <th ><div class="th-head-2" >birth date</div></th>
                        <th ><div class="th-head-3 " >place of birth</div></th>
                        <th ><div class="th-head-3" >take medicine</div></th>
                        <th ><div class="th-head-3" >medicine description</div></th>
                        <th ><div class="th-head-3" >have allergy</div></th>
                        <th ><div class="th-head-3" >allergy description</div></th>
                        <th ><div class="th-head-3" >health problem</div></th>
                        <th ><div class="th-head-4 ">health problem description</div> </th>
                        <th ><div class="th-head-2" >class</div></th>
                        <th ><div class="th-head-4" >note</div></th>
                        <th ><div class="th-head-3" >Created at</div></th>
                        <th ><div class="th-head-3" >Updated at</div></th>
                        <th ><div class="th-head-2" >parents</div></th>
                        <th colspan="2"><div class="th-head-4" >processes</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students  as $student )
                        <tr>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td><img src="{{asset($student->photo)}}"
                                class="student-img" alt="student's photo"></td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->sex}}</td>
                            <td>{{$student->birthdate}}</td>
                            <td>{{$student->place_of_birth}}</td>
                            <td>{{$student->take_medicine}}</td>
                            <td>{{$student->medicine_desc}}</td>
                            <td>{{$student->have_allergy}}</td>
                            <td>{{$student->allergy_desc}}</td>
                            <td>{{$student->have_health_problem}}</td>
                            <td>{{$student->health_problem_desc}}</td>
                            <td>{{App\Models\Classs::findorfail($student->class_id)->name}}</td>
                            <td>{{$student->note}}</td>
                            <td>{{$student->created_at}}</td>
                            <td>{{$student->updated_at}}</td>
                            <td><button class="btn save-button btn-info  w-100">Parent<i class="ms-5 fa-solid fa-male"></i><i class=" fa-solid fa-female"></i></button></td>

                            <td>
                                <a href="{{route('students.edit',$student->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$student->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="delete{{$student->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$student->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('students.destroy',$student->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
