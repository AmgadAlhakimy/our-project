<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- ********** *********** --}}
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/framework.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/New folder/login-signup-style.css')}}" rel="stylesheet">
    <title> Login </title>

</head>
<body>
    <section class="x-section">

        <div class="imgBx">
            <img src="{{URL::asset('assets/images/layouts/1.jpg')}}" alt="">
        </div>

        <div class="contentBx" >
            <div name = "logo">
                 <x-authentication-card-logo />
            </div>

{{--            <x-validation-errors class="" />--}}

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
                        <x-input id="name" class="form-control " type="number" name="student_id" :value="old('id')"  autofocus autocomplete="id" />
                        @error('student_id')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    {{-- -- --}}

                    <div class="inputBx">
                        <x-label class="textBX" for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="form-control" type="password" name="password"  autocomplete="current-password" />
                        @error('password')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
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

<<<<<<< HEAD
=======


                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4 ">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif

                    <div class="">


                        <h3 class="textBxInfo">Login with social media</h3>
                        <ul class="sci">
                            <a href=""></a>
                            <li><a href="https://m.facebook.com/login/?locale=ar_AR&refsrc=deprecated"><img src="../../../public/assets/images/layouts/f.jpg" alt=""></a></li>
                            <li><a href="https://web.whatsapp.com"><img src="../../../public/assets/images/layouts/w.jpg"  alt=""></a></li>
                            <li><a href="https://www.instagram.com/accounts/login/?hl=ar"><img src="../../../public/assets/images/layouts/insta.jpg" alt=""></a></li>
                            {{-- <li><img src="X" alt=""></li>
                            <li><img src="telegram" alt=""></li> --}}
                        </ul>

                    </div>
>>>>>>> ae1cabe06bdc6f4defec2caa02040f8ab6913ffa
                </form>
            </div>
        </div>
    </section>
</body>
</html>

