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
    <section class="section">

        <div class="imgBx">
            <img src="../../../public/assets/images/layouts/2.jpg" alt="">
        </div>
    
        <div class="contentBx" >
            <div name="logo">
                {{-- <x-authentication-card-logo /> --}}
            </div> 
    
            <x-validation-errors class="mb-4" />

            <div class="formBx">
                <h1>sign up</h1>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
        
                    <div class="inputBx">
                        <x-label class="textBX" for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="form-control " type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    </div>

                    <div class="inputBx">
                        <x-label class="textBX" for="id" value="{{ __('ID') }}" />
                        <x-input id="name" class="form-control " type="number" name="id" :value="old('id')" required autofocus autocomplete="id" />
                    </div>
        
                    <div class="inputBx">
                        <x-label class="textBX" for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="form-control " type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
        
                    <div class="inputBx">
                        <x-label class="textBX" for="password" value="{{ __('Password') }}" />
                        <x-input id="password" class="form-control " type="password" name="password" required autocomplete="new-password" />
                    </div>
        
                    <div class="inputBx">
                        <x-label class="textBX" for="password_confirmation" value="{{ __('Confirm Password') }}" />
                        <x-input id="password_confirmation" class="form-control " type="password" name="password_confirmation" required autocomplete="new-password" />
                    </div>
        
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
                        
                        <button class="input-x">
                            {{ __('Register') }}
                        </button>

                        <div class="inputBx">
                            <p class="">Don't have an account?<a class="text-href" href="{{ route('login') }}">
                                {{ __(' login') }}
                            </a></p>
                        </div>
                        
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
                </form>
            </div>
        </div>
    </section>
    
</body>
</html>



{{-- 
<x-guest-layout>
    
    <x-authentication-card class="contentBx">
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="inputBx">
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
 --}}
