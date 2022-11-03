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
                <h1>Login to Your Account</h1>
                {{-- <div class="google-login">
                    <a href="{{ url('/google') }}">
                        <img src="{{ URL::asset('public/icons/Google.png') }}" alt="" />
                        <p>Login with google</p>
                    </a>
                </div>
                <p>or</p> --}}
                <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form__group field">
                            <input type="email"  name="email" :value="old('email')" required autofocus class="form__field" placeholder="Email"  id="email"/>
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="password" name="password" required class="form__field" placeholder="password"  id="password"
                                required />
                            <label for="password" class="form__label">Password</label>
                        </div>

                        {{-- <div class="block mt-4">
                            <label for="remember_me" class="flex items-center">
                                <x-jet-checkbox id="remember_me" name="remember" />
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div> --}}
                            {{-- @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif --}}
                        <button>Submit</button>
                    </form>
                </div>
            </div>
            <div class="right-login">
                <div class="right-login-content">
                    <h2>New Here !!</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem, ipsum dolor.</p>
                    <a href="{{ url()->previous() }}">
                        <button>Signup</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>


