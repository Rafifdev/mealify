<x-app-layout>
    <x-slot name="header">
        <h1>
            Resep
        </h1>
    </x-slot>

    <div class="sm:py-6 lg:py-8">
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="mb-12 flex items-center justify-center gap-3">
                <x-inputs.text-input placeholder='Cari resep...'/>
                <x-dropdown>
                    <x-slot:trigger>
                        <button
                            class="flex h-10 items-center justify-between rounded-xl border border-border dark:border-border-dark bg-backgorund-lightv2 dark:bg-backgorund-darkv2 px-3 py-2 text-sm w-44 text-secondary dark:text-secondary-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-filter h-4 w-4 mr-2">
                                <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
                            </svg>
                            Semua
                            <div class="h-4 w-4 opacity-50">
                                <x-icons.arrow-down />
                            </div>
                        </button>
                    </x-slot:trigger>

                    <x-slot:content>
                        <a href="#"
                            class="block px-4 py-2 nav-link">Profile</a>
                        <a href="#"
                            class="block px-4 py-2 nav-link">Logout</a>
                    </x-slot:content>
                </x-dropdown>
                
                <x-dropdown>
                    <x-slot:trigger>
                        <button
                            class="flex h-10 items-center justify-between rounded-xl border border-border dark:border-border-dark bg-backgorund-lightv2 dark:bg-backgorund-darkv2 px-3 py-2 text-sm w-44 text-secondary dark:text-secondary-dark">
                            Kecocokan
                            <div class="h-4 w-4 opacity-50">
                                <x-icons.arrow-down />
                            </div>
                        </button>
                    </x-slot:trigger>

                    <x-slot:content>
                        <a href="#"
                            class="block px-4 py-2 nav-link">Profile</a>
                        <a href="#"
                            class="block px-4 py-2 nav-link">Logout</a>
                    </x-slot:content>
                </x-dropdown>
            </div>

            <div class="grid grid-cols-4 gap-8">
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
                <x-cards.recipe-cardv2 />
            </div>
        </div>
    </div>
</x-app-layout>
