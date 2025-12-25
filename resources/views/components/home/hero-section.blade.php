<section class="py-20">
    <div class="flex flex-row items-center">
        <div class="w-full lg:w-1/2 flex flex-col gap-8 items-center lg:items-start text-center lg:text-start">
            <x-text-h1>Masak Enak
                <span class="text-primary dark:text-primary-dark">Sesuai Budget</span>
            </x-text-h1>
            <p class="text-lg text-secondary dark:text-secondary-dark max-w-lg">Temukan resep
                berdasarkan bahan yang kamu punya dan budget yang tersedia. Meal planning
                jadi lebih mudah dan hemat!</p>
            <div
                class="flex items-center justify-between w-full max-w-[512px] lg:max-w-lg bg-backgorund-lightv2 dark:bg-backgorund-darkv2 shadow-xl rounded-2xl p-4">
                <x-inputs.text-input class="w-full md:w-[70%] rounded-xl px-4 py-6"
                    placeholder="Cari berdasarkan bahan..." />
                <div class="w-[25%] hidden md:block">
                    <div class="flex justify-center gap-2 items-center ">
                        <svg class="text-primary dark:text-primary-dark hidden md:block"
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-wallet w-5 h-5 text-primary">
                            <path
                                d="M19 7V4a1 1 0 0 0-1-1H5a2 2 0 0 0 0 4h15a1 1 0 0 1 1 1v4h-3a2 2 0 0 0 0 4h3a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1">
                            </path>
                            <path d="M3 5v14a2 2 0 0 0 2 2h15a1 1 0 0 0 1-1v-4"></path>
                        </svg>
                        <p class="text-primary dark:text-primary-dark text-sm hidden md:block">
                            Rp 50.000
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-5 w-full max-w-[512px] lg:max-w-lg">
                <x-buttons.primary-button class="h-14">Cari Resep Sekarang</x-primary-button>
                <x-buttons.secondary-button class="h-14">Lihat Cara Kerja</x-secondary-button>
            </div>
            <div class="flex items-center gap-4 md:gap-8 ">
                <div>
                    <p class="font-bold text-2xl">500+</p>
                    <p>Resep Lokal</p>
                </div>
                <div class="h-10 border-r border-neutral-300 dark:border-gray-600 "></div>
                <div>
                    <p class="font-bold text-2xl">100+</p>
                    <p>Bahan</p>
                </div>
                <div class="h-10 border-r border-neutral-300 dark:border-gray-600 "></div>
                <div>
                    <p class="font-bold text-2xl">Rp 15k</p>
                    <p>Min Budget</p>
                </div>
            </div>
        </div>

        <div class="w-1/2 hidden lg:block">
            <div class="flex justify-center">
                <img src="{{ asset('images/hero-food.jpg') }}" alt="Hero Image" class="w-4/5 rounded-3xl shadow-xl">
            </div>
        </div>
    </div>
</section>
