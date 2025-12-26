<section class="py-20">
    <div class="flex flex-row items-center">
        {{-- left --}}
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
                        <x-icons.wallet class="w-5 h-5 text-primary dark:text-primary-dark hidden md:block" />
                        <p class="text-primary dark:text-primary-dark text-sm font-semibold hidden md:block">
                            Rp 50.000
                        </p>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-5 w-full max-w-[512px] lg:max-w-lg">
                <x-buttons.primary-button class="h-14 bg-primary dark:bg-primary-dark">Cari Resep Sekarang</x-primary-button>
                    <x-buttons.secondary-button class="h-14">Lihat Cara Kerja</x-secondary-button>
            </div>
            
            <div class="flex items-center gap-4 md:gap-8 ">
                <div>
                    <p class="font-bold text-2xl">500+</p>
                    <p>Resep Lokal</p>
                </div>
                <div class="h-10 border-r border-border dark:border-border-dark "></div>
                <div>
                    <p class="font-bold text-2xl">100+</p>
                    <p>Bahan</p>
                </div>
                <div class="h-10 border-r border-border dark:border-border-dark "></div>
                <div>
                    <p class="font-bold text-2xl">Rp 15k</p>
                    <p>Min Budget</p>
                </div>
            </div>
        </div>

        {{-- right --}}
        <div class="w-1/2 hidden lg:block">
            <div class="flex justify-center">
                <img src="{{ asset('images/hero-food.jpg') }}" alt="Hero Image" class="w-4/5 rounded-3xl shadow-xl">
            </div>
        </div>
    </div>
</section>
