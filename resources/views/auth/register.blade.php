<x-guest-layout>
    {{-- Header --}}
    <x-inputs.input-header title="Create a New Account" text="Sign up to start planning your meals" class="font-bold"/>

    <!-- Navigation -->
    <div
        class="h-10 items-center justify-center rounded-md p-1 text-muted-foreground grid w-full grid-cols-2 bg-neutral-400 my-5">
        <a type="button" class="text-center text-black font-bold cursor-pointer" href="{{ route('login') }}">Login</a>
        <a type="button" class="text-center bg-backgorund-light dark:bg-backgorund-dark rounded-md py-1 cursor-pointer">Register</a>
    </div>

    <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-5">
        @csrf

        <!-- Name -->
        <div>
            <x-inputs.input-label for="name" :value="__('Username')" />
            <x-inputs.text-input placeholder="John Shon" id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-inputs.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-inputs.input-label for="email" :value="__('Email')" />
            <x-inputs.text-input placeholder="name@example.com" id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-inputs.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div>
            <x-inputs.input-label for="password" :value="__('Password')" />

            <x-inputs.text-input placeholder="••••••••" id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-inputs.input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-inputs.text-input placeholder="Repeat password" id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-inputs.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <x-buttons.primary-button class="w-full">
            {{ __('Register') }}
        </x-primary-button>
    </form>
</x-guest-layout>
