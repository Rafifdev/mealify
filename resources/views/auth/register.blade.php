<x-guest-layout>
    {{-- Header --}}
    <x-inputs.input-header title="Create New Account" text="Sign up to start planning your meals" class="font-bold" />

    <!-- Navigation -->
    <div class="h-10 items-center justify-center px-1.5 py-6 rounded-xl flex flex-row gap-3 w-full bg-neutral-200 my-5">
        <a type="button" class="text-center p-2 text-sm text-black font-bold cursor-pointer w-1/2"
            href="{{ route('login') }}">Login</a>
        <a type="button"
            class="text-center py-2 text-sm bg-backgorund-lightv2 dark:bg-backgorund-dark rounded-xl w-1/2 cursor-pointer">Register</a>
    </div>

    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
        @csrf

        <!-- Name -->
        <div>
            <x-inputs.input-label for="name" :value="__('Username')" />
            <x-inputs.text-input placeholder="John Shon" id="name" class="block mt-1 w-full" type="text"
                name="name" :value="old('name')"  autofocus autocomplete="name" />
            <x-inputs.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-inputs.input-label for="email" :value="__('Email')" />
            <x-inputs.text-input placeholder="name@example.com" id="email" class="block mt-1 w-full" type="email"
                name="email" :value="old('email')"  autocomplete="username" />
            <x-inputs.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-inputs.input-label for="password" :value="__('Password')" />

            <x-inputs.text-input placeholder="••••••••" id="password" class="block mt-1 w-full" type="password"
                name="password"  autocomplete="new-password" />

            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-inputs.input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-inputs.text-input placeholder="Repeat password" id="password_confirmation" class="block mt-1 w-full"
                type="password" name="password_confirmation"  autocomplete="new-password" />

            <x-inputs.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-buttons.primary-button class="w-full bg-primary dark:bg-primary-dark">
            {{ __('Register') }}
            </x-primary-button>
    </form>
</x-guest-layout>
