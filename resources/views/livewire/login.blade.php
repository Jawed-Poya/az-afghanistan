<div class="row mt-4 flex-column justify-content-center align-items-center" xmlns:wire="http://www.w3.org/1999/xhtml">
    <br>
    <div class=" {{ $signUp ? 'col-md-8' : 'col-md-6' }} border p-5 rounded">
        <div class="input-group justify-content-center">
            <button class="btn {{ !$signUp ? 'btn-success' : 'btn-outline-success' }} px-4" wire:click="changeForm('login')" type="button">
                <i class="bi bi-lock"></i>
                {{__('Login')}}
            </button>
            <button class="btn {{ $signUp ? 'btn-success' : 'btn-outline-success' }} px-4" wire:click="changeForm('signup')" type="button">
                <i class="bi bi-file-person"></i>
                {{__('Sign Up')}}
            </button>
        </div>

        @if(!$signUp)
        <form class="mt-5" method="post" wire:submit.prevent="login">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">
                    <span class="text-danger">*</span>
                    {{ __('E-mail') }}
                </label>
                <input wire:model.lazy="data.email" type="text" class="form-control" id="email">
                @error('email')
                    <div class="text-danger small">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">
                    <span class="text-danger">*</span>
                    {{ __('Password') }}
                </label>
                <input wire:model.lazy="data.password" type="password" class="form-control" id="password">
                @error('password')
                <div class="text-danger small">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">
                {{ __('Login') }}
                <i class="bi bi-arrow-right"></i>
            </button>
            <br>
            <hr>
            <div class="d-flex flex-column gap-2 align-items-center">
                <a href="" id="google-sign-up" class="btn btn-danger">
                    <i class="bi bi-google"></i>
                    {{ __('Login with Google') }}
                </a>
                <a href="" id="facebook-sign-up" class="btn btn-primary">
                    <i class="bi bi-facebook"></i>
                    {{ __('Login with Facebook') }}
                </a>
            </div>
        </form>
        @endif

        @if($signUp)
        <form class="mt-5" method="post" wire:submit.prevent="signUp">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstname" class="form-label">
                            <span class="text-danger">*</span>
                            {{__('First Name')}}
                        </label>
                        <input wire:model.lazy="data.firstname" name="firstname" type="text" class="form-control" id="firstname">
                        @error('firstname')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">
                            {{__('Last Name')}}
                        </label>
                        <input wire:model.lazy="data.lastname" name="lastname" type="text" class="form-control" id="lastname">
                        @error('lastname')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="email" class="form-label">
                            <span class="text-danger">*</span>
                            {{ __('E-mail') }}
                        </label>
                        <input wire:model.lazy="data.email" name="email" type="email" class="form-control" id="email">
                        @error('email')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="city" class="form-label">
                            <span class="text-danger">*</span>
                            {{ __('City') }}
                        </label>
                        <input wire:model.lazy="data.city" name="city" type="text" class="form-control" id="city">
                        @error('city')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="state" class="form-label">
                            <span class="text-danger">*</span>
                            {{ __('Country') }}
                        </label>
                        <select wire:model.lazy="data.country" class="form-select country" name="country" id="country">
                            <option value="">{{ __('Country') }}</option>
                        </select>
                        @error('country')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">
                            <span class="text-danger">*</span>
                            {{ __('Address') }}
                        </label>
                        <input wire:model.lazy="data.address" name="address" type="text" class="form-control" id="address">
                        @error('address')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="zip" class="form-label">
                            {{ __('Zip Code') }}
                        </label>
                        <input wire:model.lazy="data.zip" name="zip" type="text" class="form-control" id="zip">
                        @error('zip')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">
                            {{ __('Phone Number') }}
                        </label>
                        <input wire:model.lazy="data.phoneNumber" name="phoneNumber" type="text" class="form-control" id="phoneNumber">
                        @error('phoneNumber')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="photo" class="">
                            {{ __('Photo') }}
                        </label>

                        @if(isset($data['photo']))
                            @if($data['photo']->isPreviewable())
                                @php $temporary = $data['photo']->temporaryUrl(); @endphp
                                <img src="{{ $temporary }}" class="img-thumbnail img-temporary-display" alt=""><br>
                            @endif
                        @endif
                        <input wire:model="data.photo" name="photo" type="file" class="form-control" id="photo" accept=".png, .jpg, .jpeg, .gif, *.*">
                        @error('photo')
                        <div class="text-danger small">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-success">
                {{ __('Login') }}
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>
        @endif

    </div>
    <br>

</div>

@push('scripts')

<script>
    window.addEventListener("signUpLoaded", function() {
        let country = document.querySelector('.country');
        let path = '{{ asset('vendor/json/countries.json') }}';
        fetchCountriesInfo(path, '', country)
    });
</script>
@endpush
