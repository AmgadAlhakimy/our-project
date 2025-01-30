<div class="my-table mt-5">
    <!-- Start Personal Info -->
    <div class="row">

        <div class="table-header">

            <h4 class="form-group container-title">{{ __('follow_up.follow-up notebook') }}</h4>
        <label class="col">
            <div class="search p-relative">
                {{-- <i class="fa-solid fa-magnifying-glass"></i> --}}
                <input wire:model.live.debounce.500ms="search"
                       type="text" class="form-control " name="search"
                       placeholder="{{__('sidebar.search')}}">
            </div>
        </label>
        </div>
        <div class="col-12">
            <div class="cards_info_style">
                <div class="pt-3 pb-3 me-4 ms-4">
                    <input type="date" class="form-control cards_title text-center" wire:model.live.debounce.500ms="search_date">
                    <h1>Student Follow-Up Information</h1>
                    <div class="container">
                        @foreach($student_notebooks as $student_notebook)
                            <div class="section">
                                <p><strong>Date:</strong> {{ $student_notebook->created_at->setTimezone('Asia/Aden')->format('l, F j, Y') }}</p>

                                <h2>Homework</h2>
                                <table>
                                    <tr>
                                        <td>Subjects</td>
                                        @foreach($classroom->subjects as $subject)
                                            <td>{{ $subject->name }}</td>
                                        @endforeach
                                    </tr>
                                    <tr>
                                        <td>Homework</td>
                                        @foreach($student_notebook->homework as $homework)
                                            <td>{{ $homework }}</td>
                                        @endforeach
                                    </tr>
                                </table>
                            </div>

                            <div class="section">
                                <h2>Food</h2>
                                <p><strong>Did the student eat the food? </strong> {{ $student_notebook->food }}</p>
                            </div>

                            <div class="section">
                                <h2>Snack</h2>
                                <p><strong>Did the student eat the snack? </strong> {{ $student_notebook->snack }}</p>
                            </div>

                            <div class="section">
                                <h2>Bathroom</h2>
                                <p><strong>How many times did the student go to the bathroom? </strong> {{ $student_notebook->bath }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
