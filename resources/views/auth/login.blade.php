<style>
    .geometric-background {
        background-color: #9c7b68;
    }

    .dark-text {
        color: #ddd;
        font-size: 50px;
    }

    ::placeholder {
        font-size: 20px;
        padding: 5px;
        color: white;
    }
</style>

<x-guest-layout>

    <body>
        <div class="flex items-center justify-center geometric-background">
            <div class="w-full max-w-sm  bg-opacity-70 backdrop-blur-sm p-8 rounded-lg shadow-2xl">
                <x-auth-session-status class="mb-6" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div>
                        <x-input-label for="email" :value="__('Username')" class="text-xl font-semibold  dark-text text-white" />
                        <x-text-input id="email" class="block mt-1 p-2 w-full bg-gray-800 border-gray-600 text-white focus:border-gray-500 focus:ring-gray-500 rounded-sm placeholder-gray-500"
                            type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Enter your username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" class="text-xl font-semibold  dark-text text-white" />
                        <x-text-input id="password" class="block mt-1 p-2 w-full bg-gray-800 border-gray-600 text-white focus:border-gray-500 focus:ring-gray-500 rounded-sm placeholder-gray-500"
                            type="password"
                            name="password"
                            required autocomplete="current-password" placeholder="Enter your password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between mt-4 text-xs">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-500 text-white bg-gray-700 shadow-sm focus:ring-gray-400" name="remember">
                            <span class="ms-2 text-black-500">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                        <a class="text-black-500 hover:text-white underline transition-colors" href="{{ route('password.request') }}">
                            {{ __('Forgot password?') }}
                        </a>
                        @endif
                    </div>

                    <div class="mt-6 flex gap-4"> <!-- Added flex and gap -->
                        <!-- Login Button -->
                        <button type="submit" class="w-1/2 flex justify-center py-3 bg-gray-200 hover:bg-white text-gray-800 font-bold rounded-sm shadow-md transition-colors uppercase tracking-widest">
                            {{ __('Login') }}
                        </button>

                        <!-- Registration Link (Styled as Button) -->
                        <a href="{{ route('register') }}" class="w-1/2 flex justify-center py-3 bg-gray-200 hover:bg-white text-gray-800 font-bold rounded-sm shadow-md transition-colors uppercase tracking-widest">
                            {{ __('registration') }}
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </body>
</x-guest-layout>