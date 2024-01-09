<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- ********** *********** --}}
    <link href="{{URL::asset('css/framework.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/New folder/login-signup-style.css')}}" rel="stylesheet">

</head>
<body>
    <section class="x-section">

        <div class="imgBx">
            <img src="{{('../../../public/assets/images/layouts/1.jpg')}}" alt="">
        </div>
    
        <div class="contentBx">
            <div name="logo">
                {{-- <x-authentication-card-logo /> --}}
            </div> 

            <x-validation-errors class="" />


            <div class="formBx">
                
                @if (session('status'))
                    <div class="">
                        {{ session('status') }}
                    </div>
                @endif
                <h1>Forgot </h1>
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    {{-- -- --}}
                    <div class="textBxInfo">
                        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                    </div>
                    {{-- -- --}}
                    <div class="inputBx">
                        <x-label class="textBX" for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    </div>
                    {{-- -- --}}
                        <x-button class="input-x">
                            {{ __('Email Password Reset Link') }}
                        </x-button>
                    {{-- -- --}}

                </form>
            </div>
        </div>
    </section>
</body>
</html>