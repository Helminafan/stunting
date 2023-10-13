{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
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
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <title>Daftar</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins';
    }

    .backg-gradient {
        background: linear-gradient(90deg, #D981B4, #865BF4);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container {
        position: relative;
        max-width: 330px;
        width: 100%;
        background: #ffff;
        border-radius: 10px;
    }

    .container .forms {
        padding: 30px;
    }

    .container .form .title {
        position: relative;
        font-size: 27px;
        font-weight: 600;
    }

    .form .title::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        height: 3px;
        width: 30px;
        background-color: #D981B4;
        border-radius: 25px;
    }

    .form .input-field {
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 30px;
    }

    .input-field input {
        position: absolute;
        height: 100%;
        width: 100%;
        padding: 0 35px;
        border: none;
        outline: none;
        font-size: 16px;
        border-bottom: 2px solid #ccc;
        border-top: 2px solid transparent;
    }

    .input-field input:is(:focus, :valid) {
        border-bottom-color: #D981B4;
    }

    .input-field i {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }

    .input-field input:is(:focus, :valid)~i {
        color: #D981B4;
    }

    .submit-btn {
        width: 100%;
        height: 150%;
        margin-top: 35px;
        border: none;
        color: #fff;
        font-size: 1rem;
        font-weight: 600;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #D981B4;
        cursor: pointer;
        display: inline-block;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        background-color: #ED50AB;
    }

    /* .form .button{
        margin-top: 35px;
    }
    .form .button input{
        border:none;
        color: #fff;
        font-size: 17px;
        font-weight: 500;
        letter-spacing: 1px;
        border-radius: 6px;
        background-color: #D981B4;
        cursor: pointer;
        transition: all 0.3s ease;
    } */
    .button ipnut:hover {
        background-color: #ED50AB;
    }

    .form .login-signup {
        margin-top: 30px;
        text-align: center;
    }
</style>

<body class="backg-gradient">
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Daftar</span>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    {{-- <div class="input-field">
                        <input type="text" placeholder="Nama" name="name" required>
                        <i class="uil uil-user-square"></i>
                    </div> --}}
                    <div class="input-field">
                        <input type="email" placeholder="Email" name="email" required>
                        <i class="uil uil-at"></i>
                    </div>

                    <div class="input-field">
                        <input type="number" placeholder="Nomor Telepon" name="telp" required>
                        <i class="uil uil-phone"></i>
                    </div>

                    <div class="input-field">
                    <input type="text" placeholder="Alamat" name="address" required>
                    <i class="uil uil-sign-alt"></i>
                   </div> 

                    <div class="input-field">
                        <input type="password" placeholder="Password" name="password" required>
                        <i class="uil uil-padlock icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Konfirmasi Password" name="password_confirmation" required>
                        <i class="uil uil-padlock icon"></i>
                    </div>
                    <button type="submit" class="submit-btn">
                        Daftar
                    </button>
                </form>
                <div class="login-signup">
                    <span class="text">Sudah punya akun? <a href="{{ __('login') }}"
                            class="text -signup-text">Masuk</a></span>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
