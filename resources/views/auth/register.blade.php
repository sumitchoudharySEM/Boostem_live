<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/icons/logo.png') }}">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('public/css/login.css') }}" />
</head>

<body>
    <div class="login">
        <div class="login-content">
            <div class="left-login">
                <h1>Create Your Account</h1>
                {{-- <div class="google-login">
                    <a href="{{ url('/google') }}">
                        <img src="{{ URL::asset('public/icons/Google.png') }}" alt="" />
                        <p>Login with google</p>
                    </a>
                </div>
                <p>or</p> --}}
                <div class="login-form">
                     
                    <form method="POST" action="{{url()->current()}}">
                        @csrf
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Name"  name="name" id="name"
                            :value="old('name')" required autofocus  />
                            <label for="name" class="form__label">name</label>
                        </div>
                        <div class="form__group field">
                            <input type="email" class="form__field" placeholder="Name" name="email" id="email"
                            :value="old('email')"  required />
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" class="form__field" placeholder="Name" name="password" id="password"
                                required />
                            <label for="password" class="form__label">Password</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" class="form__field" placeholder="Name" name="password_confirmation" id="password_confirmation"
                                required />
                            <label for="password_confirmation" class="form__label">Confirm Password</label>
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-jet-label for="terms">
                                <div class="flex items-center">
                                    <x-jet-checkbox name="terms" id="terms"/>
        
                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-jet-label>
                        </div>
                    @endif
                        <button>Submit</button>
                    </form>
                </div>
            </div>
            <div class="right-login">
                <div class="right-login-content">
                    <h2>Already have an account</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor.</p>
                    <a href="{{ route('login') }}">
                        <button>Sign in</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


