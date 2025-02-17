<div class="section">
    @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form wire:submit="save" action="">
        @csrf
        <h3 class="container-title">{{ __('user.change the password of')}}</h3>
        <h3 class="display-4 form-label container-title ">{{$name}} </h3>
        <div class="container containers-style">
            <div class="row">
                <!-- Password -->
                <div class="box col-lg-6 col-md-6">
                    <label class="form-text" for="password">{{ __('user.password') }}</label>
                    <input type="password" class="form-control" id="password"
                           wire:model.live.debounce.500ms="password" placeholder="(A-Z) (az) (0-9) (!@#$%)" >
                    @error('password') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>
                <!-- Confirm Password -->
                <div class="box col-lg-6 col-md-6">
                    <label class="form-text" for="confirm_password">{{ __('user.confirm password') }}</label>
                    <input type="password" class="form-control" id="confirm_password"
                           wire:model.live.debounce.500ms="confirm_password">
                    @error('confirm_password') <small class="form-text text-danger">{{ $message }}</small> @enderror
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class=" row">
            <div class="box col ">
                <button type="submit" class=" save-button text-center">
                    {{__('public.save')}}
                    <div wire:loading class="spinner-border spinner-border-sm"></div>
                </button>
            </div>
            <div class="box  col">
                <a href="{{route('display-users')}}" class="btn clear-button"><i
                        class="fa-solid fa-ban"></i> {{__('public.cancel')}}</a>
            </div>
        </div>
    </form>
</div>
