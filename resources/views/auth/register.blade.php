<style>
    .body {
        background-color: black;
    }

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
    <div class="body">
        <div class="flex items-center justify-center geometric-background">
            <div class="w-full max-w-sm  bg-opacity-70 backdrop-blur-sm p-8 rounded-lg shadow-2xl">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div>
                        <x-input-label for="name" :value="__('Name')" class="text-xl font-semibold dark-text text-white" />
                        <x-text-input id="name"
                            class="block mt-1 p-2 w-full bg-gray-900 border-gray-600 text-white focus:border-gray-500 focus:ring-gray-500 rounded-sm placeholder-gray-500"
                            type="text" name="name" :value="old('name')" placeholder="Enter your Name" required autofocus
                            autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')"
                            class="text-xl font-semibold dark-text text-white" />
                        <x-text-input id="email"
                            class="block mt-1 p-2 w-full bg-gray-900 border-gray-600 text-white focus:border-gray-500 focus:ring-gray-500 rounded-sm placeholder-gray-500"
                            type="email" name="email" :value="old('email')" required autocomplete="username"
                            placeholder="Enter your email" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')"
                            class="text-xl font-semibold dark-text text-white" />
                        <x-text-input id="password"
                            class="block mt-1 p-2 w-full bg-gray-900 border-gray-600 text-white focus:border-gray-500 focus:ring-gray-500 rounded-sm placeholder-gray-500"
                            type="password" name="password" required autocomplete="current-password"
                            placeholder="Enter your password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirm Password')"
                            class="text-xl font-semibold dark-text text-white" />
                        <x-text-input id="password_confirmation"
                            class="block mt-1 p-2 w-full bg-gray-900 border-gray-600 text-white focus:border-gray-500 focus:ring-gray-500 rounded-sm placeholder-gray-500"
                            type="password" name="password_confirmation" required autocomplete="new-password"
                            placeholder="Confirm your password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-900 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                        <x-primary-button class="ms-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-guest-layout>