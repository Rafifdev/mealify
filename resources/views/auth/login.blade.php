<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- Header --}}
    <x-inputs.input-header title=" Welcome Back" text="Sign in to your account to continue" />

    <!-- Navigation -->
    <div
        class="h-10 items-center justify-center rounded-md p-1 text-muted-foreground grid w-full grid-cols-2 bg-neutral-400 my-5">
        <a type="button" class="text-center bg-backgorund-lightv2 dark:bg-backgorund-dark rounded-md py-1 cursor-pointer">Login</a>
        <a type="button" class="text-center text-black font-bold cursor-pointer" href="{{ route('register') }}">Register</a>
    </div>

    <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-5">
        @csrf

        <!-- Email Address -->
        <div>
            <x-inputs.input-label :value="__('Email')" />
            <x-inputs.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                autofocus autocomplete="username" placeholder="name@example.com" />
            <x-inputs.input-error :messages="$errors->get('email')" class="mt-2"/>
        </div>

        <!-- Password -->
        <div>
            <x-inputs.input-label :value="__('Password')" />
            <x-inputs.text-input id="password" class="block mt-1 w-full" type="password" name="password"
                autocomplete="current-password" placeholder="••••••••"/>

            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded-full dark:bg-backgorund-darkv2 border-primary dark:border-primary-dark text-primary dark:text-primary-dark shadow-sm focus:ring-primary dark:focus:ring-primary-dark dark:focus:ring-offset-neutral-700"
                    name="remember">
                <span class="ms-2 text-sm text-neutral-600 dark:text-white">{{ __('Remember me') }}</span>
            </label>
            <div>
                @if (Route::has('password.request'))
                    <a class="font-bold text-sm text-primary dark:text-primary-dark hover:text-primary dark:hover:text-primary-dark hover:underline underline-offset-4"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </div>

        <x-buttons.primary-button class="w-full">
            {{ __('Log in') }}
        </x-primary-button>
    </form>
</x-guest-layout>
