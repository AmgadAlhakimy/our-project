@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{route('leaving.storeLeaving',$classroom->id)}}">
            @method('GET')
            @csrf
            <div class="my-table mt-5">

                {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
                <div class="table-header">
                    <div class="row first-card ">
                        <h4 class="col-12 container-title mt-2">{{__('leaving.check leaving student')}}</h4>
                    </div>
                    <div class="cards-container mt-4 third-card row">
                        <div class="card-info card-info_2 col ">
                            <h4 class="text-center ">{{__('public.class')}}</h4>
                            <h4 class="Names">
                                {{$classroom->name}}
                            </h4>
                        </div>
                        <div class="card-info card-info_2 col ">
                            <h4 class="text-center ">{{__('public.date')}}</h4>
                            <h4 class="Names">
                                {{$month}}
                            </h4>
                        </div>
                    </div>
                </div>
                {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
                <!-- table-hover table-striped -->
                <div class=" shadow-none mt-4 ">
                    <div class="table-section card  ">
                        <table class=" " id="check_table">
                            <thead>
                            <tr>
                                <th class="th-head-1 form-label">{{__('public.num')}}</th>
                                <th class="th-head-1 form-label">{{__('public.id')}}</th>
                                <th class="th-head-4 form-label">{{__('public.name')}}</th>
                                <th class="th-head-1 form-label">{{__('public.photo')}}</th>
                                <th class="th-head-1 form-label ">{{__('leaving.leaving')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $index = 0 ?>
                            @foreach($students as $student)
                                <tr>
                                    <td>
                                        <div class="td_rect "> {{$index+1}}</div>
                                    </td>
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
                                            <label>
                                                <input class="" type="checkbox" name="leaving[{{$index}}]"
                                                value={{("leaving.$index") ? 'present' : 'absent' }}>
                                                <div class="absent-checkbox"></div>

                                                @error("leaving.$index")
                                                <small class="form-text text-danger">{{$message}}</small>
                                                @enderror
                                            </label>
                                    </td>
                                </tr>
                                    <?php $index++ ?>
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
        </form>
    </div>
@endsection
