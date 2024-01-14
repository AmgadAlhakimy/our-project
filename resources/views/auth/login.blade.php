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
            {{-- <img src="../../../public/assets/images/layouts/2.jpg" alt=""> --}}
            <img src="{{('../../../public/assets/images/layouts/1.jpg')}}" alt="">
        </div>
    
        <div class="contentBx" >
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

                <h1>Login</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="inputBx">
                        <x-label class="textBX" for="id" value="{{ __('ID') }}" />
                        <x-input id="name" class="form-control " type="number" name="id" :value="old('id')" required autofocus autocomplete="id" />
                    </div>
                    {{-- -- --}}

                    <div class="inputBx">
                        <x-label class="textBX" for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                    </div>
        
                    <div class="remember">
                        <label for="remember_me" class="flex items-center">
                            <x-checkbox id="remember_me" name="remember" />
                            <span class="textBX">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    
                    <x-button class="input-x">
                        {{ __('Login') }}
                    </x-button>

                    <div class="inputBx">
                        @if (Route::has('password.request'))
                            <a class="textBxInfo ml-5" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
        
                    </div>
                    {{-- -- --}}

                </form>
            </div>
        </div>
    </section>
</body>
</html>

