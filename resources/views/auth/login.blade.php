{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3" style="background-color: green">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> 



 --}}



















<x-guest-layout>
    <head>
    <style>
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            background: #f2f2f2;
        }

        .clearfix:after {
            content: "";
            display: block;
            clear: both;
            visibility: hidden;
            height: 0;
        }

        .form_wrapper {
            background: #fff;
            width: 400px;
            max-width: 100%;
            box-sizing: border-box;
            padding: 25px;
            margin: 8% auto 0;
            position: relative;
            z-index: 1;
            border-top: 5px solid #f5ba1a;
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            transform-origin: 50% 0%;
            transform: scale3d(1, 1, 1);
            transition: none;
            animation: expand 0.8s 0.6s ease-out forwards;
            opacity: 0;
        }

        .form_wrapper h2 {
            font-size: 1.5em;
            line-height: 1.5em;
            margin: 0;
        }

        .form_wrapper .title_container {
            text-align: center;
            padding-bottom: 15px;
        }

        .form_wrapper .row {
            margin: 10px -15px;
        }

        .form_wrapper .input_field {
            position: relative;
            margin-bottom: 20px;
            animation: bounce 0.6s ease-out;
        }

        .form_wrapper .input_field > span {
            position: absolute;
            left: 0;
            top: 0;
            color: #333;
            height: 100%;
            border-right: 1px solid #cccccc;
            text-align: center;
            width: 30px;
        }

        .form_wrapper input[type="text"],
        .form_wrapper input[type="email"],
        .form_wrapper input[type="password"] {
            width: 100%;
            padding: 8px 10px 9px 35px;
            height: 35px;
            border: 1px solid #cccccc;
            box-sizing: border-box;
            outline: none;
            transition: all 0.30s ease-in-out;
        }

        .form_wrapper input[type="text"]:hover,
        .form_wrapper input[type="email"]:hover,
        .form_wrapper input[type="password"]:hover {
            background: #fafafa;
        }

        .form_wrapper input[type="text"]:focus,
        .form_wrapper input[type="email"]:focus,
        .form_wrapper input[type="password"]:focus {
            box-shadow: 0 0 2px 1px rgba(255, 169, 0, 0.5);
            border: 1px solid #f5ba1a;
            background: #fafafa;
        }

        .form_wrapper input[type="submit"] {
            background: #f5ba1a;
            height: 35px;
            line-height: 35px;
            width: 100%;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            font-size: 1.1em;
            margin-bottom: 10px;
            transition: all 0.30s ease-in-out;
        }

        .form_wrapper input[type="submit"]:hover,
        .form_wrapper input[type="submit"]:focus {
            background: #e6a500;
        }

        /* .form_wrapper input[type="checkbox"],
        .form_wrapper input[type="radio"] {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        } */

        .form_wrapper input[type="checkbox"] {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    width: 20px;
    height: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    outline: none;
    transition: all 0.3s;
    margin-right: 5px;
    vertical-align: middle;
}

.form_wrapper input[type="checkbox"]:checked {
    background-color: #f5ba1a; /* Adjust color as needed */
    border-color: #f5ba1a; /* Adjust color as needed */
}


        .form_wrapper .checkbox_option label {
            margin-right: 1em;
            position: relative;
        }

        .form_wrapper .checkbox_option input:hover + label:before {
            border-color: #000000;
        }

        .form_wrapper .checkbox_option input:checked + label:before {
            background-color: #000000;
            border-color: #000000;
        }

        .form_wrapper .checkbox_option input:checked + label:after {
            animation: check 0.8s ease 0s running;
            display: block;
            width: 7px;
            height: 20px;
            border-color: #000000;
        }

        .credit {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 15px;
            color: #f5ba1a;
        }

        @keyframes check {
            0% {
                height: 0;
                width: 0;
            }
            25% {
                height: 0;
                width: 7px;
            }
            50% {
                height: 20px;
                width: 7px;
            }
        }

        @keyframes expand {
            0% {
                transform: scale3d(1, 0, 1);
                opacity: 0;
            }
            25% {
                transform: scale3d(1, 1.2, 1);
            }
            50% {
                transform: scale3d(1, 0.85, 1);
            }
            75% {
                transform: scale3d(1, 1.05, 1);
            }
            100% {
                transform: scale3d(1, 1, 1);
                opacity: 1;
            }
        }

        @keyframes bounce {
            0% {
                transform: translate3d(0, -25px, 0);
                opacity: 0;
            }
            25% {
                transform: translate3d(0, 10px, 0);
            }
            50% {
                transform: translate3d(0, -6px, 0);
            }
            75% {
                transform: translate3d(0, 2px, 0);
            }
            100% {
                transform: translate3d(0, 0, 0);
                opacity: 1;
            }
        }

        .input_container {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .icon {
            margin-right: 8px;
        }

        .input {
            flex: 1;
        }

        .input_container .input input {
            width: 100%;
            box-sizing: border-box;
        }

        .remember_me {
            color: #333;
        }

        .forgot_password {
            text-align: right;
            display: block;
            margin-top: -10px;
            color: #f5ba1a;
            text-decoration: none;
        }

        .forgot_password:hover {
            color: #e6a500;
        }

        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    </head>

    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Login Form</h2>
            </div>
            <form method="POST" action="{{ route('login') }}" class="clearfix">
                @csrf

                <div class="input_field">
                    <div class="input_container">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #e6a500;" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm14-1H2a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm-1.446 2.105L8 8.018l-4.554-2.913L1 6.383v4.411l2.853-1.825a.5.5 0 0 1 .549.848L1 12.57V12h14v.57l-2.402-1.531a.5.5 0 1 1 .549-.848L15 10.794V6.383l-1.446-.894z"/>
                            </svg>
                        </div>
                        <div class="input">
                            <x-text-input id="email" class="block mt-1 w-full" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="input_field">
                    <div class="input_container">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #e6a500;" class="bi bi-lock" viewBox="0 0 16 16">
                                <path d="M8 1a4 4 0 0 0-4 4v3H3.5A1.5 1.5 0 0 0 2 9.5v6A1.5 1.5 0 0 0 3.5 17h9a1.5 1.5 0 0 0 1.5-1.5v-6A1.5 1.5 0 0 0 12.5 8H12V5a4 4 0 0 0-4-4zm-3 5V5a3 3 0 0 1 6 0v3H5z"/>
                            </svg>
                        </div>
                        <div class="input">
                            <x-text-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="current-password" />
                        </div>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                {{-- <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-red-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div> --}}

                <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

                
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
        
                    <x-primary-button class="ml-3" style="background-color: #e6a500">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                
            </form>
        </div>
    </div>
</x-guest-layout> 
