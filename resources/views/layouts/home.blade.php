@extends('layouts.sidebar')
@section('content')
<div class=" toggle_section ">


 
    <div class="container">
        <img class="toggle_img" src="{{URL::asset('assets/images/layouts/logo2.png')}}" alt=""/>
        <p class="title-5 mt-5">{{__('public.home text')}}</p>
        <span class="container_icon ">
            <span class="icon-container ">
                
            </span>
        </span>
    </div>
    
<script src="{{URL::asset('js/toggle.js')}}"></script>

</div>

@endsection




