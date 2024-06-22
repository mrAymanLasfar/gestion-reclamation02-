{{-- 
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4" style="background-color: green">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

























































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

.form_wrapper .col_half {
  width: 50%;
  float: left;
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

.form_wrapper input[type="checkbox"],
.form_wrapper input[type="radio"] {
  border: 0;
  clip: rect(0 0 0 0);
  height: 1px;
  margin: -1px;
  overflow: hidden;
  padding: 0;
  position: absolute;
  width: 1px;
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

.form_wrapper .radio_option label {
  margin-right: 1em;
  position: relative;
}

.form_wrapper .radio_option input:hover + label:before {
  border-color: #cccccc;
}

.form_wrapper .radio_option input:checked + label:before {
  background-color: #000000;
  border-color: #000000;
}

.form_wrapper .select_option {
  position: relative;
  width: 100%;
}

.form_wrapper .select_option select {
  display: inline-block;
  width: 100%;
  height: 35px;
  padding: 0px 15px;
  cursor: pointer;
  color: #7b7b7b;
  border: 1px solid #cccccc;
  background: #fff;
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  transition: all 0.2s ease;
}

.form_wrapper .select_option select:hover,
.form_wrapper .select_option select:focus {
  color: #000000;
  background: #fafafa;
  border-color: #000000;
  outline: none;
}

.form_wrapper .select_option .select_arrow {
  position: absolute;
  top: calc(50% - 4px);
  right: 15px;
  width: 0;
  height: 0;
  pointer-events: none;
  border-width: 8px 5px 0 5px;
  border-style: solid;
  border-color: #7b7b7b transparent transparent transparent;
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
  .input_field {
    width: 100%; /* Ensures the input_field div spans the full width */
}



.input_container {
    display: flex;
    align-items: center; /* Aligns items vertically centered */
    width: 100%;
}

.icon {
    margin-right: 8px; /* Adds spacing between the icon and the input field */
}

.input {
    flex: 1; /* Allows the input field to take up remaining space */
}

.input_container .input input {
    width: 100%; /* Ensures the input field spans the available width within its container */
    box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
}





}
/* .class1 {
        color: red;
    } */
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX" crossorigin="anonymous" referrerpolicy="no-referrer" />  
  </head>


    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Registration Form</h2>
            </div>
            <form method="POST" action="{{ route('register') }}" class="clearfix">
                @csrf


                <div class="input_field"> 
                  <div class="input_container">
                      <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #e6a500;" class="bi bi-person" viewBox="0 0 16 16">
                          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                        </svg>
                      </div>
                      <div class="input">
                          <x-text-input id="name" class="block mt-1 w-full" placeholder="Name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                      </div>
                  </div>
                  <x-input-error :messages="$errors->get('name')" class="mt-2" />
              </div>

                <div class="input_field">
                  <div class="input_container">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #e6a500;" class="bi bi-envelope-at" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                        <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                      </svg>
                    </div>
                    <div class="input">
                      <x-text-input id="email" class="block mt-1 w-full" placeholder="E-mail" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    </div>
                  </div>
                  <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                <div class="input_field">
                  <div class="input_container">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #e6a500;" class="bi bi-file-lock2" viewBox="0 0 16 16">
                        <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1m2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224"/>
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
                      </svg>
                    </div>
                    <div class="input">
                    <x-text-input id="password" class="block mt-1 w-full" placeholder="Password" type="password" name="password" required autocomplete="new-password" />
                    </div> </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>


                <div class="input_field">
                  <div class="input_container">
                    <div class="icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="color: #e6a500;" class="bi bi-file-lock2" viewBox="0 0 16 16">
                        <path d="M8 5a1 1 0 0 1 1 1v1H7V6a1 1 0 0 1 1-1m2 2.076V6a2 2 0 1 0-4 0v1.076c-.54.166-1 .597-1 1.224v2.4c0 .816.781 1.3 1.5 1.3h3c.719 0 1.5-.484 1.5-1.3V8.3c0-.627-.46-1.058-1-1.224"/>
                        <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1"/>
                      </svg>
                    </div>
                    <div class="input">
                    <x-text-input id="password_confirmation" placeholder="Confirmer password" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                  </div> </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>


                <div class="flex items-center justify-end mt-4">
                  <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                      {{ __('Already registered?') }}
                  </a>
      
                  <x-primary-button class="ml-4" style="background-color: #e6a500">
                      {{ __('Register') }}
                  </x-primary-button>
              </div>

            </form>
        </div>
    </div>
</x-guest-layout>
