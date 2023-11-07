{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
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
    <title>Masuk</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins'; 
    }
    .backg-gradient{
        background: linear-gradient(90deg, #D981B4, #865BF4);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .container{
        position: relative;
        max-width: 330px;
        width: 100%;
        background: #ffff;
        border-radius: 10px;
    }
    .container .forms{
        padding: 30px;
    }
    .container .form .title{
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
    .form .input-field{
        position: relative;
        height: 50px;
        width: 100%;
        margin-top: 30px;
    }
    .input-field input{
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
    .input-field input:is(:focus, :valid){
        border-bottom-color: #D981B4;
    }
    .input-field i{
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        color: #999;
        font-size: 23px;
        transition: all 0.2s ease;
    }
    .input-field input:is(:focus, :valid) ~ i{
       color: #D981B4;
    }
    .submit-btn{
        width: 100%; 
        height: 150%;
        margin-top: 35px;
        border:none;
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
    .submit-btn:hover{
        background-color: #ED50AB;
    }
    .form .login-signup{
        margin-top: 30px;
        text-align: center;
    }

    .splash {
    position: fixed;
    background: linear-gradient(90deg, #D981B4, #865BF4);
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    }

    .splash-content {
    text-align: center;
    color: #fff;
    }

    .content {
    display: none;
    transition: opacity 0.5s;
    opacity: 0;
    }

    .version {
    position: absolute; /* Mengatur posisi absolut */
    bottom: 10px; /* Mengatur jarak dari bawah */
    left: 50%; /* Mengatur ke tengah horizontal */
    transform: translateX(-50%); /* Untuk menggeser teks agar tepat di tengah */
    font-size: 16px; /* Ukuran font */
    color: #fff; /* Warna teks */
    }
</style>
<body class="backg-gradient">
    <div id="splash-screen" class="splash">
        <div class="splash-content">
            <img class="img-splash" src="{{ asset('kader/foto/logo-nosting.png') }}" alt="" style="height: 240px"; width="210px";>
            <div class="version">
                <p>by Poliwangi</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="forms">
            <div class="form login content" id="content">
                <span class="title">Masuk</span>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                   <div class="input-field">
                    <input type="tel" id="telp" name="telp" placeholder="No Telepon" required>
                    <i class="uil uil-phone"></i>
                   </div>
                   <div class="input-field">
                    <input type="password" id="password" name="password" placeholder="Password" required>
                    <i class="uil uil-padlock icon"></i>
                   </div>
                   <button type="submit" class="submit-btn">
                    Masuk
                    </button>
                </form>
                <div class="login-signup">
                    <span class="text">Belum punya akun? <a href="{{ __('register') }}" class="text -signup-text">Daftar</a></span>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function () {
            const splashScreen = document.getElementById("splash-screen");
            const content = document.getElementById("content");
    
            // Hide the splash screen and show the main content
            splashScreen.style.display = "none";
            content.style.display = "block";
    
            // Add a fade-in effect to the main content
            setTimeout(function () {
                content.style.opacity = 1;
            }, 10);
        }, 3000); // You can adjust the time (in milliseconds) for how long the splash screen is displayed.
    });
    
    </script>
</html>
