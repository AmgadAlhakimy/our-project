@extends('layouts.sidebar')
@section('content')
    <?php $counter = 1 ?>
        <!--    --><?php //$month = "2024-01-31" ?><!---->
    @foreach($marks as $mark)
            <?php $month = $mark->created_at->format('F') ?>
            <?php $subject = $mark->subject->name ?>
            <?php $classroom = $mark->classroom ?>
    @endforeach

    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2"> Outcome for the month</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('marks.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row">
                            <label class="col-10">
                                <input type="text" required class="form-control " name="search"
                                    value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>

            {{-- the thacher name and the month --}}
            <form method="post" action="{{route('marks.update',$classroom->id)}}">
                @method('PUT')
                @csrf
                <div class="cards-container  third-card">
                    <div class="card-info card-info_2 col ">
                        <h4 class=" Names"> {{$classroom->name}}</h4>
{{--                        <h4 class=" text-center">{{$subject}}</h4>--}}
                    </div>

                    <div class="card-info card-info_2 col ">
                        <h4 class=" text-center">Month</h4>
{{--                        <h4 class=" Names">{{$month}}</h4>--}}
                    </div>
                </div>
                </div>

                {{-- -------***********END THE HEAD OF TABLES***********-------- --}}
                <!-- table-hover table-striped -->
                <div class=" table-section shadow-none">
                    <div class="card table-section ">
                        <table class=" ">
                            <thead>
                            <tr class="">
                                <th>
                                    <div class=" ">id</div>
                                    <div></div>
                                </th>
                                <th>
                                    <div class="">Name</div>
                                </th>
                                <th>
                                    <div class="">photo</div>
                                </th>
                                <th>
                                    <div class="">Exam</div>
                                    <div>60</div>
                                </th>
                                <th>
                                    <div class="">H.W</div>
                                    <div>20</div>
                                </th>
                                <th>
                                    <div class="">Oral</div>
                                    <div>10</div>
                                </th>
                                <th>
                                    <div class="">سلوك</div>
                                    <div>10</div>
                                </th>
                                <th>
                                    <div class=" ">Total</div>
                                    <div>100</div>
                                </th>
                                <th>
                                    <div class="">محصلة</div>
                                    <div>20</div>
                                </th>
                                <th>
                                    <div class="">Percent</div>
                                    <div>100%</div>
                                </th>
                                <th>
                                    <div class=""></div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($marks as $mark)
                                <tr>
                                    {{-- <td><input type="hidden" name="mark[]" value="{{$mark->id}}"></td> --}}
                                    {{-- <td>{{$counter}}</td> --}}
                                    <td>{{$mark->student->id}} 123123</td>
                                    <td>{{$mark->student->name}} AMGAD ALHAKEMY</td>
                                    <td><img src="{{$mark->student->photo}}" class="student-img" alt=""></td>
                                    <td><input type="number" value="{{$mark->exam}}" name="exam[]" class=" form-control "
                                            id='Exam-Mark' placeholder="_" min="0" max="60">
                                            60
                                        @error('exam')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror</td>
                                    <td><input type="number" value="{{$mark->homework}}" name="homework[]"
                                            class=" form-control "
                                            id='HW-Mark' placeholder="_" min="0" max="20">
                                            20
                                        @error('homework')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror</td>
                                    <td><input type="number" value="{{$mark->oral}}" name="oral[]" class=" form-control "
                                            id='Oral-Mark' placeholder="_" min="0" max="10">

                                            7720388293

                                        @error('oral')
                                        <small class="form-text text-danger">{{$message}}</small>
                                        @enderror</td>
                                    <td><input type="number" value="{{$mark->behavior}}" name="behavior[]"
                                            class=" form-control "
                                            id='behavior-Mark' placeholder="_" min="0" max="10">
                                            2020
                                        @error('behavior')
                                        <small class="form-text text-danger"> {{$message}}</small>
                                        @enderror</td>
                                    <td><label for="">90</label></td>
                                    <td><label for="">18</label></td>
                                    <td><label for="">90%</label></td>
                                </tr>
                                    <?php $counter++ ?>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            <div class=" box row mt-5">
                <div class=" col mt-1 ">
                    {{-- زر الترحيل إلى الكنترول --}}
                    <input class="save-button  " type="button" value="{{__('public.ترحيل')}}">
                </div>
                <div class=" col mt-1">
                    {{-- زر التعديل في كل مرة يضيف درجات قبل الترحيل --}}
                    <input class="save-button " type="submit" value="{{__('public.save')}}">
                </div>
                <div class="  col mt-1">
                    <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                </div>
            </div>
        </form>
@endsection

