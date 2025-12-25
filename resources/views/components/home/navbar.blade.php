<header
    class="bg-backgorund-light/80 dark:bg-backgorund-dark/80 border-b border-neutral-300 dark:border-gray-600 w-full fixed top-0 left-0 right-0 z-50 backdrop-blur-md transition-all duration-300">
    <nav class="flex items-center justify-between h-16 mx-5 sm:mx-10 lg:mx-20">
        {{-- Logo --}}
        <div class="flex items-center gap-2 text-foreground">
            <x-svg.application-logo
                class="w-10 h-10 rounded-xl bg-primary dark:bg-primary-dark text-secondary-dark dark:text-secondary" />
            <span class="text-secondary dark:text-secondary-dark text-xl font-semibold">Mealify</span>
        </div>

        {{-- Navigation --}}
        <ul class="hidden md:flex items-center gap-8 text-secondary dark:text-secondary-dark">
            <li><a href="#">Fitur</a></li>
            <li><a href="#">Cara kerja</a></li>
            <li><a href="#">Resep</a></li>
        </ul>

        {{-- Button --}}
        <div class="flex items-center justify-center gap-1 lg:gap-3">
            <x-buttons.toggle-theme />
            <a href="{{ route('login') }}">
                <x-buttons.secondary-button class="hidden md:block">
                    {{ __('Log in') }}
                </x-buttons.secondary-button>
            </a>

            <a href="{{ route('register') }}">
                <x-buttons.primary-button class="hidden md:block">
                    <div class="flex items-center justify-center gap-4">
                        <x-svg.login-svg class="text-secondary-dark dark:text-secondary" />
                        {{ __('Register') }}
                    </div>
                </x-buttons.primary-button>
            </a>

            {{-- button Mobile --}}
            <button class="block md:hidden text-secondary dark:text-secondary-dark" id="menu-btn">
                <x-svg.hamburger id="icon-menu" class="w-7 block text-primary dark:text-primary-dark" />
                <x-svg.cross id="icon-close" class="w-7 hidden text-primary dark:text-primary-dark" />
            </button>
        </div>
    </nav>

    {{-- Mobile nav --}}
    <div class="hidden md:hidden py-4 w-full border-t border-neutral-300 dark:border-gray-600 z-50" id="mobile-menu">
        <div class="flex flex-col items-start justify-start gap-4 mx-5 sm:mx-10 text-secondary dark:text-secondary-dark">
            <a href="#features" class="text-muted-foreground hover:text-foreground transition-colors py-2">
                Fitur
            </a>
            <a href="#how-it-works" class="text-muted-foreground hover:text-foreground transition-colors py-2">
                Cara Kerja
            </a>
            <a href="#recipes" class="text-muted-foreground hover:text-foreground transition-colors py-2">
                Resep
            </a>
            <div class="border-t border-neutral-300 w-full pt-4">
                <a href="{{ route('login') }}">
                    <x-buttons.primary-button class="w-full">
                        {{ __('Log in') }}
                    </x-buttons.primary-button>
                </a>
            </div>
        </div>
    </div>
</header>
