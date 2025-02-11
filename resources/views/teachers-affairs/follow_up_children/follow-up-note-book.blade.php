<div class="my-table mt-5 mb-5">
    <!-- Start Personal Info -->
    <div class="mt-5 mb-5">.</div>
    <h4 class="form-group container-title mt-5 col-12">{{ __('follow_up.follow-up notebook') }}</h4>

    <div class="table-header mt-1">
        <div class="row">
            <label class="col-md-6 col-sm-12 col-lg-6 ">
                <div class="search p-relative">
                    <input wire:model.live.debounce.500ms="search" type="text" class="form-control " name="search"
                           placeholder="{{__('sidebar.search')}}">
                </div>
            </label>
            <div class="col-md-6 col-sm-12 col-lg-6 mt-1">
                <input type="date" class="form-control cards_title text-center "
                       wire:model.live.debounce.500ms="search_date">
            </div>
        </div>
    </div>
    <div class="table-hder ">
        <div class="row mt-5 ">
            <div class="text-center col-4 col-md-3 col-sm-12 ">
                <img src="{{asset('storage/'.$student->photo)}}" class="personal_img" alt="photo">
            </div>
            <div class="mt-4 col-8 col-md-9 col-sm-12 row">
                <div class="col-12 cards_title text-center">{{$student->name}}</div>
                <div class="col-12 cards_sup_title text-center">{{$student->classroom->name}}</div>
            </div>
        </div>
    </div>

    @php
        $counter = 1;
    @endphp

    @foreach($student_notebooks as $student_notebook)
        <div class="containers-style  mt-5 ms-1 me-1">
            <p class="mt-4 title-3 text-center"><strong class="form-label ">{{ __('public.date :') }}</strong>
                {{ $student_notebook->created_at->setTimezone('Asia/Aden')->format('l, F j, Y') }}</p>

            <div class="container-title">{{__('follow_up.homework')}}</div>
            <div class=" shadow-none mt-4 ">
                <div class="table-section card  ">
                    <table class=" " id="check_table_FollowUp">
                        <tr>
                            <th class=" num_follow_table stuck">{{__('subject.subject')}}</th>
                            @foreach($classroom->subjects as $subject)
                                <td class="  border-lr ">
                                    <div class="th-head-3 title-3">
                                        {{ $subject->name }}
                                    </div>
                                </td>
                            @endforeach
                        </tr>
                        <th class=" num_follow_table stuck">{{__('follow_up.homework')}}</th>
                        @foreach($student_notebook->homework as $homework)
                            <td class="border-lr">
                                <div class="form-label ">
                                    {{ $homework }}
                                </div>
                            </td>
                        @endforeach
                    </table>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-lg-4 col-md-4 mt-1 col-ms-12  ">
                    <div class="cards_info_style mt-4 p-2 h-100">
                        <div class="form-label mb-4">{{ __('follow_up.food') }}</div>
                        <p class=" form-label"><strong
                                class="title-3">{{ __('follow_up.Did the student eat the food?') }}</strong> {{ $student_notebook->food }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mt-1 col-ms-12  ">
                    <div class="cards_info_style mt-4 p-2 h-100">
                        <div class="form-label mb-4">{{ __('follow_up.snack') }}</div>
                        <p class=" form-label"><strong
                                class="title-3">{{ __('follow_up.Did the student eat the snack?') }}</strong> {{ $student_notebook->snack }}
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 mt-1 col-ms-12  ">
                    <div class="cards_info_style mt-4 p-2 h-100">
                        <div class="form-label mb-4">{{ __('follow_up.bath') }}</div>
                        <p class=" form-label"><strong
                                class="title-3">{{ __('follow_up.How many times did the student go to the bathroom?') }}</strong>{{ $student_notebook->bath }}
                        </p>
                    </div>
                </div>
            </div>

            <div>
                الملاحظات

                <div>
                    {{$student_notebook->note}}
                </div>
            </div>

            <div class="form-label mt-5 mb-0">
                page( {{$counter++}} )
            </div>
        </div>

    @endforeach
</div>
