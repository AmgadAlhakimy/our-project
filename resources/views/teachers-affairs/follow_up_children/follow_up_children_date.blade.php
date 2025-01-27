{{--   واجهة معلومات الطالب كاملة --}}
@extends('layouts.sidebar')
@section('content')
    <div class="my-table  ">
        <!-- Start personal info  -->
        <div class="row ">
            <label class="col-12 container-title  mt-5 mb-3">{{__('student.personal info')}}</label>
            {{-- name and photo --}}
            <div class="col-12 mb-5 ">
                <div class="cards_info_style row me-1 ms-1 pt-4 pb-4">
                    {{-- 1 --}}
                    <div class="center_row_up col-4">
                        <img src="" class="personal_img " alt="photo"></td>
                    </div>
                    <div class="center_row_up col row ">
                        <div class="col-4">
                            <label class=" col-12 text-center me-2 ms-2  cards_sup_title">3298791245</label>
                            <label class=" col-12 text-center  cards_sup_title">frist grade</label>
                        </div>
                        <label class="col  cards_title  text-center"> khaled abulnaser mansor abdulsafi</label>
                    </div>
                </div>
            </div>


            {{-- ---------------------------------- --}}

            <div class="col-12 ">
                <div class="cards_info_style ">
                    <div class=" pt-3 pb-3 me-4 ms-4">
                        {{-- 1 --}}
                        <input type="date" class="form-control  cards_title  text-center  "></input>
                    </div>
                </div>
            </div>
            <div class="mt-5 row">
                <div class="box col ">
                    <button type="submit" class=" save-button text-center">
                        {{__('public.show')}}
                        <div wire:loading class="spinner-border spinner-border-sm"></div>
                    </button>
                </div>
                <div class="box  col">
                    <button type="reset" class=" clear-button text-center">
                        {{__('public.clear')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection






{{-- <div class="col-ms-12 col-md-6 col-lg- ">
    <div class="cards_info_style row me-1 ms-1 pt-3 pb-3">
            <label class="col  cards_title  text-center   "> 17/12/2025</label>
    </div>
</div> --}}
