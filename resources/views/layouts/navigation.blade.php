{{-- Sidebar --}}
<nav
    class="flex justify-between flex-col h-full min-h-svh min-w-64 bg-backgorund-lightv2 dark:bg-backgorund-darkv2 border-r border-border dark:border-border-dark sticky top-0">
    <div>
        {{-- Logo --}}
        <div>
            <div class="flex flex-row items-center gap-3 p-4">
                <x-icons.application-logo
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-primary dark:bg-primary-dark text-secondary-dark dark:text-backgorund-darkv2" />
                <span class="text-xl font-bold text-foreground text-secondary dark:text-secondary-dark">Mealify</span>
            </div>
        </div>

        {{-- Menu utama --}}
        <div class="py-4 px-6 text-secondary dark:text-secondary-dark">
            <div>
                <p class="uppercase text-xs font-semibold mb-2 tracking-wider">Menu utama</p>
                <div class="w-full text-sm">
                    <ul class="capitalize flex w-full flex-col gap-2">
                        <li class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                            <div class="flex flex-row gap-2">
                                <x-icons.dashboard class="w-4 h-4" />
                                <a href="{{ url('/dashboard') }}">Dashboard</a>
                            </div>
                        </li>

                        <li class="nav-link {{ request()->routeIs('ingredients') ? 'active' : '' }}">
                            <div class="flex flex-row gap-2">
                                <x-icons.dashboard class="w-4 h-4" />
                                <a href="{{ url('/ingredients') }}">Bahan Masakan</a>
                            </div>
                        </li>

                        <li class="nav-link {{ request()->routeIs('budget') ? 'active' : '' }}">
                            <div class="flex flex-row gap-2">
                                <x-icons.dashboard class="w-4 h-4" />
                                <a href="{{ url('/budget') }}">Budget</a>
                            </div>
                        </li>

                        <li class="nav-link {{ request()->routeIs('meal-planner') ? 'active' : '' }}">
                            <div class="flex flex-row gap-2">
                                <x-icons.dashboard class="w-4 h-4" />
                                <a href="{{ url('/meal-planner') }}">Meal Planner</a>
                            </div>
                        </li>

                        <li class="nav-link {{ request()->routeIs('recipes') ? 'active' : '' }}">
                            <div class="flex flex-row gap-2">
                                <x-icons.dashboard class="w-4 h-4" />
                                <a href="{{ url('/recipes') }}">Resep</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="shrink-0 bg-border dark:bg-border-dark h-[1px] w-full my-12"></div>

            {{-- Settings --}}
            <div>
                <p class="uppercase text-xs font-semibold mb-2 h-6 tracking-wider">Lainnya</p>
                <ul>
                    <li
                        class="flex items-center flex-row gap-2 text-sm nav-link {{ request()->routeIs('profile.*') ? 'active' : '' }}">
                        <x-icons.dashboard class="w-4 h-4" />
                        <a href="{{ route('profile.edit') }}">Pengaturan</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    {{-- User Profile --}}
    <div class=" px-6">
        <div class="shrink-0 bg-borde dark:bg-border-dark h-[1px] mb-6"></div>
        <div class="flex flex-row items-center gap-3 py-4 text-secondary dark:text-secondary-dark">
            <img class="aspect-square rounded-full h-12 w-12" src="https://placehold.co/10x10">
            <div class="flex flex-row items-center justify-between w-full">
                <div class="flex flex-col">
                    <span class="capitalize font-semibold text-sm">Guest</span>
                    <p class="text-sm">Sudah Login</p>
                </div>
                <x-icons.dashboard class="w-4 h-4" />
            </div>
        </div>
    </div>
</nav>
