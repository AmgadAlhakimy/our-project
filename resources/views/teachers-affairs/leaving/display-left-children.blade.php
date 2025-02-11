{{------------ واجهة عرض دفتر المتابعة الخاص بطلاب الروضة ----------------}}
@extends('layouts.sidebar')
@section('content')
    <?php $counter = 1 ?>
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        <div class="table-header ">
            {{-- the title and search --}}
            <h4 class="form-group container-title">{{__('leaving.left children today')}}</h4>
            <div class="row first-card mt-4">
                <div class="cards-container mt-4 third-card row">
                    <div class="card-info card-info_2 col ">
                        <h4 class="Names ">{{$classroom->name}}</h4>
                    </div>
                    @can('edit leaving children')
                        <a href="{{route('leaving.editLeaving',$classroom->id)}}"
                           class="card-info card-info_2 col btn save-button">
                            <h4 class="topic-title mt-2">{{__('follow_up.edit for all students')}}</h4>
                            <p class="text-center ">{{__('follow_up.click here')}}</p>
                        </a>
                    @endcan
                    <div class="card-info card-info_2 col ">
                        <h4 class=" Names">{{$month}}</h4>
                    </div>
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
                        <th class="num_table ">{{__('public.num')}}</th>
                        <th class="th-head-1 form-label">{{__('public.id')}}</th>
                        <th class="th-head-3 form-label">{{__('public.name')}}</th>
                        <th class="th-head-2 form-label">{{__('public.photo')}}</th>
                        <th class="th-head-2 form-label ">{{__('leaving.leaving')}}</th>
                        <th class="th-head-2 form-label ">{{__('leaving.leaving time')}}</th>
                        @can('who did this')
                            <th>
                                <div class="table_test form-label ">
                                    {{__('user.user')}}
                                </div>
                            </th>
                        @endcan
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($leftStudents  as $leftStudent )
                        <tr class="">
                            <td class="num_table ">{{$counter}}</td>
                            <td>
                                <div class="td_rect">
                                    {{$leftStudent->student->id}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$leftStudent->student->name}}
                                </div>
                            </td>
                            <td><img
                                    src="{{asset('storage/'.$leftStudent->student->photo)}}"
                                    class="student-img" alt="photo"></td>
                            <td>
                                <div class="td_rect">
                                    {{trans('public.yes')}}
                                </div>
                            </td>
                            <td>
                                <div class="td_rect">
                                    {{$leftStudent->created_at->format('H:i:s A')}}
                                </div>
                            </td>
                            @can('who did this')
                                <td>
                                    <div class="td_rect">
                                        {{$leftStudent->user->name}}
                                    </div>
                                </td>
                            @endcan
                        </tr>
                            <?php $counter++ ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
