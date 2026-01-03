<aside
    class="flex justify-between flex-col h-full min-h-svh bg-backgorund-lightv2 dark:bg-backgorund-darkv2 border-r border-border dark:border-border-dark sticky top-0 transition-all duration-300"
    :class="sidebarOpen ? 'w-72 ' : 'w-20'">

    {{-- Menu utama --}}
    <div>
        {{-- Logo --}}
        <div class="flex flex-row items-center gap-3 p-4">
            <x-icons.application-logo
                class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary dark:bg-primary-dark text-secondary-dark dark:text-backgorund-darkv2 shrink-0" />
            <span class="text-xl font-bold text-foreground text-secondary dark:text-secondary-dark" x-show="sidebarOpen"
                x-transition>Mealify</span>
        </div>

        {{-- Navigation --}}
        <div class="flex flex-col items-start px-4 py-4 text-secondary dark:text-secondary-dark">
            <div class="w-full">
                <p class="uppercase text-xs font-semibold mb-2 tracking-wider" x-show="sidebarOpen" x-transition>Menu
                    utama</p>
                <x-nav-list />
            </div>

            <div class="shrink-0 bg-border dark:bg-border-dark h-[1px] w-full my-12" x-show="sidebarOpen" x-transition>
            </div>

            {{-- Settings --}}
            <div class="mt-2 w-full">
                <p class="uppercase text-xs font-semibold mb-2 h-6 tracking-wider" x-show="sidebarOpen" x-transition>
                    Lainnya</p>
                <ul>
                    <li
                        class="flex items-center flex-row gap-2 text-sm nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}" :class="sidebarOpen ? '' : 'justify-center'">
                        <x-icons.settings class="w-4 h-4 shrink-0" />
                        <a href="{{ route('profile.edit') }}" x-show="sidebarOpen" x-transition>Pengaturan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- User Profile and logout button --}}
    <div class="px-6">
        <div class="shrink-0 bg-borde dark:bg-border-dark h-[1px] mb-6"></div>
        <div class="flex flex-row items-center gap-3 py-4 text-secondary dark:text-secondary-dark">
            <img class="aspect-square rounded-full h-12 w-12" src="https://placehold.co/10x10" x-show="sidebarOpen"
                x-transition>
            <div class="flex flex-row items-center justify-between w-full">
                <div class="flex flex-col" x-show="sidebarOpen" x-transition>
                    <span class="capitalize font-semibold text-sm">Guest</span>
                    <p class="text-xs">Sudah Login</p>
                </div>

                {{-- Logout --}}
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="nav-link">
                        <x-icons.login-svg class="w-4 h-4 shrink-0" />
                    </button>
                </form>
            </div>
        </div>
    </div>
</aside>
