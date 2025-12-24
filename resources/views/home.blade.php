<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body>
    <main
        class="bg-backgorund-light dark:bg-backgorund-dark text-secondary dark:text-secondary-dark flex items-center min-h-screen flex-col w-full">
        <header
            class="bg-backgorund-light/80 dark:bg-backgorund-dark/80 border-b border-neutral-600 w-full sticky top-0 left-0 right-0 z-50 backdrop-blur-md">
            <nav class="flex items-center justify-between h-16 mx-5 sm:mx-10 md:mx-16 lg:mx-20">
                {{-- Logo --}}
                <div class="flex items-center gap-2 text-foreground">
                    <x-application-logo class="w-10 h-10 rounded-xl bg-primary dark:bg-primary-dark" />
                    <span class="text-secondary dark:text-secondary-dark text-xl font-semibold">Mealify</span>
                </div>

                {{-- Navigation --}}
                <ul class="hidden md:flex items-center gap-8">
                    <li><a href="">Features</a></li>
                    <li><a href="">How it works</a></li>
                    <li><a href="">Recipes</a></li>
                </ul>

                {{-- Button --}}
                <div class="flex items-center justify-center gap-3">
                    <x-toggle-theme />
                    <x-secondary-button>
                        Login
                    </x-secondary-button>
                    <x-primary-button class="flex items-center justify-center gap-4">
                        <x-login-svg class="text-secondary-dark dark:text-secondary" />
                        Register
                    </x-primary-button>
                </div>
            </nav>
        </header>
        
        <div class="min-h-screen">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, dignissimos culpa
            dolorem
            dolor atque repellat nemo dolore officiis deserunt error facere, perspiciatis voluptate labore iste laborum
            dolores natus non accusantium.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, dignissimos
            culpa dolorem
            dolor atque repellat nemo dolore officiis deserunt error facere, perspiciatis voluptate labore iste laborum
            dolores natus non accusantium.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, dignissimos
            culpa dolorem
            dolor atque repellat nemo dolore officiis deserunt error facere, perspiciatis voluptate labore iste laborum
            dolores natus non accusantium.</div>
        <div class="min-h-screen">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, dignissimos culpa
            dolorem
            dolor atque repellat nemo dolore officiis deserunt error facere, perspiciatis voluptate labore iste laborum
            dolores natus non accusantium.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, dignissimos
            culpa dolorem
            dolor atque repellat nemo dolore officiis deserunt error facere, perspiciatis voluptate labore iste laborum
            dolores natus non accusantium.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, dignissimos
            culpa dolorem
            dolor atque repellat nemo dolore officiis deserunt error facere, perspiciatis voluptate labore iste laborum
            dolores natus non accusantium.</div>
    </main>
</body>

</html>
