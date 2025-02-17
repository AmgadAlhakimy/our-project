<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')
    
    <div class="containr_lang position-absolute top-0 start-0 row ">
        <div class="col lang_style mt-2 me-3 ms-3">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <div class="text-center">
                    <a rel="alternate" class="" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }} "
                    class="">
                        <div class="form-label m-0 p-0">
                            {{ $properties['native'] }}
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="col d-flex align-items-center ">
            <a href="{{ route('main_page') }}"><i class="container-title mt-2 h1 fa-solid fa-home-lg-alt"></i></a>
        </div>
    </div>
    
@if(session()->has('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
<div class="container">
    <h1>{{trans('auth.welcome')}}</h1>
    <p>{{trans('auth.your account is currently disabled')}}</p>
    <p>{{trans('auth.please contact us to enable it')}}</p>
</div>
</div>
