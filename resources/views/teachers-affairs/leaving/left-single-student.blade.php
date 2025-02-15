<div class="my-table mt-5 mb-5">
    <!-- Start Personal Info -->
    <div class="mt-5 mb-5">.</div>
    @if($leftRecords->isEmpty())
        <p>{{ __('leaving.no leaving record found for this student') }}</p>
    @else
        <div class="table-hder">
            <div class="row mt-5">
                <div class="text-center col-4 col-md-3 col-sm-12">
                    <img src="{{ asset('storage/' . $student->photo) }}" class="personal_img" alt="photo">
                </div>
                <div class="mt-4 col-8 col-md-9 col-sm-12 row">
                    <div class="col-12 cards_title text-center">{{ $student->name }}</div>
                    <div class="col-12 cards_sup_title text-center">{{ $student->classroom->name }}</div>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>{{ __('public.date') }}</th>
                <th>{{ __('leaving.left reason') }}</th>
            </tr>
            </thead>
            <tbody>
            @foreach($leftRecords as $leftRecord)
            <tr>
                <td>{{ $leftRecord->created_at->format('Y-m-d') }}</td>
                <td>{{ $leftRecord->leave_reason }}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
