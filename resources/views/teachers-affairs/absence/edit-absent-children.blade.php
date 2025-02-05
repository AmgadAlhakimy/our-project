{{------------ واجهة قائمة الطلاب الخاصة بفصل معين ----------------}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table mt-5">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
        @endif
        <form method="post" action="{{route('absent.updateAbsent',$classroom->id)}}">
            @method('GET')
            @csrf
            {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
            {{-- the table header with bottuns and search input --}}

            <div class="table-header">
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
                        <tr class="">
                            <th class="th-head-1 form-label">{{__('public.num')}}</th>
                            <th class="th-head-1 form-label">{{__('public.id')}}</th>
                            <th class="th-head-4 form-label">{{__('public.name')}}</th>
                            <th class="th-head-1 form-label">{{__('public.photo')}}</th>
                            <th class="th-head-1 form-label ">{{__('absent.present')}}</th>
                            <th class="th-head-3 form-label">{{__('absent.absent reason')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $index = 0; ?>
                        @foreach ($students as $student)
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
                                        class="absentStudent-img" alt="photo">
                                </td>
                                <td>
                                    <div class="mt-2 check_style">
                                        <label>
                                            <input class="" type="checkbox"
                                                   name="absent[{{$index}}]"
                                                   value={{("absent.$index") ? 'present' : 'absent' }}
                                                {{in_array($student->id,$absent_children)?'absent':'checked'}}>
                                            @error("absent.$index")
                                            <small class="form-text text-danger">{{$message}}</small>
                                            @enderror
                                            <i></i>
                                        </label>
                                    </div>
                                </td>
                                <td>
                                    <label>
                                        <input type="text" class="form-control"
                                               name="absent_reason[{{$index}}]" value="{{ old("absent_reason.$index") }}">
                                    </label>
                                    @error("absent_reason.$index")
                                    <small class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </td>
                            </tr>
                                <?php $index++; ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class=" mt-5">
                <div class="box">
                    @can('update absent children')
                        <input class="save-button " type="submit" value="{{__('public.update')}}">
                    @endcan
                    @can('display absent children')
                        <a  href="{{route('absent.display',$classroom->id)}}" class="btn clear-button"><i
                                class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
                    @endcan
                </div>
            </div>
        </div>
        </form>
    </div>
@endsection
