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
    <x-home.navbar />
    <main
        class="bg-backgorund-light dark:bg-backgorund-dark text-secondary dark:text-secondary-dark flex min-h-screen flex-col w-full pt-16 transition-all duration-300">
        <x-home.hero-section />
        <x-home.feature-section />
        <x-home.how-it-works-section />
        <x-home.recipes-section />
        <x-home.cta-section />
        <x-home.footer />
    </main>
</body>

</html>