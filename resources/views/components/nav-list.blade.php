<div class="w-full text-sm">
    <ul class="capitalize flex w-full flex-col gap-2" :class="sidebarOpen ? '' : 'items-center'">
        <li class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a href="{{ url('/dashboard') }}">
                <div class="flex flex-row gap-2">
                    <x-icons.dashboard class="w-4 h-4 shrink-0" />
                    <span x-show="sidebarOpen" x-transition>Dashboard</span>
                </div>
            </a>
        </li>

        <li class="nav-link {{ request()->routeIs('ingredients') ? 'active' : '' }}">
            <a href="{{ url('/ingredients') }}">
                <div class="flex flex-row gap-2">
                    <x-icons.shopping-basket class="w-4 h-4 shrink-0" />
                    <span x-show="sidebarOpen" x-transition>Bahan Masakan</span>
                </div>
            </a>
        </li>

        <li class="nav-link {{ request()->routeIs('budget') ? 'active' : '' }}">
            <a href="{{ url('/budget') }}">
                <div class="flex flex-row gap-2">
                    <x-icons.wallet class="w-4 h-4 shrink-0" />
                    <span x-show="sidebarOpen" x-transition>Budget</span>
                </div>
            </a>
        </li>

        <li class="nav-link {{ request()->routeIs('meal-planner') ? 'active' : '' }}">
            <a href="{{ url('/meal-planner') }}">
                <div class="flex flex-row gap-2">
                    <x-icons.calender class="w-4 h-4 shrink-0" />
                    <span x-show="sidebarOpen" x-transition>Meal Planner</span>
                </div>
            </a>
        </li>

        <li class="nav-link {{ request()->routeIs('recipes') ? 'active' : '' }}">
            <a href="{{ url('/recipes') }}">
                <div class="flex flex-row gap-2">
                    <x-icons.book class="w-4 h-4 shrink-0" />
                    <span x-show="sidebarOpen" x-transition>Resep</span>
                </div>
            </a>
        </li>
    </ul>
</div>
