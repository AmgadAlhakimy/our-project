@extends('layouts.sidebar')
@section('content')
<div class=" toggle_section ">


 
    <div class="container">
        <img class="toggle_img" src="{{URL::asset('assets/images/layouts/logo2.png')}}" alt=""/>
        <p class="title-5 mt-5">{{__('public.home text')}}</p>
        <div class="icon-container"></div>
 
    </div>
    <div class="user_name">
        <div class="">

            <span class="title-3">  13/2/2025  </span>
            <span class="title-3">  9:20:21  </span>
            <span class=" form-label  ">{{ Auth::user()->name }}</span>
        </div>
    </div>

    
<script src="{{URL::asset('js/toggle.js')}}"></script>


 

    {{-- <div class="row toggle">

    //     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mt-4 radus-10 shadow toggle_card_master  me-1 ms-1">
    //         <div class="row toggle_card p-3  ">
    //             <i class="col fa-solid fa-user-tie toggle_icon "></i>
    //             <div class="col  toggle_box">
    //                 <div class="row container-title">84</div>
    //                 <div class="row cards_title">teachers</div>
    //             </div>
    //         </div>
    //     </div>

    //     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mt-4 radus-10  shadow toggle_card_master  me-1 ms-1">
    //         <div class="row toggle_card p-3  ">
    //             <i class="col fa-solid fa-user-tie toggle_icon "></i>
    //             <div class="col text-center  toggle_box">
    //                 <div class="row container-title">84</div>
    //                 <div class="row cards_title">students</div>
    //             </div>
    //         </div>
    //     </div>

    //     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mt-4 radus-10  shadow toggle_card_master  me-1 ms-1">
    //         <div class="row toggle_card p-3  ">
    //             <i class="col fa-solid fa-user-tie toggle_icon "></i>
    //             <div class="col text-center  toggle_box">
    //                 <div class="row container-title">84</div>
    //                 <div class="row cards_title">educaton levels</div>
    //             </div>
    //         </div>
    //     </div>

    //     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mt-4 radus-10  shadow toggle_card_master  me-1 ms-1">
    //         <div class="row toggle_card p-3  ">
    //             <i class="col fa-solid fa-user-tie toggle_icon "></i>
    //             <div class="col text-center  toggle_box">
    //                 <div class="row container-title">84</div>
    //                 <div class="row cards_title">classes</div>
    //             </div>
    //         </div>
    //     </div>

    //     <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12 mt-4 radus-10  shadow toggle_card_master  me-1 ms-1">
    //         <div class="row toggle_card p-3  ">
    //             <i class="col fa-solid fa-user-tie toggle_icon "></i>
    //             <div class="col text-center  toggle_box">
    //                 <div class="row container-title">84</div>
    //                 <div class="row cards_title">subjects</div>
    //             </div>
    //         </div>
    //     </div>
    // </div> --}}
</div>

@endsection
