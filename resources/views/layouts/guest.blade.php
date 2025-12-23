<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-secondary dark:text-secondary-dark bg-backgorund-light dark:bg-backgorund-dark antialiased">
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-backgorund dark:bg-backgorund-dark gap-5">

        {{-- logo --}}
        <div class="flex flex-row items-center gap-5 my-5">
            <a href="/">
                <x-application-logo class="w-16 h-16 fill-current text-backgorund-light dark:text-backgorund-dark relative top-2" />
            </a>

            {{-- tittle --}}
            <div>
                <x-text-h1 class="lg:text-4xl">Mealify</x-text-h1>
                <p>Plan your meals easily and nutritionally balanced</p>
            </div>
        </div>

        {{-- Card --}}
        <div
            class="w-full sm:max-w-md px-6 py-4 bg-backgorund-lightv2 dark:bg-backgorund-dark shadow-lg overflow-hidden sm:rounded-lg dark:border dark:border-neutral-700">
            {{ $slot }}
        </div>

        {{-- Navigation return to the hompage --}}
        <div
            class="w-full flex flex-row justify-center gap-2 mb-5 font-bold text-sm text-primary dark:text-primary-dark hover:text-primary dark:hover:text-primary-dark hover:underline underline-offset-4">
            <x-arrow-left class="w-5" />
            <a href="/">
                Return to the homepage
            </a>
        </div>
    </div>
</body>

</html>
