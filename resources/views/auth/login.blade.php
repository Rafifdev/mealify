<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- Header --}}
    <x-inputs.input-header title="Welcome Back" text="Sign in to your account to continue"/>

    <!-- Navigation -->
    <div
        class="h-10 items-center justify-center px-1.5 py-6 rounded-xl flex flex-row gap-3 w-full bg-neutral-200 my-5">
        <a type="button"
            class="text-center py-2 text-sm bg-backgorund-lightv2 dark:bg-backgorund-dark rounded-xl w-1/2 cursor-pointer">Login</a>
        <a type="button" class="text-center py-2 text-sm text-black font-bold cursor-pointer w-1/2"
            href="{{ route('register') }}">Register</a>
    </div>

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-inputs.input-label :value="__('Email')" />
            <x-inputs.text-input id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" autofocus autocomplete="username" placeholder="name@example.com" />
            <x-inputs.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-inputs.input-label :value="__('Password')" />
            <x-inputs.text-input id="password" class="block mt-1 w-full" type="password" name="password"
                autocomplete="current-password" placeholder="••••••••" />

            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded-full dark:bg-backgorund-darkv2 border-primary dark:border-primary-dark text-primary dark:text-primary-dark shadow-sm focus:ring-primary dark:focus:ring-primary-dark dark:focus:ring-offset-neutral-700"
                    name="remember">
                <span class="ms-2 text-neutral-600 text-sm font-semibold dark:text-white">{{ __('Remember me') }}</span>
            </label>
            <div class="font-bold text-sm text-primary dark:text-primary-dark hover:text-primary dark:hover:text-primary-dark hover:underline underline-offset-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>

        <x-buttons.primary-button class="w-full bg-primary dark:bg-primary-dark">
            {{ __('Log in') }}
            </x-primary-button>
    </form>
</x-guest-layout>
