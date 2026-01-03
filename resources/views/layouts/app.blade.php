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
        <div class="flex" x-data="{ sidebarOpen: true }">
            @include('layouts.navigation')

            <div class="flex flex-col w-full">
                <!-- Page Heading -->
                @isset($header)
                    <header
                        class="bg-backgorund-lightv2/80 dark:bg-backgorund-darkv2/80 border-b border-border dark:border-border-dark w-full h-fit sticky top-0 backdrop-blur-sm z-50">
                        <div
                            class="flex flex-row justify-between items-center w-full text-2xl mx-auto py-4 px-4 sm:px-6 lg:px-8">
                            <div class="flex items-center gap-5">
                                <button @click="sidebarOpen = !sidebarOpen" class="h-4 w-4 opacity-50">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                        <path d="M9 3v18"></path>
                                    </svg>
                                </button>
                                <div class="font-semibold text-secondary dark:text-secondary-dark leading-tight">
                                    {{ $header }}
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <x-buttons.toggle-theme class="border-primary" />
                                <div class="w-64 h-fit">
                                    <x-inputs.text-input placeholder="Cari resep, bahan..." />
                                </div>
                            </div>
                        </div>
                    </header>
                @endisset

                <!-- Page Content -->
                <main class="flex-1">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
</body>

</html>
