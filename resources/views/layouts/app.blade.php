<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('dark', false) ? 'dark' : '' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body class="antialiased">
    <div class="min-h-screen bg-backgorund-light dark:bg-backgorund-dark">
        <div class="flex">
            @include('layouts.navigation')

            <div class="flex flex-col w-full">
                <!-- Page Heading -->
                @isset($header)
                    <header class="bg-backgorund-lightv2/80 dark:bg-backgorund-darkv2/80 border-b border-border dark:border-border-dark w-full h-fit sticky top-0 backdrop-blur-sm">
                        <div
                            class="flex flex-row justify-between items-center w-full text-2xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            <div class="font-semibold text-secondary dark:text-secondary-dark leading-tight">
                                {{ $header }}
                            </div>
                            <div class="min-w-64 h-fit">
                                <x-inputs.text-input placeholder="Cari resep, bahan..." />
                            </div>
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1">
                    <livewire:dashboard />
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
