{{------------ واجهة قائمة الطلاب الخاصة بفصل معين ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">

        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}

        <div class="table-header">
            {{-- the title and search --}}
            <form method="post" action="{{route('students.search')}}">
            <div class="row first-card ">
                <h4 class="col-12 container-title mt-2">{{__('teacher.absent children')}}</h4>
                        @method('GET')
                        @csrf
                <label class="col-12">
                    <input type="text" required class="form-control "  name="search" value="{{isset($search) ? $search : ''}}">
                </label>
            </div>
            </form>
            {{-- the thacher name and the month --}}

            <div class="cards-container mt-4 third-card row">
                <div class="card-info card-info_2 col ">
                    <h4 class=" text-center Names">{{$class_name}}</h4>
                </div>
                <div class="card-info card-info_2 col ">
                    <h4 class="text-center ">Month</h4>
                    <h4 class=" Names">10</h4>
                </div>
            </div>
        </div>
        {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
        <!-- table-hover table-striped -->
    <div class=" shadow-none mt-4 ">
        <div class="table-section card  ">
            <table class=" " id="check_table">
                <thead>
                    <tr class="">
                        <th class="th-head-1 form-label">{{__('public.id')}}</th>
                        <th class="th-head-4 form-label">{{__('public.name')}}</th>
                        <th class="th-head-1 form-label">{{__('public.photo')}}</th>
                        <th class="th-head-1 form-label ">{{__('public.absent')}}</th>
                        <th class="th-head-3 form-label">{{__('teacher.absent reason')}}</th>

                    </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td>
                            <div class="td_rect">
                                {{$student->id}}
                            </div>
                        </td>
                        <td>
                            <div class="td_rect">
                                {{$student->name}}
                            </div>
                        </td>
                        <td>
                            <img
                            src="{{asset('storage/'.$student->photo)}}"
                            class="student-img" alt="photo">
                        </td>
                        <td class="">
                            <div class="mt-2 check_style">
                                <label >
                                    <input class=" " type="checkbox" name=""  id="" value="{{old('')}}"  >
                                    <i></i>
                                </label>
                            </div>
                        </td>
                        <td>
                            <input type="text" class="form-control">
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>

        <div class=" mt-5">
            <div class="box row ">
                <div class="col">
                    <input class="save-button" type="submit" value="{{__('public.save')}}">
                </div>
                <div class="col">
                    <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                </div>
            </div>
        </div>

    </div>
@endsection
