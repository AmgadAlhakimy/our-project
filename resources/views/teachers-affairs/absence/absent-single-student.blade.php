<div class="my-table mt-5 mb-5">
    <!-- Start Personal Info -->
    <div class="mt-5 mb-5">.</div>
    @if($absences->isEmpty())
        <p class="container-title ">{{ __('absent.no absence records found for this student') }}</p>
    @else
        <div class="table-hder">
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


        <div class=" shadow-none mt-4 ">
            <div class="table-section card  ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>
                        <th class="num_table ">{{__('public.num')}}</th>
                        <th>
                            <div class="form-label">
                                {{ __('public.date') }}
                            </div>
                        </th>
                        <th>
                            <div class="form-label">
                                {{ __('absent.absent reason') }}
                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1 ?>
                    @foreach($absences as $absence)
                        <tr>
                            <td class="num_table ">{{$counter}}</td>
                                <?php $counter++ ?>
                            <td>
                                <div class="td_rect">
                                    {{ $absence->created_at->format('Y-m-d') }}
                                </div>
                            </td>
                            <td>
                            <div class="td_rect">
                                {{ $absence->absent_reason }}
                            </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
</div>
